<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!--/Header-->
	<!--Home-->
	<section class="content-header">
		<h1>
			Dashboard
			<small>Control panel</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Dashboard</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<!-- Small boxes (Stat box) -->
		<div class="row">
			<div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-aqua">
					<div class="inner">
						<h3><?=$this->db->get('penduduk')->num_rows()?></h3>

						<p>Penduduk</p>
					</div>
					<div class="icon">
						<i style="font-size: 80px;" class="fa fa-users"></i>
					</div>
					<a href="<?=base_url('dashboard/penduduk')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<!-- ./col -->
			<div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-green">
					<div class="inner">
						<h3><?=$this->db->get('surat')->num_rows()?></h3>

						<p>Surat</p>
					</div>
					<div class="icon">
						<i style="font-size: 80px;" class="fa fa-book"></i>
					</div>
					<a href="<?=base_url('dashboard/surat')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<!-- ./col -->
			<div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-yellow">
					<div class="inner">
						<h3><?=$this->db->get('berita')->num_rows()?></h3>

						<p>Berita</p>
					</div>
					<div class="icon">
						<i style="font-size: 80px;" class="fa fa-newspaper-o"></i>
					</div>
					<a href="<?=base_url('dashboard/berita')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<!-- ./col -->
			<div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-red">
					<div class="inner">
						<h3><?=$this->db->get('user')->num_rows()?></h3>

						<p>User</p>
					</div>
					<div class="icon">
						<i style="font-size: 80px;" class="fa fa-user"></i>
					</div>
					<a href="<?=base_url('dashboard/user')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<!-- ./col -->
		</div>
	</section>
	<!-- /.content -->
	<!--Footer-->
</div>
<footer class="main-footer">
	<div class="pull-right hidden-xs">
		<b>Version</b> 2.4.0
	</div>
	<strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
	reserved.
</footer>
