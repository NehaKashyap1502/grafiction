<!doctype html>
<html lang="en">

<head>
	<title>Contact Form 02</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	
	<!-- <link rel="" href="./php/dbconnect.php"> -->
	<link rel="" href="./php/sendEmail.php">

	<!-- Header -->
	<link rel="stylesheet" href="css/style.css">
	<?php include_once('common/commoncss.php'); ?>




</head>

<body>

<?php include_once('common/header.php'); ?>
	<section class="ftco-section contact-us">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-9 col-sm-12">
					<div class="wrapper">
						<div class="row no-gutters">
							<div class="col-lg-12 order-md-last d-flex align-items-stretch">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<div class="mb-4 section-title">
										<h2 class="heading-section" style='padding-bottom: 10px; margin-bottom: 10px;'>Do I have your attention?</h2>
										<p class="text-center" style='width: 75%; margin: 0 auto;'>I would love to start up a convertation with you. Just
											put your number & basic details below, and i'll get right back to you.</p>
									</div>

									<!-- <h3 class="mb-4" style='font-weight: 600;'>Get in touch</h3> -->
									<div id="form-message-warning" class="mb-4"></div>
									<div id="form-message-success" class="mb-4">
										Your message was sent, thank you!
									</div>
									<form method="POST" id="contactForm" name="contactForm" class="contactForm" action='php/sendEmail.php'>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="name">Full Name</label>
													<input type="text" class="form-control" name="name" id="name"
														placeholder="Name">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="email">Email Address</label>
													<input type="email" class="form-control" name="email" id="email"
														placeholder="Email">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="subject">Subject</label>
													<input type="text" class="form-control" name="subject" id="subject"
														placeholder="Subject">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="#">Message</label>
													<textarea name="message" class="form-control" id="message" cols="30"
														rows="4" placeholder="Message"></textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="Send Message" class="btn btn-primary">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- ======= Footer ======= -->
		<?php include_once('common/footer.php'); ?>
	<!-- End Footer -->

	<?php include_once('common/commonjs.php'); ?>
	

</body>

</html>