<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<!--Tabel-->
	<section class="content-header">
		<h1>
			Data Penduduk
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Penduduk</li>
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
							Penduduk</button>
						<!--Tambah-->
						<div class="modal fade" id="modal-default">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title">Tambah Data Penduduk</h4>
									</div>
									<div class="modal-body">
										<form action="<?=base_url('dashboard/add_penduduk')?>" method="post">
											<div class="form-group">
												<label>NIK</label>
												<input type="text" class="form-control" name="nik">
											</div>
											<div class="form-group">
												<label>Nama</label>
												<input type="text" class="form-control" name="nama">
											</div>
											<div class="form-group">
												<label>Tgl Lahir</label>
												<input type="date" class="form-control" name="tgl_lahir">
											</div>
											<div class="form-group">
												<label>Tempat Lahir</label>
												<input type="text" class="form-control" name="tmp_lahir">
											</div>
											<div class="form-group">
												<label>Jenis Kelamin</label><br>
												<input type="radio"  name="j_kel" value="L"> Laki-laki
												<input type="radio"  name="j_kel" value="P"> Perempuan
											</div>
											<div class="form-group">
												<label>Alamat</label>
												<textarea name="alamat" class="form-control"></textarea>
											</div>
											<div class="form-group">
												<label>RW dan RW</label>
												<input type="text" class="form-control" name="rt_rw">
											</div>
											<div class="form-group">
												<label>Kelurahan</label>
												<input type="text" class="form-control" name="kelurahan">
											</div>
											<div class="form-group">
												<label>Kecamatan</label>
												<input type="text" class="form-control" name="kecamatan">
											</div>
											<div class="form-group">
												<label>Agama</label>
												<select name="agama" class="form-control">
													<option value="islam">Islam</option>
													<option value="kristen">Kriten</option>
													<option value="katolik">Katolik</option>
													<option value="hindu">Hindu</option>
													<option value="budha">Budha</option>
													<option value="kongucu">Kongucu</option>
												</select>
											</div>
											<div class="form-group">
												<label>Pendidikan Terakhir</label>
												<select name="pendidikan" class="form-control">
													<option value="tidaksekolah">Tidak Sekolah</option>
													<option value="sd">SD</option>
													<option value="smp">SMP</option>
													<option value="sma">SMA</option>
													<option value="sarjana">Sarjana</option>
												</select>
											</div>
											<div class="form-group">
												<label>Status Perkawinan</label>
												<select name="sts_kawin" class="form-control">
													<option value="b_kw">Belum Kawin</option>
													<option value="kw">Kawin</option>
													<option value="jd">Janda/Duda</option>
												</select>
											</div>
											<div class="form-group">
												<label>Pekerjaan</label>
												<input type="text" class="form-control" name="pekerjaan">
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
									<th>NIK</th>
									<th>PIN</th>
									<th>Nama</th>
									<th>Tgl Lahir</th>
									<th>J. Kel</th>
									<th>Alamat</th>
									<th>Rt/Rw</th>
									<th>Agama</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php
									$no=1;
									foreach($penduduk as $data){
								?>
								<tr>
									<td><?=$no++?></td>
									<td><?=$data->nik?></td>
									<td><?=$data->pin?></td>
									<td><?=$data->nama?></td>
									<td><?=$data->tgl_lahir?></td>
									<td><?=$data->j_kel?></td>
									<td><?=$data->alamat?></td>
									<td><?=$data->rt_rw?></td>
									<td><?=$data->agama?></td>
									<td>
										<button class="btn btn-primary" data-toggle="modal" data-target="#edit"><i
												class="fa fa-edit"></i></button>
										<a href="#"><button class="btn btn-danger"><i
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
