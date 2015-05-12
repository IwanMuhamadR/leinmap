
	<!-- second section - About -->	
	<div id="about" class="pad-section">
		<div class="container">
			<div class="row text-center">
				<div class="col-xs-12 section_header">
					<h2>About Us</h2>
				</div>
				<div class="col-sm-4 col-xs-12">
					<i class="fa fa-level-up fa-5x"> </i>
					<h4>Leading</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in sem cras amet. Donec in sem cras amet.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in sem cras amet. Donec in sem cras amet.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in sem cras amet. Donec in sem cras amet.</p>
				</div>
				<div class="col-sm-4 col-xs-12">
					<i class="fa fa-lightbulb-o fa-5x"> </i>
					<h4>Innovation</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in sem cras amet. Donec in sem cras amet.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in sem cras amet. Donec in sem cras amet.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in sem cras amet. Donec in sem cras amet.</p>
				</div>
				<div class="col-sm-4 col-xs-12">
					<i class="fa fa-mobile fa-5x"> </i>
					<h4>Mobile Application</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in sem cras amet. Donec in sem cras amet.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in sem cras amet. Donec in sem cras amet.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in sem cras amet. Donec in sem cras amet.</p>
				</div>
			</div>
		</div>
	</div>
	<!-- /second section -->

	<!-- third section - Services -->
	<div id="services" class="pad-section">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 section_header">
					<h2>Services</h2>
				</div>
				<div class="col-md-2"></div>
				<div class="col-md-4 col-xs-6 text-center">
					<div class="service-item">
						<div class="service-icon">
							<i class="fa fa-arrows-alt"></i>
						</div>
						<h3 class="service-title">RESPONSIVE LAYOUT</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in sem cras amet. Donec in sem cras amet.</p>
					</div> <!-- .service-item -->
				</div> <!-- .col-md-3 -->
				<div class="col-md-4 col-xs-6 text-center">
					<div class="service-item">
						<div class="service-icon">
							<i class="fa fa-code"></i>
						</div>
						<h3 class="service-title">CLEAN AND MINIMAL</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in sem cras amet. Donec in sem cras amet.</p>
					</div> <!-- .service-item -->
				</div> <!-- .col-md-3 -->			
			</div> <!-- .row -->
		</div>
	</div>
	<!-- /third section -->

	<!-- fourth section - Portfolio -->
	<div id="portfolio" class="pad-section">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 section_header">
					<h2>Portfolio</h2>
				</div>
				<div class="portfolio-item col-md-3 col-xs-6">
					<div class="portfolio-thumb">
						<img src="<?php echo base_url(); ?>assets/img/p1.jpg" alt="">
						<div class="portfolio-overlay">
							<h3>PeopleSay</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in sem cras amet. Donec in sem cras amet.</p>
						</div> <!-- /.portfolio-overlay -->
					</div> <!-- /.portfolio-thumb -->
				</div> <!-- /.portfolio-item -->			
				<div class="portfolio-item col-md-3 col-xs-6">
					<div class="portfolio-thumb">
						<img src="<?php echo base_url(); ?>assets/img/p4.png" alt="">
						<div class="portfolio-overlay">
							<h3>Floating</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in sem cras amet. Donec in sem cras amet.</p>
						</div> <!-- /.portfolio-overlay -->
					</div> <!-- /.portfolio-thumb -->
				</div> <!-- /.portfolio-item -->
				<div class="portfolio-item col-md-3 col-xs-6">
					<div class="portfolio-thumb">
						<img src="<?php echo base_url(); ?>assets/img/p3.png" alt="">
						<div class="portfolio-overlay">
							<h3>Soundwave</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in sem cras amet. Donec in sem cras amet.</p>
						</div> <!-- /.portfolio-overlay -->
					</div> <!-- /.portfolio-thumb -->
				</div> <!-- /.portfolio-item -->
				<div class="portfolio-item col-md-3 col-xs-6">
					<div class="portfolio-thumb">
						<img src="<?php echo base_url(); ?>assets/img/p2.png" alt="">
						<div class="portfolio-overlay">
							<h3>Direct</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in sem cras amet. Donec in sem cras amet.</p>
						</div> <!-- /.portfolio-overlay -->
					</div> <!-- /.portfolio-thumb -->
				</div> <!-- /.portfolio-item -->
			</div>		
		</div>
	</div>
	<!-- /fourth section -->
	
	<!-- fifth section -->
	<div id="contact" class="pad-section">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 section_header">
					<h2>Get in touch</h2>
				</div>
			    <div class="col-sm-6 col-xs-12">
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
					<br /><br />
					<p><i class="fa fa-phone"></i> 101-10413</p>
					<p><i class="fa fa-envelope"></i> <a href="mailto:info@leinmap.com">info@leinmap.com</a></p><br />
					
			    </div>
			    <div class="col-sm-6 col-xs-12">
					<!-- <div id="google_map"></div> -->	
			    </div>
			</div>
		</div>
	</div>
	<!-- /fifth section -->