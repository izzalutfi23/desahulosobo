<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<!--Tabel-->
	<section class="content-header">
		<h1>
			Data User
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">User</li>
		</ol>
	</section>

	<!-- Main content -->
	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<button class="btn btn-primary" data-toggle="modal" data-target="#modal-default">Tambah
							User</button>
						<!--Tambah-->
						<div class="modal fade" id="modal-default">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title">Tambah Data User</h4>
									</div>
									<div class="modal-body">
										<form action="<?=base_url('dashboard/add_user')?>" method="post">
											<div class="form-group">
												<label>Nama</label>
												<input type="text" class="form-control" name="nama">
											</div>
											<div class="form-group">
												<label>Username</label>
												<input type="text" class="form-control" name="username">
											</div>
											<div class="form-group">
												<label>Password</label>
												<input type="text" class="form-control" name="password">
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-default pull-left"
													data-dismiss="modal">Close</button>
												<input type="submit" class="btn btn-primary" name="tambah"
													value="Tambah">
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
						<!-- /.Tambah -->
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama</th>
									<th>Username</th>
									<th>Role</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php
									$no=1;
									foreach($user as $data){
								?>
								<tr>
									<td><?=$no++?></td>
									<td><?=$data->nama?></td>
									<td><?=$data->username?></td>
									<td><?=$data->role?></td>
									<td>
										<a onclick="return confirm('Data akan dihapus!')" href="<?=base_url('dashboard/del_user/'.$data->id_user)?>"><button class="btn btn-danger"><i
													class="fa fa-trash"></i></button></a>
									</td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</section>
	<!--/Tabel-->
</div>
