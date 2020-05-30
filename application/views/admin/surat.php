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
					<div class="box-header">
						<button class="btn btn-primary" data-toggle="modal" data-target="#modal-default">Tambah
							Buku</button>
						<!--Tambah-->
						<div class="modal fade" id="modal-default">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title">Tambah Data Buku</h4>
									</div>
									<div class="modal-body">
										<form action="" method="post">
											<div class="form-group">
												<label>Judul</label>
												<input type="text" class="form-control" name="judul"
													placeholder="Judul">
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
									<th>Rendering engine</th>
									<th>Browser</th>
									<th>Platform(s)</th>
									<th>Engine version</th>
									<th>CSS grade</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Trident</td>
									<td>Internet
										Explorer 4.0
									</td>
									<td>Win 95+</td>
									<td> 4</td>
									<td>
										<button class="btn btn-primary" data-toggle="modal" data-target="#edit"><i
												class="fa fa-edit"></i></button>
										<a href="#"><button class="btn btn-danger"><i
													class="fa fa-trash"></i></button></a>
									</td>
								</tr>
								<tr>
									<td>Gecko</td>
									<td>Firefox 2.0</td>
									<td>Win 98+ / OSX.2+</td>
									<td>1.8</td>
									<td>A</td>
								</tr>
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
