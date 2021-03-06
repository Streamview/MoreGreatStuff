<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Bootstrap - shopping cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link id="switch_style" href="bootstrap/css/united/bootstrap.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/jquery.rating.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

  </head>

  <body>

    <div class="container">
		<div class="row"><!-- start header -->
			<div class="span4 logo">
			<a href="index.html">
				<h1>Bootstrap Cart</h1>
			</a>
			</div>
			<div class="span8">
			
				<div class="row">
					<div class="span1">&nbsp;</div>
					<div class="span2">
						<h4>Currency</h4>
						<a href="#">USD</a> |
						<a href="#"><strong>GBP</strong></a> |
						<a href="#">EUR</a>
					</div>
					<div class="span2">
						<a href="cart.html"><h4>Shopping Cart (3)</h4></a>
						<a href="cart.html">2 item(s) - $40.00</a>
					</div>					
					<div class="span3 customer_service">
						<h4>FREE delivery on ALL orders</h4>
						<h4><small>Customer service: 0800 8475 548</small></h4>
					</div>
				</div>
				<br />
				<div class="row">
					<div class="links pull-right">
						<a href="index.html">Home</a> |
						<a href="my_account.html">My Account</a> |
						<a href="cart.html">Shopping Cart</a> |
						<a href="two-column.html">About</a> |
						<a href="contact.html">Contact</a>
					</div>
				
				</div>
			</div>
		</div><!-- end header -->
		
		<div class="row"><!-- start nav -->
			<div class="span12">
			  <div class="navbar">
					<div class="navbar-inner">
					  <div class="container" style="width: auto;">
						<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						  <span class="icon-bar"></span>

						  <span class="icon-bar"></span>
						  <span class="icon-bar"></span>
						</a>
						<div class="nav-collapse">
						  <ul class="nav">
							  <li class="dropdown">
							  <a href="category.html" class="dropdown-toggle" data-toggle="dropdown">Desktops <b class="caret"></b></a>
							  <ul class="dropdown-menu">
								<li><a href="listings.html">PC</a></li>
								<li><a href="listings.html">Mac</a></li>
								<li class="divider"></li>
								<li class="nav-header">Accessories</li>
								<li><a href="listings.html">Keyboard</a></li>
								<li><a href="listings.html">Speakers</a></li>
							  </ul>
							</li>
							<li><a href="category.html">Laptops</a></li>

							<li><a href="category.html">Components</a></li>
							<li><a href="category.html">Tablets</a></li>
							<li class="dropdown">
							  <a href="category.html" class="dropdown-toggle" data-toggle="dropdown">Software <b class="caret"></b></a>
							  <ul class="dropdown-menu">
								<li><a href="listings.html">Business & Office</a></li>
								<li><a href="listings.html">Children's Fun & Learning</a></li>
								<li><a href="listings.html"> Digital Imaging</a></li>
								<li class="divider"></li>
								<li class="nav-header">PC Games</li>
								<li><a href="listings.html">Action & Shooter</a></li>
								<li><a href="listings.html">Adventure</a></li>
								<li><a href="listings.html">Fighting</a></li>
							  </ul>
							</li>
							 <li><a href="listings.html">Phones &amp; PDAs</a></li>

						  </ul>

						  <ul class="nav pull-right">
						   <li class="divider-vertical"></li>
							<form class="navbar-search" action="">
								<input type="text" class="search-query span2" placeholder="Search">
								<button class="btn btn-primary btn-small search_btn" type="submit">Go</button>
							</form>
							
						  </ul>
						</div><!-- /.nav-collapse -->
					  </div>
					</div><!-- /navbar-inner -->
				</div><!-- /navbar -->
			</div>
		</div><!-- end nav -->	 <div class="row">
		 <div class="span12">
		     <ul class="breadcrumb">
    <li>
    <a href="#">Home</a> <span class="divider">/</span>
    </li>
    <li>
    <a href="cart.html">Shopping Cart</a> <span class="divider">/</span>
    </li>
    <li class="active">
    <a href="/">Checkout</a>
    </li>
    </ul>
	
	
	  	 <div class="row">
	 <div class="span12">
	 
    
		            <div class="accordion" id="accordion2">
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                  <h3>Step 1: Checkout Options</h3>
                </a>
              </div>
              <div id="collapseOne" class="accordion-body collapse in">
                <div class="accordion-inner">
				  
				  <div class="span6 no_margin_left">
				<h4>New Customer</h4>
				<p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>

				<form class="">
					<fieldset>
						<input type="radio" value="option1" name="optionsCheckboxList1"> Register Account <br />
						<input type="radio" value="option2" name="optionsCheckboxList1"> Guest Checkout <br /><br /><br /><br /><br />
					  	<a class="btn btn-primary pull-right" href="#collapse2" data-toggle="collapse" data-parent="#collapse2">Continue</a>

					</fieldset>
				</form>
				  </div>
				<div class="span5">
				<h4>Registered Customers</h4>
				<p>If you have an account with us, please log in.</p>

				<form class="">
					<fieldset>
						<div class="control-group">
							<label for="focusedInput" class="control-label">Username</label>
							<div class="controls">
							<input type="text" placeholder="Enter your username" id="username" class="input-xlarge focused">
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">Password</label>
							<div class="controls">
							<input type="password" placeholder="Enter your password" id="password" class="input-xlarge">
							</div>
						</div>

											  	<a class="btn btn-primary pull-right" href="#collapse2">Continue</a>

					</fieldset>
				</form>
				  </div>
				  
				  
                </div>
              </div>
            </div>

		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse2">
					<h3>Step 2: Billing Details</h3>
				</a>
			</div>
			<div id="collapse2" class="accordion-body collapse">
				<div class="accordion-inner">
										<div class="span6 no_margin_left">
						<legend>Your Personal Details</legend>
					  <div class="control-group">
						<label class="control-label">First Name</label>
						<div class="controls docs-input-sizes">
						  <input type="text" placeholder="" class="span4">
						</div>
					  </div>
					  <div class="control-group">
						<label class="control-label">Last Name</label>
						<div class="controls docs-input-sizes">
						  <input type="text" placeholder="" class="span4">
						</div>
					  </div>					  
					  <div class="control-group">
						<label class="control-label">Email Address</label>
						<div class="controls docs-input-sizes">
						  <input type="text" placeholder="" class="span4">
						</div>
					  </div>					 

					  <div class="control-group">
						<label class="control-label">Telephone</label>
						<div class="controls docs-input-sizes">
						  <input type="text" placeholder="" class="span4">
						</div>
					  </div>
					  </div>
					  <div class="span5">
					<legend>Your Address </legend>
					  <div class="control-group">
						<label class="control-label">Address 1</label>
						<div class="controls docs-input-sizes">
						  <input type="text" placeholder="" class="span4">
						</div>
					  </div>
					  <div class="control-group">
						<label class="control-label">Address 2</label>
						<div class="controls docs-input-sizes">
						  <input type="text" placeholder="" class="span4">
						</div>
					  </div>					  <div class="control-group">
						<label class="control-label">City</label>
						<div class="controls docs-input-sizes">
						  <input type="text" placeholder="" class="span4">
						</div>
					  </div>
					  <div class="control-group">
						<label class="control-label">ZIP</label>
						<div class="controls docs-input-sizes">
						  <input type="text" placeholder="" class="span4">
						</div>
					  </div>					  <div class="control-group">
						<label class="control-label">Country</label>
						<div class="controls docs-input-sizes">
							<select  class="span4">
							<option>United Kingdom</option>
							<option>United States</option>
							</select>
						</div>
					  </div>
					  </div>
					  <div class="span11 no_margin_left">
					  <br /><a class="btn btn-primary pull-right" href="#collapse3">Continue</a><br /><br /><br />
					    </div>
				</div>

			</div>
		</div>
			
			
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse3">
					<h3>Step 3: Delivery Details</h3>
				</a>
			</div>
			<div id="collapse3" class="accordion-body collapse">
<div class="accordion-inner">
										<div class="span6 no_margin_left">
						<legend>Your Personal Details</legend>
					  <div class="control-group">
						<label class="control-label">First Name</label>
						<div class="controls docs-input-sizes">
						  <input type="text" placeholder="" class="span4">
						</div>
					  </div>
					  <div class="control-group">
						<label class="control-label">Last Name</label>
						<div class="controls docs-input-sizes">
						  <input type="text" placeholder="" class="span4">
						</div>
					  </div>					  
					  <div class="control-group">
						<label class="control-label">Email Address</label>
						<div class="controls docs-input-sizes">
						  <input type="text" placeholder="" class="span4">
						</div>
					  </div>					 

					  <div class="control-group">
						<label class="control-label">Telephone</label>
						<div class="controls docs-input-sizes">
						  <input type="text" placeholder="" class="span4">
						</div>
					  </div>
					  </div>
					  <div class="span5">
					<legend>Your Address </legend>
					  <div class="control-group">
						<label class="control-label">Address 1</label>
						<div class="controls docs-input-sizes">
						  <input type="text" placeholder="" class="span4">
						</div>
					  </div>
					  <div class="control-group">
						<label class="control-label">Address 2</label>
						<div class="controls docs-input-sizes">
						  <input type="text" placeholder="" class="span4">
						</div>
					  </div>					  <div class="control-group">
						<label class="control-label">City</label>
						<div class="controls docs-input-sizes">
						  <input type="text" placeholder="" class="span4">
						</div>
					  </div>
					  <div class="control-group">
						<label class="control-label">ZIP</label>
						<div class="controls docs-input-sizes">
						  <input type="text" placeholder="" class="span4">
						</div>
					  </div>					  <div class="control-group">
						<label class="control-label">Country</label>
						<div class="controls docs-input-sizes">
							<select  class="span4">
							<option>United Kingdom</option>
							<option>United States</option>
							</select>
						</div>
					  </div>
					  </div>
					  					  <div class="span11 no_margin_left">
					  <br /><a class="btn btn-primary pull-right" href="#collapse3">Continue</a><br /><br /><br />
					    </div>
				</div>
			</div>
		</div>
			
			
					<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse4">
					<h3>Step 4: Payment Method</h3>
				</a>
			</div>
			<div id="collapse4" class="accordion-body collapse">
				<div class="accordion-inner">
											<input type="radio" value="option1" name="payment1"> Collect in store<br />
						<input type="radio" value="option2" name="payment1"> Paypal<br />
						<input type="radio" value="option2" name="payment1"> Google checkout<br /><br />
<div class="control-group">
            <label for="textarea" class="control-label">Comments</label>
            <div class="controls">
              <textarea rows="3" id="textarea" class="input-xlarge span11"></textarea>
            </div>
          </div>
					  <div class="span11 no_margin_left">
					  <br /><a class="btn btn-primary pull-right" href="#collapse3">Confirm order</a><br /><br /><br />
					    </div>				</div>
			</div>
		</div>
			
			
			
			
			
          </div>
	  
		</div>

      </div>
 <?php include('resources/sections/footer.php');?>