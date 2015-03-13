
	<!-- second section - About -->	
	<div id="about" class="pad-section">
	  <div class="container">
	    <h2 class="text-center">About Us</h2> <hr />
		<div class="row text-center">
		  <div class="col-sm-3 col-xs-6">
			<i class="fa fa-mobile fa-5x"> </i>
			<h4>Service 1</h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in sem cras amet. Donec in sem cras amet.</p>
		  </div>
		  <div class="col-sm-3 col-xs-6">
			<i class="fa fa-code fa-5x"> </i>
			<h4>Service 2</h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in sem cras amet. Donec in sem cras amet.</p>
		  </div>
		  <div class="col-sm-3 col-xs-6">
			<i class="fa fa-mobile fa-5x"> </i>
			<h4>Service 1</h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in sem cras amet. Donec in sem cras amet.</p>
		  </div>
		  <div class="col-sm-3 col-xs-6">
			<i class="fa fa-code fa-5x"> </i>
			<h4>Service 2</h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in sem cras amet. Donec in sem cras amet.</p>
		  </div>
		</div>
	  </div>
	</div>
	<!-- /second section -->

	<!-- third section - Services -->
	<div id="services" class="pad-section">
	  <div class="container">
		<h2 class="text-center">Our Services</h2> <hr />
		<div class="row">
			<div class="col-md-6 col-xs-6 text-center">
				<div class="service-item">
					<div class="service-icon">
						<i class="fa fa-mobile"></i>
					</div>
					<h3 class="service-title">RESPONSIVE LAYOUT</h3>
				</div> <!-- .service-item -->
			</div> <!-- .col-md-3 -->
			<div class="col-md-6 col-xs-6 text-center">
				<div class="service-item">
					<div class="service-icon">
						<i class="fa fa-code"></i>
					</div>
					<h3 class="service-title">CLEAN AND MINIMAL</h3>
				</div> <!-- .service-item -->
			</div> <!-- .col-md-3 -->			
		</div> <!-- .row -->
	  </div>
	</div>
	<!-- /third section -->

	<!-- fourth section - Portfolio -->
	<div id="portfolio" class="pad-section">
	  <div class="container">
	  <h2 class="text-center">Latest Works</h2> <hr />
		<div class="row">
		  <div class="col-sm-6">
			<div class="panel panel-default">
			  <div class="panel-heading">
				<h2 class="panel-title">Additional information</h2>
			  </div>
			  <div class="panel-body lead">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed hendrerit adipiscing blandit. Aliquam placerat, velit a fermentum fermentum, mi felis vehicula justo, a dapibus quam augue non massa. Duis euismod, augue et tempus consequat, lorem mauris porttitor quam, consequat ultricies mauris mi a metus. Phasellus congue, leo sed ultricies tristique, nunc libero tempor ligula, at varius mi nibh in nisi. Aliquam erat volutpat. Maecenas rhoncus, neque facilisis rhoncus tempus, elit ligula varius dui, quis amet. 
			  </div>
			</div>
		  </div>
		  <div class="col-sm-6">
			<div class="panel panel-default">
			  <div class="panel-heading">
				<h2 class="panel-title">Additional information</h2>
			  </div>
			  <div class="panel-body lead">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed hendrerit adipiscing blandit. Aliquam placerat, velit a fermentum fermentum, mi felis vehicula justo, a dapibus quam augue non massa. Duis euismod, augue et tempus consequat, lorem mauris porttitor quam, consequat ultricies mauris mi a metus. Phasellus congue, leo sed ultricies tristique, nunc libero tempor ligula, at varius mi nibh in nisi. Aliquam erat volutpat. Maecenas rhoncus, neque facilisis rhoncus tempus, elit ligula varius dui, quis amet. 
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	</div>
	<!-- /fourth section -->
	
	<!-- fifth section -->
	<div id="contact" class="pad-section">
	  <div class="container">
		<h2 class="text-center">Get in touch</h2> <hr />
		<div class="row">
		  <div class="col-sm-6">
			<div id="google_map"></div>
		  </div>
		  <div class="col-sm-6">
			<h4>Feel free to send a message</h4>
			<?php echo form_open('contact'); ?>
              <form role="form" method="post" action="#">
				<div class="contact_form">
					<input name="name" type="text" class="form-control" id="name" placeholder="Your Name" maxlength="40">
				</div>
				<div class="contact_form">
					<input name="email" type="text" class="form-control" id="email" placeholder="Your Email" maxlength="40">
				</div>
				<div class="contact_form">
					<textarea name="content" rows="10" class="form-control" id="content" placeholder="Message"></textarea>
				</div>
				<div class="contact_form"><button type="submit" class="btn btn-primary">Send Message</button></div>
			<?php echo form_close(); ?>
			<br />
			<br />
			<p><i class="fa fa-phone"></i> 101-10413</p>
			<p><i class="fa fa-envelope"></i> <a href="mailto:info@leinmap.com">info@leinmap.com</a></p>			
		  </div>
		</div>
	  </div>
	</div>
	<!-- /fifth section -->