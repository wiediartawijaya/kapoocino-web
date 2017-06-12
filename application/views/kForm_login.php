<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title>Kapoocino</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('Asset/css/webicons.css')?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('Asset/css/foundation.css')?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('Asset/css/app2.css')?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('Asset/css/motion-ui.css')?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('Asset/dist/jquery.fullPage.css')?>" />
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
		
		<script type="text/javascript" src="<?php echo base_url('Asset/js/vendor/what-input.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('Asset/js/vendor/foundation.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('Asset/js/app.js'); ?>"></script>
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
		
		<!-- Form -->
		<div class="section active container featured-content" id="section0">
			<div class="row">
				<div class="medium-8 medium-offset-4 columns">
					<div class="row">
						<div class="columns medium-6">
							<?php echo form_open("control/login")?>
								<div class="form-icons">
									<h4>Login</h4>
									<div class="input-group">
										<span class="input-group-label">
										<i class="fa fa-user"></i>
										</span>
										<?php echo form_input("tbUser","",array(
											"id" => "user",
											"placeholder" => "Insert Username",
											"class" => "input-group-field"
										));?>
									</div>

									<div class="input-group">
										<span class="input-group-label">
										<i class="fa fa-key"></i>
										</span>
										<?php echo form_password("tbPass","",array(
											"id" => "pass",
											"placeholder" => "Insert Password",
											"class" => "input-group-field"
										));?>
									</div>
								</div>
								<a href="<?php echo site_url('control/register')?>">Register !</a>
								<?php echo form_submit("login" , "Sign In",array(
								"id" => "login",
								"class" => "button expanded"
								));?>
							<?php echo form_close() ?>
						</div>
							
					</div>
				</div>
			</div>
		</div>
		<!-- End Form -->
		
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