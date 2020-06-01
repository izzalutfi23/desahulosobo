<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<!--Tabel-->
	<section class="content-header">
		<h1>
			Data Berita
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Berita</li>
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
							Berita</button>
						<!--Tambah-->
						<div class="modal fade" id="modal-default">
							<div class="modal-dialog modal-lg">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title">Tambah Data Berita</h4>
									</div>
									<div class="modal-body">
										<form action="<?=base_url('dashboard/add_berita')?>"
											enctype="multipart/form-data" method="post">
											<div class="form-group">
												<label>Judul</label>
												<input type="text" class="form-control" required name="judul">
											</div>
											<div class="form-group">
												<label>Foto</label>
												<input type="file" class="form-control" required name="foto">
											</div>
											<div class="form-group">
												<label>Isi</label>
												<textarea id="editor1" name="isi" required rows="10"
													cols="80"></textarea>
											</div>
											<div class="form-group">
												<label>Penulis</label>
												<input type="text" class="form-control" value="<?=$nama->nama?>" required name="penulis">
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-default pull-left"
													data-dismiss="modal">Close</button>
												<input type="submit" class="btn btn-primary" required name="tambah"
													value="Tambah">
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
						<!-- /Tambah -->
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>No</th>
									<th>Judul Berita</th>
									<th>Foto</th>
									<th>Isi</th>
									<th>Penulis</th>
									<th>Tanggal</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php
									$no=1;
									foreach($berita as $data){
								?>
								<tr>
									<td><?=$no++?></td>
									<td><?=$data->judul?></td>
									<td><img src="<?=base_url('assets/image/berita/'.$data->foto)?>" width="80px"></td>
									<td><?=substr($data->isi, 0, 30)?>...</td>
									<td><?=$data->penulis?></td>
									<td><?=date('d M Y', strtotime($data->tgl))?></td>
									<td>
										<button class="btn btn-primary" data-toggle="modal"
											data-target="#edit<?=$data->id_berita?>"><i class="fa fa-edit"></i></button>
										<a onclick="return confirm('Data akan dihapus!')" href="<?=base_url('dashboard/del_berita/'.$data->id_berita)?>"><button class="btn btn-danger"><i
													class="fa fa-trash"></i></button></a>
									</td>
								</tr>
								<!--Edit-->
								<div class="modal fade" id="edit<?=$data->id_berita?>">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"
													aria-label="Close">
													<span aria-hidden="true">&times;</span></button>
												<h4 class="modal-title">Edit Data Berita</h4>
											</div>
											<div class="modal-body">
												<form action="<?=base_url('dashboard/edit_berita')?>"
													enctype="multipart/form-data" method="post">
													<div class="form-group">
														<label>Judul</label>
														<input type="hidden" name="id_berita"
															value="<?=$data->id_berita?>">
														<input type="text" class="form-control"
															value="<?=$data->judul?>" name="judul">
													</div>
													<div class="form-group">
														<label>Foto</label>
														<input type="file" class="form-control" name="foto">
													</div>
													<div class="form-group">
														<label>Isi</label>
														<textarea name="isi" rows="10" style="width:100%;"><?=$data->isi?></textarea>
													</div>
													<div class="form-group">
														<label>Penulis</label>
														<input type="text" class="form-control"
															value="<?=$data->penulis?>" name="penulis">
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-default pull-left"
															data-dismiss="modal">Close</button>
														<input type="submit" class="btn btn-primary" required
															name="edit" value="Edit">
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
								<!-- /Edit -->
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
