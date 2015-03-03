 <?php 
 $page_title = "Contact";
 include('resources/sections/header.php');?>
 <div class="row">
	<div class="span3">
		<?php include('resources/sections/categories.php');?>
	</div>
	
		<div class="span9">
			<div class="page-header">
    		<h1>Contact us</h1>
  		</div>

  		<!-- Headings & Paragraph Copy -->
  		<div class="row">
  
      <div class="span9">
      	<form id="contactus-form" class="form-horizontal">
        	<fieldset>
          		<p>	
          			Still need more information but are afraid to ask? Don’t be shy. We answer all questions. 
          			Call us at the number or email address below and we will be happy to respond. Or click the 
          			CHAT button and connect instantly to one of our representatives. We know you’ll love our products. 
          			Every product has been specifically selected for its value, price point and quality just for you. 
          		</p>
          		<p>
					<strong>Phone:</strong> (647) 956-9215<br/>
					<strong>Email:</strong> <a href="mailto:info@MoreGreatStuff.ca">info@MoreGreatStuff.ca</a>
				</p>
				<p>
					If you would like to write to us, send your correspondence to: <br/><br/>
					
					<strong>
					www.MoreGreatStuff.ca<br/>
					6 Goodwood Dr.<br/>
					Whitby, ON, L1N 8K4<br/>
					</strong>
				</p><br/>
		
          		<div class="control-group">
           			<label for="focusedInput" class="control-label">Full Name:</label>
            		<div class="controls">
              			<input name="name" type="text" placeholder="your name" id="focusedInput" class="input-xlarge focused span6">
	            	</div>
	          	</div>
          		<div class="control-group">
           	 		<label class="control-label">E-Mail Address:</label>
            		<div class="controls">
              			<input name="email" type="text" placeholder="your email" class="input-xlarge span6">
           		 	</div>
          		</div>
		  		<div class="control-group">
            		<label for="textarea" class="control-label">Enquiry:</label>
            		<div class="controls">
              			<textarea name="message" rows="3" id="textarea"  placeholder="What would you like to contact us about?" class="input-xlarge span6"></textarea>
            		</div>
          		</div>

          		<div class="span8">
					<button id="submit-contact-form-btn" class="btn btn-primary pull-right" data-loading-text="Sending ..." style="margin-right: 20px;">Send</button>
          		</div>
        	</fieldset>
      	</form>
    </div>
  	<!-- Misc Elements -->
</div><!-- /row -->
</div>
</div>
 <?php include('resources/sections/footer.php');?>