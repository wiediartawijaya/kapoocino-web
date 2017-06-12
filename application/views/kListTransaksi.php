<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title>Kapoocino</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('Asset/css/webicons.css')?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('Asset/css/foundation.css')?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('Asset/css/app6.css')?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('Asset/css/motion-ui.css')?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('Asset/dist/jquery.fullPage.css')?>" />
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
		
		<script type="text/javascript" src="<?php echo base_url('Asset/dist/jquery.fullPage.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('Asset/dist/scrolloverflow.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('Asset/js/vendor/foundation.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('Asset/js/app.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('Asset/js/scripts-icon.js'); ?>"></script>
		
		<link href="<?php //echo base_url('Asset/css/datatable/dataTables.foundation.min.css')?>" rel="stylesheet">
		
	
		<script src="<?php //echo base_url('Asset/js/datatable/jquery.dataTables.min.js')?>"></script>
		<script src="<?php //echo base_url('Asset/js/datatable/dataTables.foundation.min.js')?>"></script>
		
		
		<script type="text/javascript">
			$(document).ready(function() {
				$('#fullpage').fullpage({
					sectionsColor: ['#5E393B','#FBE6AF', '#FF715B', '#4C5454','#f5f5f5','#fefefe','#2f9fa0','#2f9fa0'],
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
					<ul class="menu dropdown center" data-dropdown-menu>
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
				<div class="medium-8 medium-offset-2 columns">
					<div class="row" id="trans" style="margin-Top:5em;">
						<h4>List Transaksi</h4>
						<?php echo form_open("control/listtransaksi")?>
						<table class="table table-striped" id="mydata" style="color:black;">
							<thead style="background:rgb(0, 140, 186);">
								<tr>
									<th>No</th>
									<th>Jenis Iklan</th>
									<th>Tipe Iklan</th>
									<th>Isi Iklan</th>
									<th>Tanggal Mulai</th>
									<th>Tanggal Berakhir</th>
									<th>Durasi</th>
									<th>Keterangan</th>
								</tr>
							</thead>
							<tbody>
								<tr>
								<?php 
									$Kode_User = $this->session->userdata('Kode_User');
									
									$data_htrans['semua_htrans'] = $this->model_user->gethtrans($Kode_User);
									//print_r($this->model_user->gethtrans($Kode_User));
									$tmp = 1;
									foreach($this->model_user->gethtrans($Kode_User) as $i)
									{	//print_r($this->model_user->getdtrans($i->Id_trans));
										echo "<tr>";
											echo "<td>".$tmp."</td>";
										
										foreach ($this->model_user->getdtrans($i->Id_trans) as $j)
										{
											$this->model_user->getjenis_iklan($j->Id_jenis_iklan);
											foreach ($this->model_user->getjenis_iklan($j->Id_jenis_iklan) as $k){
												echo "<td>".$k->Nama_Jenis_Iklan."</td>";
											}
											echo "<td>".$j->Tipe_iklan."</td>";
											echo "<td>".$j->Isi_iklan."</td>";
											echo "<td>".$j->tanggal_mulai."</td>";
											echo "<td>".$j->tanggal_berakhir."</td>";
											echo "<td>".$j->durasi."</td>";
											echo "<td>";
												echo form_submit("T".$j->id_trans , "Detail",array(
													"id" => $j->id_trans,
													"class" => "button expanded",
													"style" =>"border-radius:5px;padding:0 auto;margin:0 auto;background:rgb(0, 140, 186);color:Black;"
													));
												echo "</td>";
										}
										//print_r ($data_dtrans['semua_dtrans']);
										$tmp += 1;
										
									}
								?>
								</tr>
							</tbody>
						</table>
						<?php echo form_close() ?>
					</div><!-- row -->
				</div>
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