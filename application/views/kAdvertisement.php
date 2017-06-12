<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title>Kapoocino</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('Asset/css/webicons.css')?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('Asset/css/foundation.css')?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('Asset/css/app1.css')?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('Asset/css/motion-ui.css')?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('Asset/dist/jquery.fullPage.css')?>" />
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
		
		<script type="text/javascript" src="<?php echo base_url('Asset/dist/jquery.fullPage.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('Asset/dist/scrolloverflow.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('Asset/js/vendor/foundation.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('Asset/js/app.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('Asset/js/scripts-icon.js'); ?>"></script>
		
		<script type="text/javascript">
			$(document).ready(function() {
				$('#fullpage').fullpage({
					sectionsColor: ['#5E393B','#D7C37A', '#f6debe', '#EDE9A3','#FBE6AF'],
					css3: true
				})
			});
		</script>
	</head>
	<body>
		<!-- Header -->
		<div id = "header" data-sticky-container>
			<div class="title-bar" data-sticky data-options="marginTop:0;" style="width:100%" data-top-anchor="1" data-btm-anchor="content:bottom">
				<div class="title-bar-left">
					<img src="<?php echo base_url("Asset/img/Kapoocino-header.png"); ?>" alt="Logo Kapoocino" width="110" />
				</div>
				<div class="title-bar-right">
					<ul class="menu dropdown" data-dropdown-menu>
					  <li><a href="<?php echo site_url('control/home')?>">Home</a></li>
					  <li><a href="#">Contact</a></li>
					  <li><a href="<?php echo site_url('control/advertisement')?>">Advertisement</a></li>
				</div>
			</div>
		</div>
		<!-- End Header -->
		
		<!-- Content -->
		<div id="fullpage">
			<!-- Content 1 -->
			<div class="section active container featured-content" id="section0">
				<div class="row">
					<div class="medium-8 medium-offset-2 columns">
						<div class="row">
							<div class="columns medium-8" style="margin-top:8em">
								<article class="opening__description">
									<h1 style="color:white">Iklan Cappocino</h1>
									<a href="<?php echo site_url('control/login')?>"" class="success  button">Buat Iklanmu disini!!</a>
								</article>
							</div>
							<div id ="phone-image" class="medium-4 columns">
								<img src="<?php echo base_url("Asset/img/home-phone.png"); ?>" alt="phone"/>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Content 2 -->
			
			<!-- Content 3 -->
			<div class="section container featured-content_Middle" id="section1">
				<div class="row">
					<div class="medium-12 columns">
						<div class="row">
							<article class="opening_description">
								<h1 style="margin-top:-60px;text-align:center;color:white">Buat Iklan di Kappocino</h1>
							</article>
							
							<div class="columns medium-4 text-center" id="featured-content-1">
								<img src="<?php echo base_url("Asset/img/anak-bangsa.png"); ?>" alt=""/>
								<h3 style=";color:white">Kapoocino</h3>
								<p style=";color:white">Social Media Karya Anak Bangsa </p>
							</div>
							
							<div class="columns medium-4 text-center" id="featured-content-2">
								<img src="<?php echo base_url("Asset/img/anak-bangsa.png"); ?>" alt=""/>
								<h3 style=";color:white">Kapoocino</h3>
								<p style=";color:white">Interaksi Semakin Menyenangkan </p>
							</div>
							
							<div class="columns medium-4 text-center" id="featured-content-3">
								<img src="<?php echo base_url("Asset/img/anak-bangsa.png"); ?>" alt=""/>
								<h3 style=";color:white">Kapoocino</h3>
								<p style=";color:white">Memperkenalkan Produk Asli Indonesia </p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Content 3 -->
			
			<!-- Content 4 -->
			<div class="section container featured-testimoni" id="section2">
				<div class="row">
					<div class="medium-6 medium-offset-3 columns">
						<h3 style="color:#5e393b">
							Testimoni
						</h3>
						<iframe width="560" height="315" src="https://www.youtube.com/embed/D50Eyo7ZWWs" frameborder="0" allowfullscreen=""></iframe>
					</div>
				</div>
			</div>
			<!-- End Content 4 -->
			
			<!-- Content 5 -->
			<div class="section container featured-testimoni" id="section3">
				<div class="row">
					<div class="medium-6 medium-offset-3 columns">
						<h2 style="color:#5e393b">Yuk Unduh Kapoocino!</h2>
						
						<div class="row download__panel">
							<div class="medium-6 columns">
								<a href="<?php echo base_url("https://play.google.com/store/apps/details?id=com.kapoocino.client&hl=en");?>" >
									<img src="<?php echo base_url("Asset/img/google_play_03.png"); ?>" alt="Kapoocino Play Store"/>
								</a>
							</div>
							<div class="medium-6 columns">
								<a href="<?php echo base_url("https://itunes.apple.com/in/app/kapoocino/id1166542151?mt=8");?>" >
									<img src="<?php echo base_url("Asset/img/app_store_03.png"); ?>" alt="Kapoocino App Store"/>
								</a>
							</div>
						</div>
			
						<h4 style="color:#5e393b">Berikan feedbackmu untuk kemajuan aplikasi ini di <a href="#">support@kapoocino.com</a></h4>
						<h4 style="color:#5e393b">You can also find us on</h4>
						<a class="webicon facebook" href="#" style="color:#5e393b">Facebook</a>
						<a class="webicon instagram" href="#" style="color:#5e393b">Instagram</a>
						<a class="webicon twitter" href="#" style="color:#5e393b">Mail</a>

					</div>
				</div>
			</div>
			<!--End Content 5 -->
		</div>
		<!-- Content -->
		
		<!--Footer -->
		<footer class="footer" id="footer">
			<div class="row">
				<div class="medium-12 columns">
					<p class="copyright">Copyright &copy; 2017. PT Kapoocino Media Tech. All rights reserved.</p>
				</div>
			</div>
		</footer>
		<!--End Footer -->
	</body>
</html>