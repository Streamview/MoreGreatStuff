<footer>
	<hr />
	<div class="row well no_margin_left">

	<div class="span3">
		<h4>Information</h4>
		<ul>
			<li><a href="two-column.html">About Us</a></li>
			<li><a href="typography.html">Delivery Information</a></li>
			<li><a href="typography.html">Privacy Policy</a></li>
			<li><a href="typography.html">Terms &amp; Conditions</a></li>
		</ul>
	</div>
	<div class="span3">
		<h4>Customer Service</h4>
		<ul>
			<li><a href="contact.html">Contact Us</a></li>
			<li><a href="typography.html">Returns</a></li>
			<li><a href="typography.html">Site Map</a></li>
		</ul>
	</div>
	<div class="span3">
		<h4>Extras</h4>
		<ul>
			<!-- <li><a href="typography.html">Brands</a></li> -->
			<li><a href="typography.html">Gift Vouchers</a></li>
			<!-- <li><a href="typography.html">Affiliates</a></li> -->
			<li><a href="typography.html">Specials</a></li>
		</ul>
	</div>
	<div class="span2">
		<h4>My Account</h4>
		<ul>
			<li><a href="my_account.html">My Account</a></li>
			<li><a href="typography.html">Order History</a></li>
			<li><a href="typography.html">Wish List</a></li>
			<li><a href="typography.html">Newsletter</a></li>
		</ul>
	</div>

</footer>

</div> <!-- /container -->

<!-- 
<div id="theme_switcher">
	<div class="btn-group">
		<a class="btn btn-success dropdown-toggle" data-toggle="dropdown" href="#">Switch theme <span class="caret"></span></a>
		<ul class="dropdown-menu">
            <li><a href="#" rel="united">United</a></li>
            <li><a href="#" rel="spacelab">Spacelab</a></li>
			<li><a href="#" rel="journal">Journal</a></li>
			<li><a href="#" rel="simplex">Simplex</a></li>
            <li><a href="#" rel="cerulean">Cerulean</a></li>
			<li><a href="#" rel="cyborg">Cyborg</a></li>
            <li><a href="#" rel="slate">Slate</a></li>
            <li><a href="#" rel="spruce">Spruce</a></li>
			<li><a href="#" rel="">Bootstrap</a></li>
		</ul>
	</div>
</div>
-->

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<script src="js/jquery.rating.pack.js"></script>
<script>
var CAROUSEL_INTERVAL = 3000;

$(document).ready(function () {
    $('#myCarousel').carousel({
        interval: 3000
    });

    $('#myCarousel').carousel('cycle');

    $('#myCarousel').on('slid.bs.carousel', function (direction, relatedTarget) {
    	console.log();
    	if ($("#myCarousel .item.active").attr('id') == 'slide3') {
			setTimeout(function(){
				//$('.carousel').carousel(0);
			}, CAROUSEL_INTERVAL);
        }
    });
});

</script>
</body>
</html>

<!-- Twoople Chat Button BEGIN --> 
<script type="text/javascript" src="https://twoople.com/javascripts/twoople-widget.js" data-position="bottom" data-style="style2" data-user="FreeTV" data-header="live chat"></script>
<!-- Twoople Chat Button END -->