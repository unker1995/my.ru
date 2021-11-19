
<?php include '../functions/menu.php' ?>
<?php include '../functions/blog.php' ?>




<!DOCTYPE html>
<html>
<head>
	<title>Blog - AKAD - Creative Digital Agency HTML Template</title>
	<!-- META TAGS -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
	<meta name="author" content="Amine Akhouad">
	<meta name="description" content="AKAD is a creative and modern template for digital agencies">

	<!-- STYLES -->
	<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="/assets/css/ionicons.min.css">
	<link rel="stylesheet" href="/assets/css/animsition.min.css">
	<link rel="stylesheet" href="/assets/css/animate.css">
	<link rel="stylesheet" href="/assets/css/style.css">
</head>
<body class="animsition">
	<!-- HEADER  -->
	<header class="main-header">
		<div class="container">
			<div class="logo">
				<a href="index.html"><img src="/assets/img/logo.png" alt="logo"></a>
			</div>
			<div class="menu">
				<!-- desktop navbar -->
				<nav class="desktop-nav">
					<ul class="first-level">
					<?php 
						$data = get_menu();
						foreach($data as $menu){
							echo '<li><a href="'.$menu[1].'" class="animsition-link">'.$menu[0].'</a></li>';
						}
					?>
					</ul>
				</nav>
				<!-- mobile navbar -->
				<nav class="mobile-nav"></nav>
				<div class="menu-icon">
					<div class="line"></div>
					<div class="line"></div>
					<div class="line"></div>
				</div>
			</div>
		</div>
	</header>
<?php $article = get_article() ?>
	<!-- HERO SECTION  -->
	<div class="site-hero_2">
		<div class="page-title">
			<div class="big-title montserrat-text uppercase"><?php echo $article[0]?></div>
			<div class="small-title montserrat-text uppercase"><?php echo $article[1]?></div>
		</div>
	</div>


	<section>
		<div class="container">
			<div class="row">
				<div class="col-12">
				
					<?php echo $article[2]?>

				</div><!-- end col -->


			</div><!-- end row -->
		</div><!-- end container -->
	</section>


	<!-- newsletter -->
	<section class="green-section wow fadeInUp" style="padding:50px 0">
		<div class="container">
			<div class="col-md-6 col-sm-12">
				<div class="row">
					<span class="white-text montserrat-text uppercase" style="font-size:30px;display:block;">
						you think we're cool? let's work together
					</span>
					<a href="#" class="btn white" style="margin-top:30px"><span>get in touch</span></a>
				</div>
			</div>

			<div class="col-md-6 col-sm-12">
				<div class="row">
					<div class="white-section" style="padding:20px">
						<span class="montserrat-text uppercase" style="font-size:24px">stay informed with our newsletter</span>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua.
						</p>
						<form action="#" method="post">
							<div class="input_1">
								<input type="text" name="email">
								<span>your email</span>
							</div>
							<button type="submit" class="btn green" style="margin-top:20px"><span>send</span></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- FOOTER -->
	<footer class="main-footer wow fadeInUp">
		<div class="container">
			<div class="col-md-8 col-sm-12">
				<div class="row">
					<nav class="footer-nav">
						<ul>
							<li><a href="index.html" class="animsition-link link">Home</a></li>
							<li><a href="about.html" class="animsition-link link">about us</a></li>
							<li><a href="services.html" class="animsition-link link">services</a></li>
							<li><a href="portfolio-1.html" class="animsition-link link">portfolio</a></li>
							<li><a href="blog-1.html" class="animsition-link link">blog</a></li>
							<li><a href="contact.html" class="animsition-link link">contact us</a></li>
						</ul>
					</nav>
				</div>
			</div>

			<div class="col-md-4 col-sm-12" style="text-align:right">
				<div class="row">
					<div class="uppercase gray-text">
						created by akhouad &copy;2016. all rights reserved.
					</div>
					<ul class="social-icons" style="margin-top:30px;float:right">
						<li><a href="#"><i class="icon ion-social-facebook"></i></a></li>
						<li><a href="#"><i class="icon ion-social-twitter"></i></a></li>
						<li><a href="#"><i class="icon ion-social-youtube"></i></a></li>
						<li><a href="#"><i class="icon ion-social-linkedin"></i></a></li>
						<li><a href="#"><i class="icon ion-social-pinterest"></i></a></li>
						<li><a href="#"><i class="icon ion-social-instagram"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>

	<!-- SCRIPTS -->
	<script type="text/javascript" src="/assets/js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="/assets/js/smoothScroll.js"></script>
	<script type="text/javascript" src="/assets/js/jquery.animsition.min.js"></script>
	<script type="text/javascript" src="/assets/js/wow.min.js"></script>
	<script type="text/javascript" src="/assets/js/main.js"></script>
	<script type="text/javascript">
	$(window).load(function(){
		new WOW().init();
	});
	</script>
</body>
</html>