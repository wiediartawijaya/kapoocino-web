<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title>Kapoocino</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('Asset/css/webicons.css')?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('Asset/css/foundation.css')?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('Asset/css/app.css')?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('Asset/css/motion-ui.css')?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('Asset/dist/jquery.fullPage.css')?>" />
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
		
		<script type="text/javascript" src="<?php echo base_url('Asset/dist/jquery.fullPage.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('Asset/dist/scrolloverflow.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('Asset/js/vendor/foundation.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('Asset/js/app.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('Asset/js/scripts-icon.js'); ?>"></script>
		<style>
			.tulisan{
				
			}
		</style>
		<script type="text/javascript">
			$(document).ready(function() {
				$('#fullpage').fullpage({
					sectionsColor: ['#5E393B','#FBE6AF', '#FF715B', '#4C5454','#f5f5f5','#fefefe','#2f9fa0','#2f9fa0'],
					css3: true,
				});
				//$( ".gambar" ).toggle( "slide" );
				//$('.tulisan').toggle({ direction: "left" }, 1000);
				//$('.tulisan').animate({width:'toggle'},1000);
				//$('.tulisan').hide('slide', {direction: 'right'}, 1000);
				//$('.tulisan').stop();
				//$('.tulisan').hide('slide', {direction: 'left'}, 2000);
				//$('.tulisan').stop();
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
					</ul>
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
							<div class="columns medium-8 tulisan">
								<article class="opening__description">
									<h1>Make Real Friend</h1>
									<p>Download aplikasinya sekarang! lalu terhubung dan bersenang-senanglah dengan teman disekitarmu.</p>

									<ul class="download__list">
										<li>
											<a href="<?php echo base_url("https://play.google.com/store/apps/details?id=com.kapoocino.client&hl=en");?>" >
												<img src="<?php echo base_url("Asset/img/icon-android.svg"); ?>" alt="Android"/>Android
											</a>
										</li>
										<li>
											<a href="<?php echo base_url("https://itunes.apple.com/in/app/kapoocino/id1166542151?mt=8");?>" >
												<img src="<?php echo base_url("Asset/img/icon-iphone.svg"); ?>" alt="iPhone"/>iPhone
											</a>
										</li>
										<li>
											<a href="#">
												<img src="<?php echo base_url("Asset/img/icon-desktop.svg"); ?>" alt="Web"/>Web
											</a>
										</li>
									</ul>

									<a href="#" class="success  button">Cari tahu fitur lainnya</a>
								</article>
							</div>
							<div class="medium-4 columns gambar" style="padding-top:2em">
								<img src="<?php echo base_url("Asset/img/home-phone.png"); ?>" alt="phone"/>
								
							</div>
						</div>

					</div><!-- columns -->
				</div><!-- row -->
			</div><!-- container -->
			<!-- End Content 1 -->
			
			<!-- Content 2 -->
			<div class="section container featured-content__list quiz-features" id="section1">
				<div class="row">
					<div class="medium-6 columns  features__text">
						<article>
							<h2>Quiz</h2>
							<p>Ayo tebak-tebakan dengan temanmu. Kamu bisa membuat tebak-tebakan dengan teman dekatmu atau menjawab pertanyaan mereka. Buat mereka penasaran dengan tebak-tebakanmu!!!</p>
							<a href="#" class="button primary">Cari tahu caranya disini</a>
						</article>
					</div>
					<div class="medium-6 columns  features__img">
							<img src=
							"<?php echo base_url("Asset/img/Feature-1_lrs-1.png"); ?>" alt="" width="280"  />
					</div>
				</div>
			</div>
			<!-- End Content 2 -->
			
			<!-- Content 3 -->
			<div class="section container features-content__list  kpost-features" id="section2">
				<div class="row">
					<div class="medium-6 columns  features__img">
							<img src="<?php echo base_url("Asset/img/Feature-1_lrs-1.png"); ?>" alt="" width="280" />
					</div>
					<div class="medium-6 columns  features__text">
						<article>
							<h2>Kpost</h2>
							<p>Berbagi tentang perasaanmu, pengalamanmu, dan apapun tentang dirimu disini kepada teman-temanmu.</p>
							<a href="#" class="button success">Yuk buat Kpost pertamamu</a>
						</article>
					</div>
				</div>
			</div>
			<!-- End Content 3 -->
			
			<!-- Content 4 -->
			<div class="section container features-content__list polling-features" id="section3">
				<div class="row">
					<div class="medium-6 columns  features__text">
						<article>
							<h2>Polling</h2>
							<p>Buat poling untuk menentukan akan makan siang dimana kamu kali ini dengan teman-teman barumu.</p>
							<a href="#" class="button warning" >Membuat poling sangat mudah, coba yuk!</a>
						</article>
					</div>
					<div class="medium-6 columns  features__img">
						<img src="<?php echo base_url("Asset/img/Feature-1_lrs-1.png"); ?>" alt="" width="280" />
					</div>
				</div>
			</div>
			<!--End Content 4 -->
			
			<!-- Content 5 -->
			<div class="section container features-content__list  channel-features" id="section4">
				<div class="row">
					<div class="medium-6 columns  features__img">
						<img src="<?php echo base_url("Asset/img/Feature-1_lrs-1.png"); ?>" alt="" width="280" />
					</div>
					<div class="medium-6 columns  features__text">
						<article>
							<h2>Channel</h2>
							<p>Kamu bisa membuat Channelmu sendiri disini yang berisi tentang kamu atau apapun yang ingin kamu bagikan.</p>
							<a href="https://business.kapoocino.com" class="button alert">Buat Channel yuk!</a>
						</article>
					</div>
				</div>
			</div>
			<!--End Content 5 -->
			
			<!-- Content 6 -->
			<div class="section container video__panel" id="section6">
				<div class="row">
					<div class="medium-6 medium-offset-3 columns">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/D50Eyo7ZWWs" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
			</div>
			<!--End Content 6 -->
			
			<!-- Content 7 -->
			<div class="section container news__panel" id="section7">
				<div class="row">
					<div class="medium-6 medium-offset-3 columns">
						<h2 class="text-center">News About Kapoocino</h2>
						<ul class="news__list">
							<li>
								<a href="#" >
									<img src="<?php echo base_url("Asset/img/techinasia.png"); ?>" alt="Tech in Asia" width="150" style = "padding-left:1em"/>
								</a>
							</li>
							<li>
								<a href="#" >
									<img src="<?php echo base_url("Asset/img/techcrunch.jpg"); ?>" alt="Tech Crunch" width="150" style = "padding-left:1em"/>
								</a>
							</li>
							<li>
								<a href="#" >
									<img src="<?php echo base_url("Asset/img/teknojurnal.png"); ?>" alt="Tekno Jurnal" width="150" style = "padding-left:1em"/>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!--End Content 7 -->
			
			<!-- Content 8 -->
			<div class="section container feedback__panel" id="section8">
				<div class="row">
					<div class="medium-6 medium-offset-3 columns">
						<h2>Yuk Unduh Kapoocino!</h2>
						
						<div class="row download__panel">
							<div class="medium-6 columns">
								<a href="<?php echo base_url("https://play.google.com/store/apps/details?id=com.kapoocino.client&hl=en");?>" >
									<img src="<?php echo base_url("Asset/img/google_play_03.png"); ?>" alt="Kapoocino Play Store"/>
								</a>
							</div>
							<div class="medium-6 columns ">
								<a href="<?php echo base_url("https://itunes.apple.com/in/app/kapoocino/id1166542151?mt=8");?>" >
									<img src="<?php echo base_url("Asset/img/app_store_03.png"); ?>" alt="Kapoocino App Store"/>
								</a>
							</div>
						</div>
						<h4>Berikan feedbackmu untuk kemajuan aplikasi ini di <a href="#">support@kapoocino.com</a></h4>
						<h4>You can also find us on</h4>
						<a class="webicon facebook" href="#">Facebook</a>
						<a class="webicon instagram" href="#">Instagram</a>
						<a class="webicon twitter" href="#">Mail</a>

					</div>
				</div>
			</div>
			<!--End Content 8 -->
			
			<!-- End Content -->
		</div>
		<!-- End Full-Page -->
		
		
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