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
	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<!-- /.box-header -->
					<div class="box-body">
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama Pemohon</th>
									<th>Email</th>
									<th>Jenis Surat</th>
									<th>Pesan</th>
									<th>Tgl Permohonan</th>
									<th>Status</th>
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
									<td><?=$data->nama?></td>
									<td><?=$data->email?></td>
									<td><?=$data->j_surat?></td>
									<td><?=$data->pesan?></td>
									<td><?=date('d M Y', strtotime($data->tgl))?></td>
									<td>
										<?=($data->status == 1) ? '<a href="#"><button class="btn btn-success">Sudah Jadi</button></a>' : '<a href="#"><button class="btn btn-danger">Belum Jadi</button></a>';?>
									</td>
									<td>
										<a onclick="return confirm('Data akan dihapus!')" href="<?=base_url('dashboard/del_surat/'.$data->id_surat)?>"><button class="btn btn-danger"><i
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
