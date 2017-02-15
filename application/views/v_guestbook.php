<!DOCTYPE html>
<html lang="en">
<head> 
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<meta name="description" content="Wedding Website Designer">
	<meta name="keywords" content="wedding, menikah, undangan nikah, proposal, prewedding, pernikahan, undangan online, nikah, wedding organizer, groom, bride, married, love story, akad nikah, holy matrimony" /> 
	<meta name="author" content=""> 
	<title>Zamzam Alia Mengundangmu</title> 
	<link href="<?php echo base_url(); ?>assets/template/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/template/css/prettyPhoto.css" rel="stylesheet"> 
	<link href="<?php echo base_url(); ?>assets/template/css/font-awesome.min.css" rel="stylesheet"> 
	<link href="<?php echo base_url(); ?>assets/template/css/animate1.css" rel="stylesheet"> 
	<link href="<?php echo base_url(); ?>assets/template/css/main.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/template/css/responsive.css" rel="stylesheet"> 

	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/countdown/style1.css" type="text/css" />
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/countdown/countdown.js"></script>
<!-- 	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/countdown/Bebas/stylesheet.css" type="text/css" />
 -->	


	<!--[if lt IE 9]> <script src="js/html5shiv.js"></script> 
	<script src="js/respond.min.js"></script> <![endif]--> 
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/countdown/logotab2.png"> 
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>assets/template/images/ico/apple-touch-icon-144-precomposed.png"> 
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>assets/template/images/ico/apple-touch-icon-114-precomposed.png"> 
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>assets/template/images/ico/apple-touch-icon-72-precomposed.png"> 
	<link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>assets/template/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<body>
	<div class="preloader">
		<div class="preloder-wrap">
			<div class="preloder-inner"> 
				<div class="ball"></div> 
				<div class="ball"></div> 
				<div class="ball"></div> 
				<div class="ball"></div> 
				<div class="ball"></div> 
				<div class="ball"></div> 
				<div class="ball"></div>
			</div>
		</div>
	</div><!--/.preloader-->
	<header id="navigation"> 
		<div class="navbar navbar-inverse navbar-fixed-top" role="banner"> 
			<div class="container"> 
				<div class="navbar-header"> 
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> 
						<span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> 
					</button> 
					<a class="navbar-brand" href="<?php echo base_url(); ?>"><h1><img src="<?php echo base_url(); ?>assets/countdown/untitled-3.png" alt="logo"></h1></a> 
				</div> 
				<div class="collapse navbar-collapse"> 
					<ul class="nav navbar-nav navbar-right"> 
						<li><a href="<?php echo base_url(); ?>">Home</a></li> 
						<li><a href="<?php echo base_url(); ?>#about-us">Couple</a></li> 
						<li><a href="<?php echo base_url(); ?>#event">Event</a></li> 
						<li><a href="<?php echo base_url(); ?>#family">Family</a></li> 
						<li><a href="<?php echo base_url(); ?>#clients">Guest Book</a></li> 
						<li><a href="<?php echo base_url(); ?>#portfolio">Gallery</a></li> 
					
					</ul> 
				</div> 
			</div> 
		</div><!--/navbar--> 
	</header> <!--/#navigation--> 

	<section id="home">
		<div id="main-carousel"> 
			<div class="carousel-inner">
				<div class="item active" style="background-image: url(<?php echo base_url(); ?>assets/template/images/clients/client-bg.jpg)"> 
				</div>
			</div>
		</div> 
	</section>

		<section id="contact">
			<div class="container">
				<div class="contact-details">
					<!-- <div class="pattern"></div> -->
					<div class="row text-center clearfix">
						<div class="col-sm-3">
						</div>
						<div class="col-sm-6">
							<center><h2 class="title-one"><span style="color: #BC82FD;font-family: Petit Formal Script; font-size: 40pt;">Guest Book</span><br><img src="<?php echo base_url(); ?>assets/countdown/header3.png" class="img-responsive" alt=""></h2>

							<p><span style="color: #B9B655;font-family: Merienda; font-size: 20pt;">Please Confirm kehadiranmu dan ucapakan kepada kami, intine ngono bahasa inggrise rak ngerti</span></p>
							</center><br>
							<div id="contact-form-section">
								<div class="status alert alert-success" style="display: none"></div>
								<form id="contact-form" class="contact" name="contact-form" method="post" action="send-mail.php">
									<span style="color: #fff;font-family: Coming Soon; font-size: 10pt;">
										<div class="form-group">
											<label class="radio-inline">
											  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Hadir
											</label>
											<label class="radio-inline">
											  <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Tidak hadir
											</label>
											<label class="radio-inline">
											  <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> Belum tahu
											</label>
										
										</div>
									<div class="form-group">
										<input type="text" name="name" class="form-control" required="required" placeholder="Your Name">
									</div>
									<div class="form-group">
										<input type="email" name="email" class="form-control" required="required" placeholder="Email Address">
									</div>
									
									<div class="form-group">
										<textarea name="message" id="message" required="required" class="form-control" placeholder="Intine isian untuk ucapan selamat, ga reti bhsa inggrise"></textarea>
									</div>
									</span> <br>
									<div class="form-group">
										<button type="submit" class="btn btn-primary"><span style="font-family: Merienda;">Submit Confirmation</button>
										</div>
									</form>
								</div>
							</div>
							<div class="col-sm-3">
							</div>
						</div>
						
					</div>
				</section>

				<section id="contact">
			<div class="container">
				<div class="contact-details">
					<!-- <div class="pattern"></div> -->
					<div class="row text-center clearfix">
						<div class="col-sm-3">
						</div>
						<div class="col-sm-6">
							<center><h2 class="title-one"><span style="color: #BC82FD;font-family: Petit Formal Script; font-size: 40pt;">Wishes</span><br><img src="<?php echo base_url(); ?>assets/countdown/header3.png" class="img-responsive" alt=""></h2>

							<p><span style="color: #B9B655;font-family: Merienda; font-size: 20pt;">Lorem Ipsum belegumahum ahum </span></p>
							</center><br>
							
							</div>
							<div class="col-sm-3">
							</div>
						</div>
						
					</div>
				</section>



	<footer id="footer"> 
		<div class="col-sm-12 bottom-separator">
			<center><img src="<?php echo base_url(); ?>assets/countdown/untitled-21.png" class="img-responsive" alt=""></center><br>
		</div>
		<div class="container"> 
			<div class="text-center"> 
				<p>Copyright &copy; 2017 - <a href="http://mengundangmu.com/">Mengundangmu.com</a></p> 
			</div> 
		</div> 
	</footer> <!--/#footer--> 

	<script type="text/javascript" src="<?php echo base_url(); ?>assets/template/js/jquery.js"></script> 
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/template/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/template/js/smoothscroll.js"></script> 
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/template/js/jquery.isotope.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/template/js/jquery.prettyPhoto.js"></script> 
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/template/js/jquery.parallax.js"></script> 
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/template/js/main.js"></script> 
</body>
</html>