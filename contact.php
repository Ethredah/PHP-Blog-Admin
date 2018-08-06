<!--
author: Ethredah
author URL: http://ethredah.github.io
-->

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="images/icon.png">
<title>Company</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Coalition Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>
<body>
<!-- banner -->
	<div class="banner1">
		<div class="container">
			<div class="w3_agile_banner_top">
				<div class="agile_phone_mail">
					<ul>
						<li><i class="fa fa-phone" aria-hidden="true"></i>+(254) 002 100 500</li>
						<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@Companyonline.net">info@example.com</a></li>
					</ul>
				</div>
			</div>
			<div class="agileits_w3layouts_banner_nav">
				<nav class="navbar navbar-default">
					<div class="navbar-header navbar-left">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1><a class="navbar-brand" href="index.php"><img src="images/logo.png" class="img-responsive"></a></h1>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
						<nav class="cl-effect-13" id="cl-effect-13">
						<ul class="nav navbar-nav">
							<li><a href="index.php">Home</a></li>
							<li><a href="about.php">About</a></li>
							<li><a href="portfolio.php">Products</a></li>
							<li><a href="blog.php">Blog</a></li>
							<li class="active"><a href="contact.php">Contact</a></li>
						</ul>
						
					</nav>

					</div>
				</nav>
			</div>
		</div>
	</div>
<!-- //banner -->
<!-- mail -->
	<div class="mail">
		<div class="container">
			<h2 class="w3l_head w3l_head1">Contact Us</h2>

			<?php
				if (isset($_GET["sent"])) {
					echo 
					'<div class="alert alert-success" >
                          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                         <strong>SENT!! </strong><p> Thank you for your message. We will get back to you as soon as possible.</p>
                    </div>'
					;
				}
			?>
				<div class="agileits_mail_grids">
				<div class="agileits_mail_grid_left">
					<form action="functions/contact.php" method="post">
						<h4>Your Names*</h4>
						<input type="text" name="names" placeholder="Names..." required="">
						<h4>Your Email*</h4>
						<input type="email" name="email" placeholder="Email..." required="">
						<h4>Your Message*</h4>
						<textarea placeholder="Message..." name="message"></textarea>
						<input type="submit" name="submit" value="Send Message">
					</form>
				</div>
			</div>
		</div>
	</div>
<!-- //mail -->
<!-- map -->
	<div class="w3l-map">
		<iframe width="100%" height="300" src="https://maps.google.com/maps?width=100%&amp;height=300&amp;hl=en&amp;q=Relaince%20center%20%2C%20Woodvale%20Grove%2C%20Westlands%20-%20Nairobi%2C%20Kenya+(Company%20Offices)&amp;ie=UTF8&amp;t=&amp;z=15&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
	</div>
<!-- map -->

<!-- footer -->
	
	<?php 
		include("footer.php");
	?>

