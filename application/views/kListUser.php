<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title>Kapoocino</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('Asset/css/webicons.css')?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('Asset/css/foundation.css')?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('Asset/css/app5.css')?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('Asset/css/motion-ui.css')?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('Asset/dist/jquery.fullPage.css')?>" />
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
		
		<script type="text/javascript" src="<?php echo base_url('Asset/dist/jquery.fullPage.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('Asset/dist/scrolloverflow.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('Asset/js/vendor/foundation.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('Asset/js/app.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('Asset/js/scripts-icon.js'); ?>"></script>
		<script type="text/javascript" src="<?php //echo base_url('Asset/js/foundation/foundation.clearing.js'); ?>"></script>
		
		<script type="text/javascript">
			$(document).ready(function() {
				$('#fullpage').fullpage({
					sectionsColor: ['#5E393B','#FBE6AF', '#FF715B', '#4C5454','#f5f5f5','#fefefe','#2f9fa0','#2f9fa0'],
					css3: true
				})
			});
			$(document.body).on("open.fndtn.clearing", function(event) {
			  console.info("About to open thumbnail with src ", $('img', event.target).attr('src'));
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
					  <li><a href="<?php echo site_url('control/user')?>">Pasang Iklan</a></li>
					  <li><a href="<?php echo site_url('control/listtransaksi')?>">List Transaksi</a></li>
					  <li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<!--<img class="nav-user-photo" src="img/avatar5.png" alt="Jason's Photo" />-->
								<span class="user-info">
									<small>Welcome,</small>
									Jason
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Header -->
		
		<!-- Form -->
		<div id="fullpage">
		
			<!-- Form -->
			<div class="section active container featured-content">
				<div class="row">
					<div class="medium-4 columns medium-offset-2">
						<div class="row">
							<div class="medium-4 columns">
								<span class="prefix">Jenis Iklan</span>
							</div>
							<div class="medium-4 columns medium-offset-2">
								<?php 
									$Id_trans = $this->session->userdata('Id_trans');
									foreach ($this->model_user->getdtrans($Id_trans) as $j)
									{
										//echo $j->Id_jenis_iklan;
										$this->model_user->getjenis_iklan($j->Id_jenis_iklan);
										foreach ($this->model_user->getjenis_iklan($j->Id_jenis_iklan) as $k){
											echo "<span class='prefix'>";
											echo $k->Nama_Jenis_Iklan."</span>";
										}
									}
									//echo $Id_trans;
								?>
								
							</div>
						</div>
						<div class="row">
							<div class="medium-4 columns">
									<span class="prefix">OlahRaga</span>
							</div>
						</div>
						<div class="row">
							<div class="medium-4 columns">
								<span class="prefix">Tipe Iklan</span>
							</div>
						</div>
						<div class="row">
							<div class="medium-4 columns">
								<span class="prefix">Gambar</span>
							</div>
						</div>
						<div class="row">
							<div class="medium-4 columns">
								<span class="prefix">Durasi</span>
							</div>
						</div>
						<div class="row">
							<div class="medium-4 columns">
								<span class="prefix">Tanggal Mulai</span>
							</div>
						</div>
						<div class="row">
							<div class="medium-4 columns">
								<span class="prefix">Tanggal Akhir</span>
							</div>
						</div>
						<div class="row">
							<div class="medium-4 columns">
								<span class="prefix">Iklan</span>
							</div>
						</div>
					</div>
					
						<!--<div class="row">
							<div class="medium-3 columns">
								<span class="prefix">Iklan</span>
							</div>
						</div>
						<div class="row">
							<div class="medium-5 columns" style="margin-top:0.5em">
								<span class="prefix">Iklan</span>
							</div>
							<div class="medium-5 columns" style="margin-top:0.5em">
								<ul class="clearing-thumbs clearing-feature" data-clearing style="list-style: none outside none;">
									<li>
										<a href="img/avatar5.png">
											<img src="img/avatar5.png">
										</a>
									</li>
								</ul>
							</div>
						</div>-->
						</div>
					</div><!-- columns -->
				</div><!-- fullPage -->
			</div><!-- container -->
			<!-- End Form -->
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