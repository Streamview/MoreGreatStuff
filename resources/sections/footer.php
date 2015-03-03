<footer>
	<hr />
	<div class="row well no_margin_left">

	<div class="span3">
		<h4>Information</h4>
		<ul>
			<li><a href="/about/">About Us</a></li>
			<li><a href="/delivery_information/">Delivery Information</a></li>
			<li><a href="typography.html">Privacy Policy</a></li>
			<li><a href="typography.html">Terms &amp; Conditions</a></li>
		</ul>
	</div>
	<div class="span3">
		<h4>Customer Service</h4>
		<ul>
			<li><a href="/contact/">Contact Us</a></li>
			<li><a href="typography.html">Returns</a></li>
			<li><a href="typography.html">Site Map</a></li>
		</ul>
	</div>
	<div class="span3">
		<h4>Extras</h4>
		<ul>
			<li><a href="/gift_vouchers/">Gift Vouchers</a></li>
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

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/js/jquery.min.js"></script>
<script src="/bootstrap/js/bootstrap.js"></script>
<script src="/js/jquery.rating.pack.js"></script>
<script type="text/javascript">
var CAROUSEL_INTERVAL = 3000;

$(document).ready(function () {
    $('#myCarousel').carousel({
        interval: 3000
    });

    $('#myCarousel').carousel('cycle');

    
    $("#submit-contact-form-btn").click(function(){
        var btn = this;
        $(btn).button('loading');
		$.ajax({
			url:"/sendcontact/",
			type:"post",
			dataType:'json',
			data:$("#contactus-form").serialize(),
			success:function(response, jqXHR) {
				if (response.success) {
					alert(response.message);
					$("#contactus-form input, #contactus-form textarea").val("");
				} else {
					alert(response.errors[0]);
				}

				$(btn).button('reset');
			},
			error:function (jqXHR) {
				alert(jqXHR.responseText);
				$(btn).button('reset');
			}
		});
		return false;
	});

	return false;
});

</script>
</body>
</html>

<!-- Twoople Chat Button BEGIN --> 
<script type="text/javascript" src="https://twoople.com/javascripts/twoople-widget.js" data-position="bottom" data-style="style2" data-user="FreeTV" data-header="live chat"></script>
<!-- Twoople Chat Button END -->