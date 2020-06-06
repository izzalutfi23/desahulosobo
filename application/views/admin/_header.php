<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?=$title?></title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="<?=base_url()?>assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?=base_url()?>assets/admin/bower_components/font-awesome/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="<?=base_url()?>assets/admin/bower_components/Ionicons/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?=base_url()?>assets/admin/dist/css/AdminLTE.min.css">
	<!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="<?=base_url()?>assets/admin/dist/css/skins/_all-skins.min.css">
	<!-- Morris chart -->
	<link rel="stylesheet" href="<?=base_url()?>assets/admin/bower_components/morris.js/morris.css">
	<!-- DataTables -->
	<link rel="stylesheet"
		href="<?=base_url()?>assets/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

	<!-- Google Font -->
	<link rel="stylesheet"
		href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">

		<header class="main-header">
			<!-- Logo -->
			<a href="index2.html" class="logo">
				<!-- mini logo for sidebar mini 50x50 pixels -->
				<span class="logo-mini"><b>A</b>LT</span>
				<!-- logo for regular state and mobile devices -->
				<span class="logo-lg"><b>Admin</b>LTE</span>
			</a>
			<!-- Header Navbar: style can be found in header.less -->
			<nav class="navbar navbar-static-top">
				<!-- Sidebar toggle button-->
				<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
					<span class="sr-only">Toggle navigation</span>
				</a>

				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<!-- User Account: style can be found in dropdown.less -->
						<li class="dropdown user user-menu" style="margin-right: 20px;">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="<?=base_url()?>assets/admin/dist/img/avatar5.png" class="user-image"
									alt="User Image">
								<span class="hidden-xs"><?=$nama->nama?></span>
							</a>
							<ul class="dropdown-menu">
								<!-- User image -->
								<li class="user-header">
									<img src="<?=base_url()?>assets/admin/dist/img/avatar5.png" class="img-circle"
										alt="User Image">

									<p>
										<?=$nama->nama?> - Administrator
									</p>
								</li>
								<!-- Menu Footer-->
								<li class="user-footer">
									<div class="pull-right">
										<a href="<?=base_url('login/logout')?>" class="btn btn-default btn-flat">Sign out</a>
									</div>
								</li>
							</ul>
						</li>
						<!-- Control Sidebar Toggle Button -->
					</ul>
				</div>
			</nav>
		</header>
		<!-- Left side column. contains the logo and sidebar -->
		<aside class="main-sidebar">
			<!-- sidebar: style can be found in sidebar.less -->
			<section class="sidebar">
				<!-- sidebar menu: : style can be found in sidebar.less -->
				<ul class="sidebar-menu" data-widget="tree">
					<li class="header">MAIN NAVIGATION</li>
					<li class="<?=($this->uri->segment(2) == '') ? 'active treeview' : ''?>">
						<a href="<?=base_url('dashboard')?>">
							<i class="fa fa-home"></i> <span>Home</span>
						</a>
					</li>
					<li class="<?=($this->uri->segment(2) == 'penduduk') ? 'active treeview' : ''?>">
						<a href="<?=base_url('dashboard/penduduk')?>">
							<i class="fa fa-users"></i> <span>Penduduk</span>
						</a>
					</li>
					<li class="<?=($this->uri->segment(2) == 'surat') ? 'active treeview' : ''?>">
						<a href="<?=base_url('dashboard/surat')?>">
							<i class="fa fa-book"></i> <span>Surat</span>
						</a>
					</li>
					<li class="<?=($this->uri->segment(2) == 'berita') ? 'active treeview' : ''?>">
						<a href="<?=base_url('dashboard/berita')?>">
							<i class="fa fa-newspaper-o"></i> <span>Berita</span>
						</a>
					</li>
					<li class="<?=($this->uri->segment(2) == 'user') ? 'active treeview' : ''?>">
						<a href="<?=base_url('dashboard/user')?>">
							<i class="fa fa-user"></i> <span>User</span>
						</a>
					</li>
					<li class="<?=($this->uri->segment(2) == 'laporan') ? 'active treeview' : ''?>">
						<a href="<?=base_url('dashboard/laporan')?>">
							<i class="fa fa-sticky-note"></i> <span>Laporan</span>
						</a>
					</li>
				</ul>
			</section>
			<!-- /.sidebar -->
		</aside>
