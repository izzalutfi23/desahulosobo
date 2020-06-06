<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<!--Tabel-->
	<section class="content-header">
		<h1>
			Laporan
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Laporan</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-body">
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama pemohon</th>
									<th>Jenis Surat</th>
                                    <th>Email</th>
                                    <th>Pesan</th>
								</tr>
							</thead>
							<tbody>
								<?php
									$no=1;
									foreach($laporan as $data){
								?>
								<tr>
									<td><?=$no++?></td>
									<td><?=$data->nama?></td>
                                    <td><?=$data->jenis_surat?></td>
                                    <td><?=$data->email?></td>
                                    <td><?=$data->pesan?></td>
									<td>
										<a onclick="return confirm('Data akan dihapus!')"
											href="<?=base_url('dashboard/del_laporan/'.$data->id_laporan)?>"><button
												class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
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
