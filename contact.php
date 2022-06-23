
<?php
include "header.php"
?>

<!-- Start of breadcrumb section
	============================================= -->
	<section id="breadcrumb" class="breadcrumb_section relative-position" data-background="img/background/brbg.jpg">
		<div class="background_overlay"></div>
		<div class="breadcrumb_watermark">Contact</div>
		<div class="container">
			<h2 class="breadcrumb_title">Contact Us</h2>
			<div class="breadcrumb_item ul-li">
				<ul class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active">Contact</li>
				</ul>
			</div>
		</div>
		<div class="slider_side_btn">
			<a class="block-display" href="#"><i class="fas fa-th"></i>Free Case Study</a>
		</div>
	</section>
<!-- End of breadcrumb section
	============================================= -->

<!-- Start of Contact page section
	============================================= -->
	<section id="contact_page" class="contact_page_section">
		<div id="google-map">
			<div id="googleMaps" class="google-map-container"></div>
		</div><!-- /#google-map-->
		<div class="container">
			<div class="contactpage_details">
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="contact_d_icontext text-center">
							<div class="con_icon relative-position">
								<i class="flaticon-email"></i>
								<span>01</span>
							</div>
							<div class="con_text headline">
								<h4>Email Address</h4>
								<span>info@webmail.com
								jobs.examplejob@com</span>
								<div class="con_bg">
									<i class="flaticon-email"></i>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="contact_d_icontext text-center">
							<div class="con_icon relative-position">
								<i class="flaticon-call"></i>
								<span>02</span>
							</div>
							<div class="con_text headline">
								<h4>Phone Number</h4>
								<span>+897 676 5654 65
								+908(097) 564 765 76</span>
								<div class="con_bg">
									<i class="flaticon-call"></i>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="contact_d_icontext text-center">
							<div class="con_icon relative-position">
								<i class="fas fa-map-marker-alt"></i>
								<span>03</span>
							</div>
							<div class="con_text headline">
								<h4>Office Address</h4>
								<span>12/A, Romania City Town Hall
								New Joursey, UK</span>
								<div class="con_bg">
									<i class="fas fa-map-marker-alt"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- End of Contact page section
	============================================= -->		

<!-- Start of estimate project
	============================================= -->
	<section id="estimate" class="estimate_contact_section">
		<div class="container">
			<div class="section_title_area text-center headline pera-content">
				<p>
					<span class="title_shape_left"></span>
					contact
					<span class="title_shape_right"></span>
				</p>
				<h2>
					Estimate Your Project
				</h2>
			</div>
			<div class="estimate_form">
				<form id="contact_form" action="#" method="POST" enctype="multipart/form-data">
					<div class="row">
						<div class="col-md-6">
							<div class="contact-info">
								<input class="email" name="name" type="text" placeholder="Enter your full name">
								<div class="icon-bg">
									<i class="far fa-user"></i>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="contact-info">
								<input class="name" name="Email" type="email" placeholder="Enter your email">
								<div class="icon-bg">
									<i class="far fa-envelope"></i>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="contact-info">
								<input class="email" name="case" type="text" placeholder="Enter your phone">
								<div class="icon-bg">
									<i class="fas fa-phone"></i>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="contact-info">
								<input class="email" name="case" type="text" placeholder="Enter Date">
								<div class="icon-bg">
									<i class="fas fa-calendar-alt"></i>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="contact-info">
								<input class="email" name="case" type="text" placeholder="Enter Suject">
								<div class="icon-bg">
									<i class="fas fa-arrow-down"></i>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="contact-info">
								<textarea id="message" name="message" placeholder="Enter your message"></textarea>
								<div class="icon-bg">
									<i class="far fa-edit"></i>
								</div>
							</div>
						</div>
					</div>
					<div class="sub-button  text-uppercase">
						<button type="submit" value="Submit">Submit Now</button> 
					</div> 
				</form>
			</div>
		</div>
	</section>
<!-- End  of estimate project
	============================================= -->	

    <?php
include "footer.php"
?>