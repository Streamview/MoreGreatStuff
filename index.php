 <?php include('resources/sections/header.php');?>

    <div class="container">
		<div class="row"><!-- start header -->
			<div class="span4 logo">
			<a href="index.html">
				<h1>More Great Stuff</h1>
			</a>
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
		<div class="span3">
			<?php include('resources/sections/categories.php');?>
		</div>
        <div class="span9">

			<div id="myCarousel" class="carousel slide">
	            <div class="carousel-inner" role="listbox">  
	              
	              <div id="slide1" class="item active">
					<img src="css/images/carousel_1.jpg" alt="">
	                <div class="carousel-caption">
	                  <h4>First Thumbnail label</h4>
	                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
	                </div>
	              </div>
	              
	              <div id="slide2" class="item">
	              	<img src="css/images/carousel_2.jpg" alt="">
	                <div class="carousel-caption">
	                  <h4>Second Thumbnail label</h4>
	                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
	                </div>
	              </div>
	
	              <div id="slide3" class="item">
					<img src="css/images/carousel_3.jpg" alt="">
	                <div class="carousel-caption">
	                  <h4>Third Thumbnail label</h4>
	                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
	                </div>
	              </div>
	            </div>
	
	            <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
	            <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
	          </div>
          </div>
		  
		  
		  
		<div class="span7 popular_products">
		 <h4>Popular products</h4><br />
		<ul class="thumbnails">
       
	   <li class="span2">
          <div class="thumbnail">
            <a href="product.html"><img alt="" src="css/images/ps-vita-150cx123.jpg" /></a>
            <div class="caption">
              <a href="product.html"> <h5>PS Vita</h5></a>  Price: &#36;50.00<br /><br />
            </div>
          </div>
        </li>
       
	   <li class="span2">
          <div class="thumbnail">
            <a href="product.html"><img alt="" src="css/images/nexus-one-3-150x123.jpg" /></a>
            <div class="caption">
              <a href="product.html"> <h5>Nexus one</h5></a>  Price: &#36;50.00<br /><br />
            </div>
          </div>
        </li>
       
	   <li class="span2">
          <div class="thumbnail">
            <a href="product.html"><img alt="" src="css/images/thumb_sam_3d.jpg" /></a>
            <div class="caption">
              <a href="product.html"> <h5>Samsung 3D TV</h5></a>  Price: &#36;50.00<br /><br />
            </div>
          </div>
        </li>
       
	   <li class="span2">
          <div class="thumbnail">
            <a href="product.html"><img alt="" src="css/images/ipad_case.jpg" /></a>
            <div class="caption">
              <a href="product.html"> <h5>iPod Case</h5></a>  Price: &#36;50.00<br /><br />
            </div>
          </div>
        </li>
       
	   <li class="span2">
          <div class="thumbnail">
            <a href="product.html"><img alt="" src="css/images/HMX-H104.JPG" /></a>
            <div class="caption">
              <a href="product.html"> <h5>HMX Camcorder</h5></a>  Price: &#36;50.00<br /><br />
            </div>
          </div>
        </li>
       
	   <li class="span2">
          <div class="thumbnail">
            <a href="product.html"><img alt="" src="css/images/expic.png" /></a>
            <div class="caption">
              <a href="product.html"> <h5>Kindle Fire</h5></a>  Price: &#36;50.00<br /><br />
            </div>
          </div>
        </li>

      </ul>
		</div>
        <div class="span2">
		
		 <div class="roe">
		<h4>Newsletter</h4><br />
		<p>Sign up for our weekly newsletter and stay up-to-date with the latest offers, and newest products.</p>
		
		    <form class="form-search">
    <input type="text" class="span2" placeholder="Enter your email" /><br /><br />
    <button type="submit" class="btn pull-right">Subscribe</button>
    </form>
		</div><br /><br />
            <a href="#"><img alt="" title="" src="css/images/paypal_mc_visa_amex_disc_150x139.gif" /></a>
			<a href="#"><img alt="" src="css/images/bnr_nowAccepting_150x60.gif" /></a>

		</div>
	  
      </div>
 
 <?php include('resources/sections/footer.php');?>
 