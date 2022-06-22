<?php
session_start();
    include "header.php";
    include ('helper.php');

$user = array();


if(isset($_SESSION['userID'])){
    require ('config.php');
    $user = get_user_info($con, $_SESSION['userID']);
}

    ?>
<!-- Start of slider  section
	============================================= -->		
	<section id="slider_area" class="slider_section">
		<div id="slider_id" class="slider_style_four">
			<div class="slider_content_wrap position-relative">
				<div class="background_overlay"></div>
				<div class="rx_slider_img img-zooming" data-background="img/home-4/slider/s1.jpg"></div>
				<div class="container">
					<div class="rx_slider_text_img_area position-relative">
						<div class="rx_slider_text headline pera-content"> 
							<span>Legal solutions for Business</span>
							<h1>We are recognized
							by honorable awards</h1>
							<p>Our specialists share skills and resources to obtain optimal results for our new
							clients A full service law firm in New York.</p>
							<a href="#">Our Expert Team</a>
						</div>
						<div class="rx_slider_side_img">
							<img src="img/home-4/slider/s-side.png" alt="">
						</div>
					</div>
				</div>
			</div>
			<div class="slider_content_wrap position-relative">
				<div class="background_overlay"></div>
				<div class="rx_slider_img img-zooming" data-background="img/home-4/slider/s1.jpg"></div>
				<div class="container">
					<div class="rx_slider_text_img_area position-relative">
						<div class="rx_slider_text headline pera-content"> 
							<span>Legal solutions for Business</span>
							<h1>We are recognized
							by honorable awards</h1>
							<p>Our specialists share skills and resources to obtain optimal results for our new
							clients A full service law firm in New York.</p>
							<a href="#">Our Expert Team</a>
						</div>
						<div class="rx_slider_side_img">
							<img src="img/home-4/slider/s-side.png" alt="">
						</div>
					</div>
				</div>
			</div>
			<div class="slider_content_wrap position-relative">
				<div class="background_overlay"></div>
				<div class="rx_slider_img img-zooming" data-background="img/home-4/slider/s1.jpg"></div>
				<div class="container">
					<div class="rx_slider_text_img_area position-relative">
						<div class="rx_slider_text headline pera-content"> 
							<span>Legal solutions for Business</span>
							<h1>We are recognized
							by honorable awards</h1>
							<p>Our specialists share skills and resources to obtain optimal results for our new
							clients A full service law firm in New York.</p>
							<a href="#">Our Expert Team</a>
						</div>
						<div class="rx_slider_side_img">
							<img src="img/home-4/slider/s-side.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- End of slider section
	============================================= -->

<!-- Start of Feature  section
	============================================= -->
	<section id="rx-feature" class="rx-feature-section position-relative">
		<div class="container">
			<div class="rx-feature-content">
				<div class="row justify-content-center">
					<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1000ms">
						<div class="rx-feature-icon-text text-center">
							<div class="rx-feature-icon">
								<i class="flaticon-court"></i>
							</div>
							<div class="rx-feature-text headline pera-content">
								<h3><a href="#">High ethical standard</a></h3>
								<p>A full service law firm in London that has
									been recognised internationally with
								specialisation in Commercial.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1000ms">
						<div class="rx-feature-icon-text text-center">
							<div class="rx-feature-icon">
								<i class="flaticon-gavel"></i>
							</div>
							<div class="rx-feature-text headline pera-content">
								<h3><a href="#">Compliant HR policy </a></h3>
								<p>A full service law firm in London that has
									been recognised internationally with
								specialisation in Commercial.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1000ms">
						<div class="rx-feature-icon-text text-center">
							<div class="rx-feature-icon">
								<i class="flaticon-justice"></i>
							</div>
							<div class="rx-feature-text headline pera-content">
								<h3><a href="#">Specialised lawyers </a></h3>
								<p>A full service law firm in London that has
									been recognised internationally with
								specialisation in Commercial.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>		
<!-- End of Feature  section
	============================================= -->

<!-- Start of about  section
	============================================= -->		
	<section id="rx-about" class="rx-about-section">
		<div class="container">
			<div class="rx-about-content">
				<div class="row">
					<div class="col-lg-6 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
						<div class="rx-about-award-img position-relative">
							<div class="rx-about-img-wrap">
								<img src="img/home-4/about/ab.jpg" alt="">
							</div>
							<div class="rx-about-award-text">
								<i class="fas fa-trophy"></i> <span>Experiences of 25+ years</span>
							</div>
						</div>
					</div>
					<div class="col-lg-6 wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1000ms">
						<div class="rx-about-text">
							<div class="rx-section-title headline">
								<h2>We are Professional
									Law Firm in <span>USA.</span>
								</h2>
							</div>
							<div class="rx-about-text-wrap ul-li-block pera-content">
								<p>BDLP is one of the leading multi-disciplinary law firms in Dhaka,
								Bangladesh managed by lawyers in and around Dhaka. The law firm is one of the top law firms in Dhaka and represents both foreign and local clients. The firm operates as a partnership of several leading practicing follow the leading multi-disciplinary . </p>
								<ul>
									<li>Physical and online resources </li>
									<li>Probably the largest law firm </li>
									<li>Practical Commercial Solution  </li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- End of about  section
	============================================= -->

<!-- Start of practice area  section
	============================================= -->
	<section id="rx-practice" class="rx-practice-section">
		<div class="container">
			<div class="rx-section-title headline text-center">
				<h2>We assign <span>30+</span> practice
				areas for clients.</h2>
			</div>
			<div class="rx-practice-content">
				<div class="row">
					<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1000ms">
						<div class="rx-practice-icon-text position-relative">
							<div class="rx-practice-text headline">
								<h3><a href="#">Family & Child
								Law service</a></h3>
								<p>A full service law firm in London that has
									been recognised internationally with the
								specialisation in Commercial.</p>
							</div>
							<div class="rx-practice-icon text-center">
								<i class="flaticon-family"></i>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="10ms" data-wow-duration="1000ms">
						<div class="rx-practice-icon-text position-relative">
							<div class="rx-practice-text headline">
								<h3><a href="#">Corporate and Finance Law</a></h3>
								<p>A full service law firm in London that has
									been recognised internationally with the
								specialisation in Commercial.</p>
							</div>
							<div class="rx-practice-icon text-center">
								<i class="flaticon-court"></i>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
						<div class="rx-practice-icon-text position-relative">
							<div class="rx-practice-text headline">
								<h3><a href="#">rxer Crime Law services</a></h3>
								<p>A full service law firm in London that has
									been recognised internationally with the
								specialisation in Commercial.</p>
							</div>
							<div class="rx-practice-icon text-center">
								<i class="flaticon-criminal"></i>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1000ms">
						<div class="rx-practice-icon-text position-relative">
							<div class="rx-practice-text headline">
								<h3><a href="#">Cross Border Law services</a></h3>
								<p>A full service law firm in London that has
									been recognised internationally with the
								specialisation in Commercial.</p>
							</div>
							<div class="rx-practice-icon text-center">
								<i class="flaticon-cyber-security"></i>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">
						<div class="rx-practice-icon-text position-relative">
							<div class="rx-practice-text headline">
								<h3><a href="#">Foreign Business Investment  law</a></h3>
								<p>A full service law firm in London that has
									been recognised internationally with the
								specialisation in Commercial.</p>
							</div>
							<div class="rx-practice-icon text-center">
								<i class="flaticon-crossed-arrows"></i>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1000ms">
						<div class="rx-practice-icon-text position-relative">
							<div class="rx-practice-text headline">
								<h3><a href="#">Cyber Crime Law services</a></h3>
								<p>A full service law firm in London that has
									been recognised internationally with the
								specialisation in Commercial.</p>
							</div>
							<div class="rx-practice-icon text-center">
								<i class="flaticon-gavel"></i>
							</div>
						</div>
					</div>
				</div>
				<div class="rx-practice-btn">
					<a href="#">More Services</a>
				</div>
			</div>
		</div>
	</section>
<!-- End of practice area section
	============================================= -->

<!-- Start of portfolio section
	============================================= -->
	<section id="rx-portfolio" class="rx-portfolio-secton">
		<div class="rx-section-title headline text-center">
			<h2>We have shown Our Resent
				<span>Case Studies.</span>
			</h2>
		</div>
		<div class="rx-portfolio-content">
			<div id="portfolio-slide-id" class="rx-portfolio-slider">
				<div class="rx-portfolio-innerbox position-relative">
					<div class="rx-portfolio-border"></div>
					<div class="rx-portfolio-img position-relative">
						<img src="img/home-4/portfolio/prt1.jpg" alt="">
					</div>
					<div class="rx-portfolio-text headline">
						<span class="text-uppercase"><a href="#">criminal case</a></span>
						<h3><a href="#">Donald Car Case</a></h3>
					</div>
					<div class="rx-port-icon text-center">
						<a href="%21.html#"> <i class="fas fa-arrow-right"></i></a>
					</div>
				</div>
				<div class="rx-portfolio-innerbox position-relative">
					<div class="rx-portfolio-border"></div>
					<div class="rx-portfolio-img position-relative">
						<img src="img/home-4/portfolio/prt2.jpg" alt="">
					</div>
					<div class="rx-portfolio-text headline">
						<span class="text-uppercase"><a href="#">criminal case</a></span>
						<h3><a href="#">Donald Car Case</a></h3>
					</div>
					<div class="rx-port-icon text-center">
						<a href="%21.html#"> <i class="fas fa-arrow-right"></i></a>
					</div>
				</div>
				<div class="rx-portfolio-innerbox position-relative">
					<div class="rx-portfolio-border"></div>
					<div class="rx-portfolio-img position-relative">
						<img src="img/home-4/portfolio/prt3.jpg" alt="">
					</div>
					<div class="rx-portfolio-text headline">
						<span class="text-uppercase"><a href="#">criminal case</a></span>
						<h3><a href="#">Donald Car Case</a></h3>
					</div>
					<div class="rx-port-icon text-center">
						<a href="%21.html#"> <i class="fas fa-arrow-right"></i></a>
					</div>
				</div>
				<div class="rx-portfolio-innerbox position-relative">
					<div class="rx-portfolio-border"></div>
					<div class="rx-portfolio-img position-relative">
						<img src="img/home-4/portfolio/prt4.jpg" alt="">
					</div>
					<div class="rx-portfolio-text headline">
						<span class="text-uppercase"><a href="#">criminal case</a></span>
						<h3><a href="#">Donald Car Case</a></h3>
					</div>
					<div class="rx-port-icon text-center">
						<a href="%21.html#"> <i class="fas fa-arrow-right"></i></a>
					</div>
				</div>
				<div class="rx-portfolio-innerbox position-relative">
					<div class="rx-portfolio-border"></div>
					<div class="rx-portfolio-img position-relative">
						<img src="img/home-4/portfolio/prt5.jpg" alt="">
					</div>
					<div class="rx-portfolio-text headline">
						<span class="text-uppercase"><a href="#">criminal case</a></span>
						<h3><a href="#">Donald Car Case</a></h3>
					</div>
					<div class="rx-port-icon text-center">
						<a href="%21.html#"> <i class="fas fa-arrow-right"></i></a>
					</div>
				</div>
				<div class="rx-portfolio-innerbox position-relative">
					<div class="rx-portfolio-border"></div>
					<div class="rx-portfolio-img position-relative">
						<img src="img/home-4/portfolio/prt6.jpg" alt="">
					</div>
					<div class="rx-portfolio-text headline">
						<span class="text-uppercase"><a href="#">criminal case</a></span>
						<h3><a href="#">Donald Car Case</a></h3>
					</div>
					<div class="rx-port-icon text-center">
						<a href="%21.html#"> <i class="fas fa-arrow-right"></i></a>
					</div>
				</div>
				<div class="rx-portfolio-innerbox position-relative">
					<div class="rx-portfolio-border"></div>
					<div class="rx-portfolio-img position-relative">
						<img src="img/home-4/portfolio/prt7.jpg" alt="">
					</div>
					<div class="rx-portfolio-text headline">
						<span class="text-uppercase"><a href="#">criminal case</a></span>
						<h3><a href="#">Donald Car Case</a></h3>
					</div>
					<div class="rx-port-icon text-center">
						<a href="%21.html#"> <i class="fas fa-arrow-right"></i></a>
					</div>
				</div>
				<div class="rx-portfolio-innerbox position-relative">
					<div class="rx-portfolio-border"></div>
					<div class="rx-portfolio-img position-relative">
						<img src="img/home-4/portfolio/prt8.jpg" alt="">
					</div>
					<div class="rx-portfolio-text headline">
						<span class="text-uppercase"><a href="#">criminal case</a></span>
						<h3><a href="#">Donald Car Case</a></h3>
					</div>
					<div class="rx-port-icon text-center">
						<a href="%21.html#"> <i class="fas fa-arrow-right"></i></a>
					</div>
				</div>
				<div class="rx-portfolio-innerbox position-relative">
					<div class="rx-portfolio-border"></div>
					<div class="rx-portfolio-img position-relative">
						<img src="img/home-4/portfolio/prt9.jpg" alt="">
					</div>
					<div class="rx-portfolio-text headline">
						<span class="text-uppercase"><a href="#">criminal case</a></span>
						<h3><a href="#">Donald Car Case</a></h3>
					</div>
					<div class="rx-port-icon text-center">
						<a href="%21.html#"> <i class="fas fa-arrow-right"></i></a>
					</div>
				</div>
				<div class="rx-portfolio-innerbox position-relative">
					<div class="rx-portfolio-border"></div>
					<div class="rx-portfolio-img position-relative">
						<img src="img/home-4/portfolio/prt10.jpg" alt="">
					</div>
					<div class="rx-portfolio-text headline">
						<span class="text-uppercase"><a href="#">criminal case</a></span>
						<h3><a href="#">Donald Car Case</a></h3>
					</div>
					<div class="rx-port-icon text-center">
						<a href="%21.html#"> <i class="fas fa-arrow-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>		
<!-- End of portfolio section
	============================================= -->

<!-- Start of Counter section
	============================================= -->		
	<section id="rx-counter" class="rx-counter-section">
		<div class="background_parallax background_position relative-position" data-background="img/home-4/slider/s1.jpg">
			<div class="background_overlay"></div>
			<div class="container"> 
				<div class="row">
					<div class="col-lg-3  col-sm-6">
						<div class="rx-counter-icon-text">
							<div class="rx-counter-icon float-left">
								<i class="far fa-thumbs-up"></i>
							</div>
							<div class="rx-counter-text pera-content">
								<span class="odometer" data-count="1238">00</span>
								<p>Satisfied Customers</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3  col-sm-6">
						<div class="rx-counter-icon-text">
							<div class="rx-counter-icon float-left">
								<i class="far fa-comment"></i>
							</div>
							<div class="rx-counter-text pera-content">
								<span class="odometer" data-count="850">00</span>
								<p>Consulteds</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3  col-sm-6">
						<div class="rx-counter-icon-text">
							<div class="rx-counter-icon float-left">
								<i class="far fa-lightbulb"></i>
							</div>
							<div class="rx-counter-text pera-content">
								<span class="odometer" data-count="1238">00</span>
								<p>Satisfied Customers</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3  col-sm-6">
						<div class="rx-counter-icon-text">
							<div class="rx-counter-icon float-left">
								<i class="fas fa-briefcase"></i>
							</div>
							<div class="rx-counter-text pera-content">
								<span class="odometer" data-count="1238">00</span>
								<p>Satisfied Customers</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- End of Counter section
	============================================= -->

<!-- Start of testimonial section
	============================================= -->
	<section id="rx-testimonial" class="rx-testimonial-section">
		<div class="container">
			<div class="rx-section-title headline text-center">
				<h2>See What Out Happy
					<span>Clients</span> Says
				</h2>
			</div>
			<div class="rx-testimonial-content">
				<div id="rx-testimonial-slide-id" class="rx-testimonial-slider">
					<div class="rx-testimonial-img-text">
						<div class="rx-testimonial-img float-left position-relative">
							<img src="img/home-4/testimonial/tst1.jpg" alt="">
							<span class="rx-testi-quote"><i class="fas fa-quote-right"></i></span>
						</div>
						<div class="rx-testimonial-text headline pera-content">
							<div class="rx-testimonial-author">
								<h4><a href="#">Robert Frost</a></h4>
								<span>SEO Expert</span>
							</div>
							<p>sum dolor sit amet consectetur toward
							adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
						</div>
					</div>
					<div class="rx-testimonial-img-text">
						<div class="rx-testimonial-img float-left position-relative">
							<img src="img/home-4/testimonial/tst2.jpg" alt="">
							<span class="rx-testi-quote"><i class="fas fa-quote-right"></i></span>
						</div>
						<div class="rx-testimonial-text headline pera-content">
							<div class="rx-testimonial-author">
								<h4><a href="#">Nobilt Gilt</a></h4>
								<span>Consulting Manager</span>
							</div>
							<p>sum dolor sit amet consectetur toward
							adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
						</div>
					</div>
					<div class="rx-testimonial-img-text">
						<div class="rx-testimonial-img float-left position-relative">
							<img src="img/home-4/testimonial/tst1.jpg" alt="">
							<span class="rx-testi-quote"><i class="fas fa-quote-right"></i></span>
						</div>
						<div class="rx-testimonial-text headline pera-content">
							<div class="rx-testimonial-author">
								<h4><a href="#">Robert Frost</a></h4>
								<span>SEO Expert</span>
							</div>
							<p>sum dolor sit amet consectetur toward
							adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
						</div>
					</div>
					<div class="rx-testimonial-img-text">
						<div class="rx-testimonial-img float-left position-relative">
							<img src="img/home-4/testimonial/tst2.jpg" alt="">
							<span class="rx-testi-quote"><i class="fas fa-quote-right"></i></span>
						</div>
						<div class="rx-testimonial-text headline pera-content">
							<div class="rx-testimonial-author">
								<h4><a href="#">Nobilt Gilt</a></h4>
								<span>Consulting Manager</span>
							</div>
							<p>sum dolor sit amet consectetur toward
							adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>		
<!-- End of testimonial section
	============================================= -->

<!-- Start of contact section
	============================================= -->		
	<section id="rx-contact" class="rx-contact-section">
		<div class="background_parallax background_position relative-position" data-background="img/home-4/c-bg.jpg">
			<div class="background_overlay"></div>
			<div class="container">
				<div class="rx-contact-content">
					<div class="row">
						<div class="col-lg-6">
							<div class="rx-contact-text">
								<div class="rx-contact-icon text-center">
									<i class="fas fa-phone"></i>
								</div>
								<div class="rx-contact-text-wrap headline ul-li-block">
									<h4>Free Consultion</h4>
									<ul>
										<li>
											<i class="fas fa-map-marker-alt"></i> 
											<a href="#">Road No:2, Sydney, Australia</a>
										</li>
										<li>
											<i class="fas fa-envelope"></i><a href="#">info@rexlaw.com</a>
										</li><li>
											<i class="fas fa-phone"></i><a href="#">1-888-452-1505</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="rx-contact-form">
								<form action="#" method="POST">
									<input type="text" name="name" placeholder="Name">
									<input type="email" name="email" placeholder="Mail Address">
									<input type="phone" name="phone" placeholder="Phone Number">
									<textarea name="text" placeholder="Text..."></textarea>
									<button type="submit"><i class="fas fa-paper-plane"></i> Submit now</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- End of contact section
	============================================= -->
    <?php
    include "footer.php";
    ?>