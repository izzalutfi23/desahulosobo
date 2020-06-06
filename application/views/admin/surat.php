<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<!--Tabel-->
	<section class="content-header">
		<h1>
			Data Surat
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Surat</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<button class="btn btn-primary" data-toggle="modal" data-target="#modal-default">Tambah</button>
						<!--Tambah-->
						<div class="modal fade" id="modal-default">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title">Tambah Jenis Surat</h4>
									</div>
									<div class="modal-body">
										<form action="<?=base_url('dashboard/add_jsurat')?>" method="post">
											<div class="form-group">
												<label>Jenis Surat</label>
												<input type="text" class="form-control" name="jenis_surat">
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
									<th>Jenis Surat</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<?php
									$no=1;
									foreach($surat as $data){
								?>
								<tr>
									<td><?=$no++?></td>
									<td><?=$data->jenis_surat?></td>
									<td>
										<button class="btn btn-primary" data-toggle="modal"
											data-target="#edit<?=$data->id_surat?>"><i class="fa fa-edit"></i></button>
										<a onclick="return confirm('Data akan dihapus!')"
											href="<?=base_url('dashboard/del_surat/'.$data->id_surat)?>"><button
												class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
									</td>
								</tr>
								<!--Edit-->
								<div class="modal fade" id="edit<?=$data->id_surat?>">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"
													aria-label="Close">
													<span aria-hidden="true">&times;</span></button>
												<h4 class="modal-title">Edit Jenis Surat</h4>
											</div>
											<div class="modal-body">
												<form action="<?=base_url('dashboard/edit_jsurat')?>" method="post">
													<div class="form-group">
														<label>Jenis Surat</label>
														<input type="hidden" name="id_surat" value="<?=$data->id_surat?>">
														<input type="text" class="form-control" value="<?=$data->jenis_surat?>" name="jenis_surat">
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
								<!-- /.Edit -->
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
