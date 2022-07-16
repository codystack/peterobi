<?php
$page = "Contact";
include "./components/header.php";
include "./components/navbartwo.php";
?>
	
	<div class="text-center bg-overlay-dark-4 mb-5" style="background:url(assets/images/headerimg.jpg) no-repeat; background-size: cover; background-position: center center;">
		<div class="container">
			<div class="row all-text-white">
				<div class="col-md-12 align-self-center">
					<h6 class="display-6 fw-bold mt-9 mb-0">Call us at +1 (202) 980-5718</h6>
					<h1 class="fw-bold display-1 mb-2 mb-md-n4">Contact Us</h1>
				</div>
			</div>
		</div>
	</div>
    
	<section class="contact-page">
		<div class="container">
			<div class="row g-4">
				<div class="col-md-4">
					<div class="contact-box d-flex flex-column h-100 bg-overlay-dark-7 px-3 py-4" style="background:url(assets/images/headerimg.jpg) no-repeat; background-size: cover; background-position: center center;">
						
						<div class="all-text-white mb-4">
							<div class="fs-4"><i class="ti-map-alt"></i></div>
							<h5 class="mb-2">Address</h5>
							<p>Nigeria | America | Canada</p>
						</div>
                        
						<div class="all-text-white mb-4">
							<div class="fs-4"><i class="ti-email"></i></div>
							<h5 class="mb-2">E-mail</h5>
							<p>info@rescuenigeriamovement.org</p>
						</div>
                        
						<div class="all-text-white">
							<div class="fs-4"><i class="ti-mobile"></i></div>
							<h5 class="mb-2">Phone</h5>
							<p class="mb-0">+1 (202) 980-5718</p>
						</div>
					</div>
				</div>
				<div class="col-md-8">
					<div class="h-100">
						<h3>LET'S GET IN TOUCH!</h3>
						<p>Get in touch with us to see how we can help you with your project</p>
						<form class="contact-form needs-validation" id="contact-form" name="contactform" method="POST" action="https://wizixo.webestica.com/assets/include/contact-action.php" novalidate>
							<!-- Main form -->
							<div class="row">
								<div class="col-md-6">
									<div class="mb-3 position-relative">
										<input required id="con-name" name="name" type="text" class="form-control" placeholder="Name">
									</div>
								</div>

								<div class="col-md-6">
									<div class="mb-3 position-relative">
										<input required id="con-email" name="email" type="email" class="form-control" placeholder="E-mail">
									</div>
								</div>

                                <div class="col-md-6">
									<div class="mb-3 position-relative">
										<input required id="con-email" name="phone" type="tel" class="form-control" placeholder="Phone No.">
									</div>
								</div>

								<div class="col-md-6">
									<div class="mb-3 position-relative">
										<input required id="con-subject" name="subject" type="text" class="form-control" placeholder="Subject">
									</div>
								</div>

								<div class="col-md-12">
									<div class="mb-3 position-relative">
										<textarea required id="con-message" name="message" cols="40" rows="6" class="form-control" placeholder="Message"></textarea>
									</div>
								</div>
								<!-- submit button -->
								<div class="col-md-12 d-grid"><button class="btn btn-dark m-0" type="submit">Send Message</button></div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>


<?php include "./components/footer.php";?>