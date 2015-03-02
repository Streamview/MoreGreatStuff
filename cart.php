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

	 
	<h1> Shopping Cart</h1><br />
	 
        <table class="table table-bordered table-striped">
		  <thead>
			  <tr>
				<th>Remove</th>
				<th>Image</th>
				<th>Product Name</th>
				<th>Model</th>
				<th>Quantity</th>
				<th>Unit Price</th>
				<th>Total</th>
			  </tr>
			</thead>
			<tbody>
			  <tr>
				<td class=""><input type="checkbox" value="option1" id="optionsCheckbox"></td>
				<td class="muted center_text"><a href="product.html"><img src="css/images/macbook-pro.jpg"></a></td>
				<td>MacBook Pro</td>
				<td>Product 18</td>
				<td><input type="text" placeholder="1" class="input-mini"></td>
				<td>$2,350.00</td>
				<td>$2,350.00</td>
			  </tr>			  
			  <tr>
				<td class=""><input type="checkbox" value="option1" id="optionsCheckbox"></td>
				<td class="muted center_text"><a href="product.html"><img src="css/images/macbook-pro.jpg"></a></td>
				<td>MacBook Pro</td>
				<td>Product 18</td>
				<td><input type="text" placeholder="1" class="input-mini"></td>
				<td>$2,350.00</td>
				<td>$2,350.00</td>
			  </tr>				 
			  <tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td><strong>$4,700.00</strong></td>
			  </tr>		  
			</tbody>
		  </table>
		  
		  <form class="form-horizontal">
		<fieldset>	  
		  
		  
		            <div class="accordion" id="accordion2">
            <div class="accordion-group">
              <div class="accordion-heading">

                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                  <h3>Apply discount code</h3>
                </a>
              </div>
              <div id="collapseOne" class="accordion-body collapse in">
                <div class="accordion-inner">
          <div class="control-group">
            <label for="input01" class="control-label">Discount code: </label>
            <div class="controls">
              <input type="text" id="input01" class="input-xlarge" placeholder="Enter your coupon here">
              <p class="help-block">You can only use one discount code at a time</p>
            </div>
          </div>
                </div>
              </div>
            </div>

            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
					<h3>Use gift voucher</h3>
                </a>
              </div>
			                <div id="collapseTwo" class="accordion-body collapse">
                <div class="accordion-inner">
          <div class="control-group">
            <label for="input01" class="control-label">Gift voucher: </label>
            <div class="controls">
              <input type="text" id="input01" class="input-xlarge" placeholder="Enter your gift voucher here">
              <p class="help-block">You can use multiple gift vouchers at a time</p>
            </div>
          </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
		  <div class="span5">
            <button class="btn btn-primary" type="submit">Update</button>
			</div>		  
			<div class="span2">
            <button class="btn btn-primary" type="submit">Continue shopping</button>
			</div>		  
			<div class="span5">
            <a href="checkout.html" class="btn btn-primary pull-right">Checkout</a>
			</div>
          </div>
        </fieldset>
        </form>
  <?php include('resources/sections/footer.php');?>