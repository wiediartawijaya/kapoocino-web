<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Dashboard - Kapoocino Admin</title>

		<meta name="description" content="table &amp; Overview stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('Asset/css/bootstrap.min.css')?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('Asset/font-awesome/4.5.0/css/font-awesome.min.css')?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('Asset/css/jquery-ui.min.css')?>" />
		
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('Asset/css/fonts.googleapis.com.css')?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('Asset/css/ace.min.css')?>" class="ace-main-stylesheet" id="main-ace-style"/>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('Asset/css/ace-skins.min.css')?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('Asset/css/ace-rtl.min.css')?>" />
		
		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script type="text/javascript" src="<?php echo base_url('Asset/js/ace-extra.min.js'); ?>"></script>
		<script type="text/javascript" src="<?php //echo base_url('Asset/js/highcharts.js'); ?>"></script>
		<script type="text/javascript" src="<?php //echo base_url('Asset/js/exporting.js'); ?>"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src='http://code.highcharts.com/highcharts.js'></script>
		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default          ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="<?php echo site_url('admin/home')?> " class="navbar-brand">
						<small>
							<i class="fa fa-leaf"></i>
							Kapoocino Admin
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<li class="purple dropdown-modal">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-bell icon-animated-bell"></i>
								<span class="badge badge-important">8</span>
							</a>

							<ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="ace-icon fa fa-exclamation-triangle"></i>
									8 Notifications
								</li>

								<li class="dropdown-content">
									<ul class="dropdown-menu dropdown-navbar navbar-pink">
										<li>
											<a href="#">
												<div class="clearfix">
													<span class="pull-left">
														<i class="btn btn-xs no-hover btn-success fa fa-shopping-cart"></i>
														New Orders
													</span>
													<span class="pull-right badge badge-success">+8</span>
												</div>
											</a>
										</li>
									</ul>
								</li>

								<li class="dropdown-footer">
									<a href="#">
										See all notifications
										<i class="ace-icon fa fa-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>
						
						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img src="<?php echo base_url("Asset/img/avatar5.png"); ?>" class="nav-user-photo" alt="Jason's Photo"/>
								
								<span class="user-info">
									<small>Welcome,</small>
									Jason
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="#">
										<i class="ace-icon fa fa-cog"></i>
										Settings
									</a>
								</li>

								<li>
									<a href="profile.html">
										<i class="ace-icon fa fa-user"></i>
										Profile
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="#">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>
				
				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					
				</div><!-- /.sidebar-shortcuts -->

				<ul class="nav nav-list">
					<li class="Active">
						<a href="<?php echo site_url('admin/home')?>">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Permintaan </span>
						</a>

						<b class="arrow"></b>
					</li>
					<li class="">
						<a href="<?php echo site_url('admin/transaksi')?>">
							<i class="menu-icon fa fa-heart"></i>
							<span class="menu-text"> Transaksi </span>
						</a>

						<b class="arrow"></b>
					</li>
					<li class="">
						<a href="<?php echo site_url('admin/client')?>">
							<i class="menu-icon fa fa-users"></i>
							<span class="menu-text"> Client </span>
						</a>

						<b class="arrow"></b>
					</li>
					<li class="">
						<a href="<?php echo site_url('admin/report')?>">
							<i class="menu-icon fa fa-bar-chart-o"></i>
							<span class="menu-text"> Report </span>
						</a>
						<b class="arrow"></b>
					</li>
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text"> Tables </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="active">
								<a href="<?php echo site_url('admin/datauser')?>">
									<i class="menu-icon fa fa-caret-right"></i>
									Data User
								</a>
								<a href="<?php echo site_url('admin/iklan')?>">
									<i class="menu-icon fa fa-caret-right"></i>
									Iklan
								</a>
								<a href="<?php echo site_url('admin/datatransaksi')?>">
									<i class="menu-icon fa fa-caret-right"></i>
									Transaksi
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>
				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa 	fa-tachometer tachometer-icon"></i>
								<a href="<?php echo site_url('admin/report')?>">Report</a>
							</li>

							<li>
								<a href="<?php echo site_url('admin/tables')?>">grafik</a>
							</li>
						</ul><!-- /.breadcrumb -->
					</div>

					<div class="page-content">
						<div class="page-header">
							<div class="row">
								<div class="col-md-3">
									<h1>
										Report
										<small>
											<i class="ace-icon fa fa-angle-double-right"></i>
											grafik
										</small>
									</h1>
								</div>
							</div>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="alert alert-info">
									<button class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>

									<i class="ace-icon fa fa-hand-o-right"></i>
									Please note that demo server is not configured to save the changes, therefore you may see an error message.
								</div>
								<div class=content>
									<select name="tipe" id="choose" onchange="ganticb()">
									<option DISABLED>Tampilkan berdasarkan ?</option>
									<option value="tipe_iklan">Tipe Iklan </option>
									<option value="transaksi">Jumlah Transaksi</option>
									<option value="gambar">Gambar</option>
									</select>
									<?php
										/* Mengambil query report*/
										$tmp = -1;
										foreach($report as $result){
											$tmp++;
											if($result->Tipe_iklan = "text")
											{
												$Tipe_iklan[] = $result->Tipe_iklan; 
												//print_r($Tipe_iklan);
												//ambil bulan
												$value[] = $tmp; //print_r($tmp);//ambil nilai
											}
											
										}
										/* end mengambil query*/
									?>
									<div id="report"></div>
									<?php 
										$data['dtrans']= $this->model_admin->hittext();
										$jumtext = 0;
										for($i = 0;$i < count($data['dtrans']);$i++)
										{
											//if($data['dtrans'][$i]->Tipe_iklan == "text")
											//{
												echo $data['dtrans'][$i]->Tipe_iklan;
												echo $data['dtrans'][$i]->jumlah;
												//$jumtext = $i+ 1;
											//}
										}
										//echo $jumtext;
									?>
									
								</div>
									<?php echo form_close();?>
								</div>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">Kapoocino</span>
							Application &copy; 2015-2017
						</span>

						&nbsp; &nbsp;
						<span class="action-buttons">
							<a href="#">
								<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-rss-square orange bigger-150"></i>
							</a>
						</span>
					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url('Asset/js/jquery.js'); ?>"></script>
		
		<script type="text/javascript" src="<?php echo base_url('Asset/js/jquery-1.9.1.min.js'); ?>"></script>
		
		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script type="text/javascript" src="<?php echo base_url('Asset/js/bootstrap.min.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('Asset/js/ace-elements.min.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('Asset/js/ace.min.js'); ?>"></script>
		
		<!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->
		
		<!-- inline scripts related to this page -->
		
		<script type="text/javascript">
		function tipe_iklans()
		{
			Highcharts.chart('report', {
				chart: {
					renderTo: 'container',
					type: 'column'
				},   
				title: {
					text: 'Tipe Iklan'
				},

				subtitle: {
					text: 'Source: kapoocino.com'
				},

				yAxis: {
					title: {
						text: 'Jumlah dari Tipe'
					}
				},
				xAxis: {
					title: {
						text: 'Tipe Iklan'
					}
				},
				legend: {
					layout: 'vertical',
					align: 'right',
					verticalAlign: 'middle'
				},

				plotOptions: {
					series: {
						//pointStart: 2010
					}
				},

				series: [{
				<?php 
					$data['dtrans']= $this->model_admin->getall_dtrans();
					$jumtext = 0;
					$jumgbr = 0;
					$jumvideo = 0;
					foreach($this->model_admin->getall_dtrans() as $i)
					{
						if($i->Tipe_iklan == "text")
						{
							//echo $i->Tipe_iklan;
							$jumtext = $jumtext + 1;
						}
						else if($i->Tipe_iklan == "gambar")
						{
							$jumgbr = $jumgbr + 1;
						}
						else if($i->Tipe_iklan == "video")
						{
							$jumvideo = $jumvideo + 1;
						}
					}?>
						name: '<?php echo 'Text'?>',
						data:[<?php echo $jumtext?>]
					}, {
						name: '<?php echo 'Gambar'?>',
						data:[<?php echo $jumgbr?>]
					},{
						name: '<?php echo 'Video'?>',
						data:[<?php echo $jumvideo?>]
				}]
			});
		}
		
		function transaksi()
		{
			Highcharts.chart('report', {
				chart: {
					renderTo: 'container',
					type: 'column'
				},   
				title: {
					text: 'Tipe Iklan'
				},

				subtitle: {
					text: 'Source: kapoocino.com'
				},
				
				yAxis: {
					title: {
						text: 'Jumlah dari Tipe'
					}
				},
				
				legend: {
					layout: 'vertical',
					align: 'right',
					verticalAlign: 'middle'
				},
				series: [{
				<?php 
					$data['dtrans']= $this->model_admin->getall_dtrans();
					$jumtext = 0;
					$jumgbr = 0;
					$jumvideo = 0;
					foreach($this->model_admin->getall_dtrans() as $i)
					{
						if($i->Tipe_iklan == "text")
						{
							//echo $i->Tipe_iklan;
							$jumtext = $jumtext + 1;
						}
						else if($i->Tipe_iklan == "gambar")
						{
							$jumgbr = $jumgbr + 1;
						}
						else if($i->Tipe_iklan == "video")
						{
							$jumvideo = $jumvideo + 1;
						}
					}?>
						name: '<?php echo 'Text'?>',
						data:[<?php echo $jumtext?>]
					}, {
						name: '<?php echo 'Gambar'?>',
						data:[<?php echo $jumgbr?>]
					},{
						name: '<?php echo 'Video'?>',
						data:[<?php echo $jumvideo?>]
				}]
			});
		}
			//$(document).ready(function() {
			//	ganticb();
				
				/*$('#report').highcharts({
					chart: {
						type: 'column',
						margin: 75,
						options3d: {
							enabled: false,
							alpha: 10,
							beta: 25,
							depth: 70
						}
					},
					title: {
						text: 'Report Text',
						style: {
								fontSize: '18px',
								fontFamily: 'Verdana, sans-serif'
						}
					},
					subtitle: {
					   text: 'Iklan',
					   style: {
								fontSize: '15px',
								fontFamily: 'Verdana, sans-serif'
						}
					},
					plotOptions: {
						column: {
							depth: 25
						}
					},
					credits: {
						enabled: false
					},
					xAxis: {
						categories:  <?php echo json_encode($Tipe_iklan);?>
					},
					exporting: { 
						enabled: false 
					},
					yAxis: {
						title: {
							text: 'Jumlah'
						},
					},
					tooltip: {
						 formatter: function() {
							 return 'The value for <b>' + this.x + '</b> is <b>' + Highcharts.numberFormat(this.y,0) + '</b>, in '+ this.series.name;
						 }
					  },
					series: [{
						name: 'Report Data',
						data: <?php echo json_encode($value);?>,
						shadow : true,
						dataLabels: {
							enabled: true,
							color: '#045396',
							align: 'center',
							formatter: function() {
								 return Highcharts.numberFormat(this.y, 0);
							}, // one decimal
							y: 0, // 10 pixels down from the top
							style: {
								fontSize: '13px',
								fontFamily: 'Verdana, sans-serif'
							}
						}
					}]
				});
			});*/
			function ganticb(){
				if ($('#choose').val() == "tipe_iklan"){
					//console.log("lala");
					//alert("text");
					tipe_iklans();

				}if ($('#choose').val() == "transaksi"){
					//alert("gambar");
					transaksi();
				}
				if ($('#choose').val() == "video"){
					//alert("video");
				}
				
			}
        </script>
	</body>
</html>
