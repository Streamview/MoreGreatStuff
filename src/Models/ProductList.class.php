<?php
/**
 *	@final class  Models\CompanyList
 *	@extend Models\ModelList
 *	@author Ramone Burrell <burrellramone@gmail.com>
 *	@link http://burrellramone.com
 */
namespace Models;

use \Models;
use \Helpers;

final class CompanyList extends Models\ModelList {
	public function __construct (array $options = array()) {
		parent::__construct(get_class(), $options);
		$this->criteria["type_id"] = Models\UserType::findByLabel("Company")->id;
	}
	
	/**
	 * Finds a list of companies who would be available/suitable for
	 * fulfilling a reservation
	 * @param Models_Reservation $reservation The reservation in question
	 */
	public function findAvailable (Models\Reservation $reservation) {
		if (empty($reservation)) return false;
		
		$criteria = array(
			"closest_to" 			=> new Models\Point($reservation->getPickupAddress()->lat, $reservation->getPickupAddress()->lng),
			"status_id" 			=> Models\UserStatus::findByLabel("Active")->id,
			"available_at" 			=> $reservation->getUTCPickupDateTime(),
			"vehicle_body_type_id" 	=> $reservation->getDetails()->vehicle_body_type_id,
			"allow_animals" 		=> !empty($reservation->getDetails()->animals) ? 1 : NULL,
			"allow_children" 		=> !empty($reservation->getDetails()->children) ? 1 : NULL,
			"limit" 				=> \Config\App::MAX_COMPANY_RESERVATION_NOTIFICATIONS
		);
		
		return self::findByCriteria($criteria);
	}
	
	/**
	 * 
	 * @param array $criteria
	 */
	public function findByCriteria (array $criteria = array()) {
		if(empty($criteria)) return;
		$dbh = Helpers\Db::getInstance();
		
		$this->criteria = array_merge($this->criteria, $criteria);
		
		$where = "";
		$left_join = "";
		$left_join_arr = array();
		$addional_select_fields = "";
		$group_by = "GROUP BY user.id";
		$order_by = array("user.id DESC");
		$limit = "";

		if(!empty($criteria['keywords'])) {
			$keywords = explode(' ', $criteria['keywords']);
			$where .= " \nand (";
				
			foreach ($keywords as $index => $keyword) {
				$where .= " (user.name LIKE '%$keyword%' OR user.email LIKE '%{$keyword}%')";
				if ($index < (count($keywords) - 1)) {
					$where .= " OR ";
				}
			}
			$where .= " )";
		}
		
		if(!empty($this->criteria['company_id'])) {
			$where .= " \nand user.company_id = {$this->criteria['company_id']}";
		}
		
		if(!empty($this->criteria['type_id'])) {
			$where .= " \nand user_type.id = {$this->criteria['type_id']}";
			$left_join_arr['user_type'] = true;
		}
		
		if (!empty($this->criteria['car_capacity_atleast'])) {
			$where .= " \nand (vehicle.capacity - 1) >= {$this->criteria['car_capacity_atleast']}
						\nand (vehicle.status_id = (SELECT id FROM vehicle_status WHERE label = 'Active'))";
			$left_join_arr['vehicle'] = true;
		}
		
		if (!empty($this->criteria['billing_basis'])) {
			$where .= " \nand driver_billing_information.basis = {$this->criteria['billing_basis']}";
			$left_join_arr['driver_billing_information'] = true;
		}
		
		if (!empty($this->criteria['status_id'])) {
			$where .= " \nand user.status_id = {$this->criteria['status_id']}";
		}
		
		if (!empty($this->criteria['vehicle_make_id'])) {
			$where .= " \nand (vehicle_make.id = {$this->criteria['vehicle_make_id']} OR vehicle_make.id IS NULL)";		
			$left_join_arr['vehicle'] = true;
			$left_join_arr['vehicle_make'] = true;
		}
		
		if (!empty($this->criteria['vehicle_model_id'])) {
			$where .= " \nand (vehicle_model.id = {$this->criteria['vehicle_model_id']} OR vehicle_model.id IS NULL)";
			$left_join_arr['vehicle_model'] = true;
		}
		
		if (!empty($this->criteria['allow_animals'])) {
			$where .= " \nand company_policy.allow_animals = TRUE";
			$left_join_arr['company_policy'] = true;
		}
		
		if (!empty($this->criteria['allow_children'])) {
			$where .= " \nand company_policy.allow_children = TRUE";
			$left_join_arr['company_policy'] = true;
		}
		
		if (!empty($this->criteria['vehicle_body_type_id'])) {
			$where .= " \nand vehicle_body_type.id = {$this->criteria['vehicle_body_type_id']}";
			$left_join_arr['vehicle'] = true;
			$left_join_arr['vehicle_body_type'] = true;
		}
		
		if (!empty($this->criteria['service_id'])) {
			$where .= " \nand company_service.service_id = {$this->criteria['service_id']}";
		}
		
		if (!empty($this->criteria['driver_ids_not_in'])) {
			$where .= " \nand user.id NOT IN (" . $dbh->quoteArray($this->criteria['driver_ids_not_in']) .")";
		}
		
		if (!empty($this->criteria['trial_expiry_reminder_sent'])) {
			if ($this->criteria['trial_expiry_reminder_sent'] === false) {
				$where .= " \nand user.trial_expiry_reminder_sent = FALSE";
			} elseif ($this->criteria['trial_expiry_reminder_sent'] === true) {
				$where .= " \nand user.trial_expiry_reminder_sent = TRUE";
			}
		}
		
		if (!empty($this->criteria['trial_expiry_notification_sent'])) {
			if ($this->criteria['trial_expiry_notification_sent'] === true) {
				$where .= " \nand user.trial_expiry_notification_sent = TRUE";
			} elseif ($this->criteria['trial_expiry_notification_sent'] === false) {
				$where .= " \nand user.trial_expiry_notification_sent = FALSE";
			}
		}
		
		if (!empty($this->criteria['trial_expiry_date'])) {
			if (is_array($this->criteria['trial_expiry_date'])) {
				$where .= " \nand user.trial_expiry_date {$this->criteria['trial_expiry_date'][0]} '{$this->criteria['trial_expiry_date'][1]}'";
			} else {
				$where .= " \nand user.trial_expiry_date = '{$this->criteria['trial_expiry_date']}'";
			}
		}
		
		if (!empty($this->criteria['next_payment_date'])) {
			if (is_array($this->criteria['next_payment_date'])) {
				$where .= " \nand user.next_payment_date {$this->criteria['next_payment_date'][0]} '{$this->criteria['next_payment_date'][1]}'";
			} else {
				$where .= " \nand user.next_payment_date = '{$this->criteria['next_payment_date']}'";
			}
		}
		
		if (!empty($this->criteria['associates_with_company'])) {
			$where .= " \nand company_associate.company_id = '{$this->criteria['associates_with_company']}'";
			$left_join_arr['company_associate'] = true;
		}
		
		if (!empty($this->criteria['not_associates'])) {
			$where .= " \nand user.id NOT IN (SELECT associate_id from company_associate WHERE company_associate.associate_id = user.id)";
			$left_join_arr['company_associate'] = true;
		}
		
		if (!empty($this->criteria['associates'])) {
			$where .= " \nand user.id IN (SELECT associate_id from company_associate WHERE company_associate.associate_id = user.id)";
			$left_join_arr['company_associate'] = true;
		}
		
		if (!empty($this->criteria['not_companies'])) {
			$where .= " \nand user.id NOT IN ('". $dbh->quoteArray($this->criteria['not_companies'], "','") ."')";
		}
		
		if (!empty($this->criteria['available_at'])) { //UTC time
			//Will give the company 1 hour to pick up the client from the 
			//time he is available from and 2 hours to do the run to the
			//time he is available to
			//$where .= " \nand (TIME('{$this->criteria['available_at']}') between DATE_ADD(company_availability.time_from, INTERVAL 1 HOUR) and DATE_ADD(company_availability.time_to, INTERVAL 2 HOUR))
			           // \nand (DAYOFWEEK('{$this->criteria['available_at']}') = company_availability.day)";
			
			$where .= " \nand (TIME('{$this->criteria['available_at']}') > company_availability.time_from)
					   \nand (DAYOFWEEK('{$this->criteria['available_at']}') = company_availability.day)";
			$left_join_arr['company_availability'] = true;
		}
		
		if (array_key_exists('account_expired', $this->criteria)) {
			if (($this->criteria['account_expired'] === TRUE) || ($this->criteria['account_expired'] === 1)) {
				$where .= " \nand user.account_expired = 1";
			} else if (($this->criteria['account_expired'] === FALSE) || ($this->criteria['account_expired'] === 0)) {
				$where .= " \nand user.account_expired = 0 ";
			}
		}
		
		if (!empty($this->criteria['stripe_cus_id'])) {
			if ($this->criteria['stripe_cus_id'] == "IS NOT NULL") {
				$where .= " \nand user.stripe_cus_id IS NOT NULL";
			} else {
				$where .= " \nand user.stripe_cus_id = '{$this->criteria['stripe_cus_id']}'";
			}
		}
		
		
		
		$where = preg_replace("/^ (\nand)/", "WHERE", $where);

		if(!empty($this->criteria['closest_to'])) {
			$point = $this->criteria['closest_to'];
			if (!empty($addional_select_fields)) {
				$addional_select_fields .= ", ";
			}
			$addional_select_fields .= ", ASTEXT(geo_position) as company_lat_lng,
			(GLength(LineStringFromWKB(LineString(GEOMFROMTEXT(ASTEXT(geo_position)), GeomFromText('POINT({$point->getLat()} {$point->getLong()})')))))
			as distance_from_location";
			
			$where .= " \nand address.geo_position IS NOT NULL";
			$order_by[] = "(GLength(LineStringFromWKB(LineString(GEOMFROMTEXT(ASTEXT(geo_position)), GeomFromText('POINT({$point->getLat()} {$point->getLong()})'))))) ASC";
			
			$left_join_arr['company_business_location'] = true;
		}
		
		if (!empty($left_join_arr['carseat'])) {
			$left_join .= "LEFT JOIN carseat on carseat.user_id = user.id";
		}
		
		if (!empty($left_join_arr['company_availability'])) {
			$left_join .= "LEFT JOIN company_availability on company_availability.company_id = user.id";
		}
		
		if (!empty($left_join_arr['driver_billing_information'])) {
			$left_join .= "LEFT JOIN driver_billing_information on driver_billing_information.user_id = user.id";
		}
		
		if (!empty($left_join_arr['vehicle'])) {
			$left_join .= "LEFT JOIN vehicle ON vehicle.company_id = user.id";
		}
		
		if (!empty($left_join_arr['vehicle_body_type'])) {
			$left_join .= "LEFT JOIN vehicle_body_type ON vehicle_body_type.id = vehicle.body_type_id";
		}
		
		if (!empty($left_join_arr['company_policy'])) {
			$left_join .= "LEFT JOIN company_policy ON company_policy.company_id = user.id";
		}
		
		if (!empty($left_join_arr['driver_service'])) {
			$left_join .= "LEFT JOIN driver_service ON driver_service.user_id = user.id";
		}
		
		if (!empty($left_join_arr['company_business_location'])) {
			$left_join .= " LEFT JOIN company_business_location on company_business_location.company_id = user.id\n
						   LEFT JOIN address on address.id = company_business_location.address_id";
		}
		
		if ($left_join_arr['user_type']) {
			$left_join .= " LEFT JOIN user_type on user_type.id = user.type_id";
		}
		
		if (!empty($left_join_arr['company_associate'])) {
			$left_join .= "LEFT JOIN company_associate ON company_associate.associate_id = user.id";
		}
		
		if (!empty($this->criteria['limit'])) {
			if (is_array($this->criteria['limit'])) {
				
			} else {
				$limit = "LIMIT {$this->criteria['limit']}";
			}
		}
		
		$order_by = implode(", ", $order_by);
		
		$this->qry = "SELECT DISTINCT user.id
				{$addional_select_fields}
				FROM user
				{$left_join}
				{$where}
				{$group_by}
				ORDER BY {$order_by}
				{$limit}";
				
				/*print "<pre>";
				print_r($this->criteria);
				echo $this->qry;
				exit;*/
				
		return $this->getObjectsFromQry();
	}
}
