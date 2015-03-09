<?php 
require_once '/home/houspcom/public_html/moregreatstuff.ca/config.php';
global $page_title;
?>
<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>More Great Stuff - <?php echo $page_title?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
     <link href="/bootstrap/css/bootstrap.css" rel="stylesheet">
   
    <!--  <link id="switch_style" href="bootstrap/css/slate/bootstrap.css" rel="stylesheet"> -->
    <!-- <link id="switch_style" href="http://bootswatch.com/slate/bootstrap.css" rel="stylesheet">-->
    <link href="/css/main.css" rel="stylesheet">
    <link href="/css/jquery.rating.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <style>
    	#currency-col img {
    		width:24px;
    	}
    	
    	#site-name {
    		font-size:38px;
    	}
    	
    	.navbar .nav > li > a {
    		font-size:9pt;
    		color:#FFF;
    	}
    	
    </style>
  </head>
  <body>				
  
  <div class="container">
		<div class="row"><!-- start header -->
			<div class="span4 logo">
				<div clas="row">
					<a href="/">
						<h1 id="site-name">More Great Stuff</h1>
					</a>
				</div>
				<div clas="row" style="margin-top: 15px;">
					<form class="navbar-search" action="/search/">
						<input name="keywords" type="text" class="search-query span2" placeholder="Search" style="width: 230px;">
						<button class="btn btn-primary btn-small search_btn" type="submit">Go</button>
					</form>
				</div>
			</div>
			<div class="span8">
			
				<div class="row">
					<div class="span1">&nbsp;</div>
					<div id="currency-col" class="span2">
						<h4>Currency</h4>
						<img alt="CA" src="/resources/img/ca.png"> |
						<img alt="US" src="/resources/img/us.png">
					</div>
					<div class="span2">
						<a href="cart.html"><h4>Shopping Cart (3)</h4></a>
						<a href="cart.html">2 item(s) - $40.00</a>
					</div>					
					<div class="span3 customer_service">
						<!-- <h4>FREE delivery on ALL orders</h4> -->
						<h4><small>Customer service: (647) 956-9215</small></h4>
					</div>
				</div>
				<br />
				<div class="row">
					<div class="links pull-right">
						<a href="/">Home</a> |
						<a href="my_account.html">My Account</a> |
						<a href="cart.html">Shopping Cart</a> |
						<a href="/contact/">Contact</a>
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
							 	<li><a href="#">Television and Multimedia</a></li>
							 	<li><a href="#">Audio/Video</a></li>
							 	<li><a href="#">Imaging</a></li>
							 	<li><a href="#">Networking</a></li>
							 	<li><a href="#">Auto & Marine Audio/Video</a></li>
							 	<li><a href="#">Telephone and Mobile</a></li>
							 	<li><a href="#">Accessories</a></li>
							 	<li><a href="/specials">Specials</a></li>

						  </ul>
							<!-- 
						  <ul class="nav pull-right">
						   <li class="divider-vertical"></li>
							<form class="navbar-search" action="">
								<input type="text" class="search-query span2" placeholder="Search">
								<button class="btn btn-primary btn-small search_btn" type="submit">Go</button>
							</form>
						  </ul> -->
						</div><!-- /.nav-collapse -->
					  </div>
					</div><!-- /navbar-inner -->
				</div><!-- /navbar -->
			</div>
		</div><!-- end nav -->