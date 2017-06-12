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
		
		<script type="text/javascript">
			$(document).ready(function() {
				$('#fullpage').fullpage({
					sectionsColor: ['#5E393B','#FBE6AF', '#FF715B', '#4C5454','#f5f5f5','#fefefe','#2f9fa0','#2f9fa0'],
					css3: true
				})
				var r ="";
				ganticb();
				//alert(<?php echo $error ?>);
			});
			/*function cekjumlahtext()
			{
				$("#teks1").keyup(function(){
					var jumlah = $("#teks1").val().length;
					$("#count").text($(this).val().length);
					//r=confirm("Jumlah iklan harus 150 kata!");
					if(jumlah < 150)
					{
						alert("Jumlah iklan harus min 5 baris di mana 1 baris terdiri atas 30 kata!");
					}
					else if (jumlah > 1500 )
					{
						alert("Jumlah iklan melebih 5 baris");
					}
					
				  
				});
			}*/
			function ganticb(){
				if ($('#choose').val() == "text"){
					$('#teks1').show();
					$('#teks2').hide();
				}if ($('#choose').val() == "gambar"){
					$('#teks1').hide();
					$('#teks2').show();
				}
				if ($('#choose').val() == "video"){
					$('#teks1').hide();
					$('#teks2').show();
				}
				
			}
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
					  <li><a href="<?php echo site_url('control/user')?>">Pasang Iklan</a>
					  <li><a href="<?php echo site_url('control/listtransaksi')?>">List Transaksi</a></li>
					  <li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<!--<img class="nav-user-photo" src="img/avatar5.png" alt="Jason's Photo" />-->
								<span class="user-info">
									<small>Welcome,</small>
									<?php
									echo $this->session->userdata('Nama_user');
									?>
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
			<div class="section active container featured-content" id="section0">
				<div class="row">
					<div class="medium-5 medium-offset-3 columns center">
						<div class="row">
						<?php echo form_open_multipart('control/user');?>
							<div class="row collapse">
								<div class="medium-3 columns" style="margin-top:0.5em">
									<span class="prefix">Jenis Iklan</span>
								</div>
								<div class="medium-6 columns">
								<?php 
									echo "<select name='jenis'>";
									echo "<option DISABLED>Apa Jenis Iklan yang diinginkan ?</option>";
									
									foreach($this->model_user->getall_JenisIklan() as $i)
									{
										echo "<option>";
										echo $i->Nama_Jenis_Iklan;
										echo "</option>";
									}
									echo "</select>";
								?>
								</div>
							</div>
							<div class="row collapse">
								<div class="medium-3 columns" style="margin-top:0.5em">
									<span class="prefix">Tipe Iklan</span>
								</div>
								<div class="medium-6 columns">
									<select name="tipe" id="choose" onchange="ganticb()">
									<option DISABLED>Tipe apa iklan yang diinginkan?</option>
									<option value="text">Teks </option>
									<option value="video">Video</option>
									<option value="gambar">Gambar</option>
									</select>
								</div>
							</div>
							<div class="row collapse">
								<div class="medium-4 columns" style="margin-top:0.5em">
									<span class="prefix">Durasi Pemasangan</span>
								</div>
								<div class="medium-2 columns medium-offset-2">
									<select name="durasi" id ="choose">
										<option DISABLED>Berapa Lama Pemasangan ?</option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
									</select>
								</div>
								<div class="medium-1 columns">
									<span class="prefix">Minggu
									</span>
								</div>
							</div>
							
							<div class="row collapse">
								<div class="medium-3 columns" style="margin-top:0.5em">
									<span class="prefix">Teks/Gambar</span>
								</div>
								<div class="medium-6 columns">
									<?php echo $error;?>
									<!--<input name="isi_iklan" id="teks1" class="input-group-field" type="text">-->
									<textarea name="isi_iklan" id="teks1" placeholder="Masukan teks" onchange="cekjumlahtext"></textarea>
									<div id="count"></div>
									<input name="userfile" id="teks2"class="input-group-field" type="file" value="Upload">
								</div>
							</div>
							<div class="row collapse">
								<div class="medium-4 medium-offset-10">
									<?php //echo form_open("control/user")?>
									<?php echo form_submit("Pasang" , "Pasang",array(
									"id" => "Pasang",
									"class" => "button expanded",
									"type"=>"submit",
									"style" =>"background:rgb(0, 140, 186);color:Black;margin-top:1em"
									));?>
								</div>
								<?php echo form_close() ?>
							</div>
						</div>
					</div><!-- columns -->
				</div><!-- row -->
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