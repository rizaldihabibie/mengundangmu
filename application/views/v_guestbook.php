<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Wedding Website Designer">
		<meta name="keywords" content="wedding, menikah, undangan nikah, proposal, prewedding, pernikahan, undangan online, nikah, wedding organizer, groom, bride, married, love story, akad nikah, holy matrimony" />
		<meta name="author" content="mengundangmu.com">
		<title>Alia Zamzam Mengundangmu</title>
		<link href="<?php echo base_url(); ?>assets/template/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>assets/template/css/prettyPhoto.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>assets/template/css/font-awesome.min.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>assets/template/css/animate1.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>assets/template/css/main.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>assets/template/css/responsive.css" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/countdown/style1.css" type="text/css" />
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/countdown/countdown.js"></script>
		
		<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/countdown/logotab2.png">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>assets/template/images/ico/love144.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>assets/template/images/ico/love114.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>assets/template/images/ico/love72.png">
		<link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>assets/template/images/ico/love57.png">
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
								<a class="navbar-brand" href="<?php echo base_url(); ?>"><h1><img src="<?php echo base_url(); ?>assets/countdown/Untitled-3.png" alt="logo"></h1></a>
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
									<div class="item active" style="background-image: url(<?php echo base_url(); ?>assets/photo/slider/ok3.jpg)">
									</div>
								</div>
							</div>
						</section>
						<section id="comment">
							<div class="container">
								<div class="comment-details">
									<div class="row text-center clearfix">
										<div class="col-sm-3">
										</div>
										<div class="col-sm-6">
											<center><h2 class="title-one"><span style="color: #BC82FD;font-family: Petit Formal Script; font-size: 40pt;">Guest Book</span><br><img src="<?php echo base_url(); ?>assets/countdown/footer1.png" class="img-responsive" alt=""></h2>
											</center>
											<div id="contact-form-section">
												<p><span style="color: #fff;font-family: Merienda; font-size: 15pt; text-shadow: 1px 2px #B9B655">Please confirm attendance and write your special wishes</span></p><br>
												<div class="status alert alert-success" style="display: none"></div>
												<form id="contact-form" class="contact" name="contact-form" method="post" action="<?php echo base_url(); ?>guestbook/saveComment">
													<span style="color: #fff;font-family: Coming Soon; font-size: 12pt;">
														<?php if($this->session->flashdata('message')): ?>
														<div class="alert alert-success alert-dismissible" role="alert">
															<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
															<div class="fa fa-check"></div>&nbsp;<?php echo $this->session->flashdata('message'); ?>
														</div>
														<?php endif; ?>
														<?php if($this->session->flashdata('warning')): ?>
														<div class="alert alert-danger alert-dismissible" role="alert">
															<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
															<div class="fa fa-info"></div>&nbsp;<?php echo $this->session->flashdata('warning'); ?>
														</div>
														<?php endif; ?>
														<div class="form-group">
															<div class="col-lg-4">
																<p>Pilih kehadiran :</p>
															</div>
															<div class="col-lg-8">
																
																<?php if ($this->session->flashdata('kehadiran')):
																$kehadiran = $this->session->flashdata('kehadiran');
																else :
																$kehadiran="";
																endif?>
																<select name="kehadiran" class="form-control" value="<?php echo $kehadiran; ?>" required>
																	<option value="hadir">Saya akan hadir</option>
																	<option value="tidak hadir">Saya berhalangan hadir</option>
																	<option value="tidak tahu">Saya tidak tahu</option>
																</select>
															</div><br>
															
														</div><br>
														<div class="form-group">
															<div class="col-lg-4">
																<p>Doa atau ucapan :</p>
															</div>
															<div class="col-lg-8">
																
																<?php if ($this->session->flashdata('pesan')):
																$pesan = $this->session->flashdata('pesan');
																else :
																$pesan="";
																endif?>
																<textarea name="pesan" class="form-control" placeholder="tulis doa atau ucapan" required></textarea><br>
															</div>
															
														</div>
														
													</span>
													<br><div class="form-group">
														<button type="submit" class="btn btn-primary"><span style="font-family: Merienda;">Submit Confirmation</button>
														</div>
													</form>
												</div>
											</div>
											<div class="col-sm-3">
											</div>
										</div>
										
									</div>
								</div>
							</section>
							<section id="contact">
								<div class="container">
									<div class="contact-details">
										<div class="row text-center clearfix">
											<div class="col-sm-1">
											</div>
											<div class="col-sm-10">
												<center><h2 class="title-one"><span style="color: #BC82FD;font-family: Petit Formal Script; font-size: 40pt;">Wishes</span><br><img src="<?php echo base_url(); ?>assets/countdown/footer1.png" class="img-responsive" alt=""></h2>
												</center>
												<?php if (count($list)==0): ?>
												
												<div class="alert alert-warning alert-dismissible" role="alert">
													<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
													<div class="fa fa-info-circle"></div> Tidak Ada Data<br>
												</div>
												<?php else: ?>
												<?php foreach ($list as $row): ?>
												<div class="text-center">
													<div class="col-sm-8 col-sm-offset-2">
														<p><small><span style="color: #bfbfbd;"><?php echo date('d M Y H:m:s',strtotime($row->created))?></span></small></p>
														<h4><span style="color: #B9B655;font-family: Great Vibes; font-size: 30pt; text-shadow: 1px 1px #000;"><?php echo $row->first_name?>&nbsp;<?php echo $row->last_name?></span></h3>
														<p><span style="font-size: 12pt; font-family: Eagle Lake;">"<?php echo $row->comment?>"</span></p>
														
														<div class="col-sm-12 text-center bottom-separator">
															<img src="<?php echo base_url(); ?>assets/countdown/bataskomen2.png" class="img-responsive" alt=""><br>
														</div>
													</div>
												</div>
												<?php endforeach; ?>
												<?php endif; ?>
											</div>
											<div class="col-sm-1">
											</div>
										</div>
									</div>
								</div>
							</section>
							
							
							<footer id="footer">
								<div class="col-sm-12 bottom-separator">
									<center><img src="<?php echo base_url(); ?>assets/countdown/Untitled-21.png" class="img-responsive" alt=""></center><br>
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