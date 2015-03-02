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
		</div><!-- end nav --><div class="row">

	<div class="span12">
		<ul class="breadcrumb">
			<li><a href="#">Home</a> <span class="divider">/</span></li>
			<li><a href="#">Account</a> <span class="divider">/</span></li>
			<li class="active"><a href="#">Register</a></li>
		</ul>
		</div>

			<div class="span12">
				<h1>Create an account</h1>
				
				<br />				
				<form class="form-horizontal">
					<fieldset>
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
					  <div class="span6">
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
						  <input type="text" placeholder="" class="span4">
						</div>
					  </div>
					  </div>
					  
					<div class="span12 no_margin_left">
					<legend>Your login </legend>
					<div class="span6 no_margin_left">
					  <div class="control-group">
						<label class="control-label">Username</label>
						<div class="controls docs-input-sizes">
						  <input type="text" placeholder="" class="span4">
						</div>
					  </div>					 
					  </div>					 
<div class="span6">
					  <div class="control-group">
						<label class="control-label">Password</label>
						<div class="controls docs-input-sizes">
						  <input type="text" placeholder="" class="span4">
						</div>
					  </div>					  <div class="control-group">
						<label class="control-label">Confirm password</label>
						<div class="controls docs-input-sizes">
						  <input type="text" placeholder="" class="span4">
						</div>
					  </div>
					</div>

					  
					  

					  
					  </div>

					
				<div class=" span12 no_margin_left">
					<hr>
					<div class="span8">
						<input type="checkbox" value="option1" name="optionsCheckboxList1"> I have read and agree to the Privacy Policy<br />
						<input type="checkbox" value="option2" name="optionsCheckboxList2"> Subscribe to our newsletter
						
					 </div>
					 <div class="span3"><button class="btn btn-primary btn-large pull-right" type="submit">Register</button></div>
					 <hr>
          </div></fieldset>
				  </form>
	  
			</div>
		
		<hr />


	
</div>
 <?php include('resources/sections/footer.php');?>