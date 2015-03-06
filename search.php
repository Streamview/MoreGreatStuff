 <?php 
 $page_title = "Home";
 include('resources/sections/header.php');?>
		
		<div class="row">
        <div class="span3">
			<!-- start sidebar -->
			<?php include('resources/sections/categories.php');?>
			<!-- end sidebar -->		
        </div>
		 <div class="span9">
		     <ul class="breadcrumb">
			<li>
			<a href="#">Home</a> <span class="divider">/</span>
			</li>
			<li class="active">
			<a href="#">Computers & Office</a>
			</li>
			</ul>
			
	
	 <div class="row">
	 <div class="span9"><!-- start categories -->
		<ul class="thumbnails">
        <li class="span3">
          <div class="thumbnail">
            <a href="listings.html"><img alt="" src="css/images/cat_camera_photo.png"></a>
            <div class="caption">
               <a href="listings.html"><h5>Camera & Photo</h5></a>
            </div>
          </div>
        </li>
               <li class="span3">
          <div class="thumbnail">
            <a href="listings.html"><img alt="" src="css/images/cat_tv.jpg"></a>
            <div class="caption">
			   <a href="listings.html"><h5>TV</h5></a>
            </div>
          </div>
        </li>
		<li class="span3">
          <div class="thumbnail">
            <a href="listings.html"><img alt="" src="css/images/cat_home_cinema.jpg"></a>
            <div class="caption">
			   <a href="listings.html"><h5>Home Cinema</h5></a>
            </div>
          </div>
        </li>        <li class="span3">
          <div class="thumbnail">
            <a href="listings.html"><img alt="" src="css/images/cat_audio.jpg"></a>
            <div class="caption">
               <a href="listings.html"><h5>Audio, MP3 & Accessories</h5></a>
            </div>
          </div>
        </li>
               <li class="span3">
          <div class="thumbnail">
            <a href="listings.html"><img alt="" src="css/images/cat_sat_nav.jpg"></a>
            <div class="caption">
			   <a href="listings.html"><h5>Sat Nav & Car Electronics</h5></a>
            </div>
          </div>
        </li>
		<li class="span3">
          <div class="thumbnail">
            <a href="listings.html"><img alt="" src="css/images/cat_phone.png"></a>
            <div class="caption">
			   <a href="listings.html"><h5>Phones & Accessories</h5></a>
            </div>
          </div>
        </li>		
		<li class="span3">
          <div class="thumbnail">
            <a href="listings.html"><img alt="" src="css/images/cat_games.png"></a>
            <div class="caption">
			   <a href="listings.html"><h5>PC & Video Games</h5></a>
            </div>
          </div>
        </li>				
      </ul>
	  </div><!-- end categories -->
  </div>
	  

	  
	  

	  
		</div>

      </div>
 <?php include('resources/sections/footer.php');?>