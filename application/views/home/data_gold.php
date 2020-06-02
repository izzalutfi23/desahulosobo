<div class="blog_area fix" style="margin-top: 30px;">
	<div class="container">
		<div class="trending-main">
			<div class="row">
				<div class="col-lg-8 mb-5">
					<div class="single-post">
						<div class="feature-img">
							<aside class="card-img rounded-0">
								<h2 class="widget_title pb-3" style="margin-bottom:5px;">Demografi Berdasarkan Golongan Darah</h2>
								<div>
									<canvas id="data"></canvas>
								</div>
							</aside>
						</div>
						<div class="blog_details" style="padding-top:10px; margin-top:20px;">
							<h2 class="pb-3 pt-3">Tabel Data</h2>
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>No</th>
										<th>NIK</th>
										<th>Nama</th>
										<th>Golongan Darah</th>
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
										<td><?=$data->nama?></td>
										<td><?=$data->gol_d?></td>
									</tr>
								<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>


				<script>
					var ctx = document.getElementById("data").getContext('2d');
					var myChart = new Chart(ctx, {
						type: 'pie',
						data: {
							labels: ["A", "B", "O", "AB"],
							datasets: [{
								label: 'Desa Hulosobo',
								data: [
									<?=$this->db->get_where('penduduk', array('gol_d'=>'A'))->num_rows()?>,
									<?=$this->db->get_where('penduduk', array('gol_d'=>'B'))->num_rows()?>,
									<?=$this->db->get_where('penduduk', array('gol_d'=>'O'))->num_rows()?>,
									<?=$this->db->get_where('penduduk', array('gol_d'=>'AB'))->num_rows()?>
									],
								backgroundColor: [
									'rgba(255, 99, 132, 0.2)',
									'rgba(54, 162, 235, 0.2)',
									'rgba(255, 159, 64, 0.2)',
									'rgba(153, 102, 255, 0.2)'
								],
								borderColor: [
									'rgba(255,99,132,1)',
									'rgba(54, 162, 235, 1)',
									'rgba(255, 159, 64, 1)',
									'rgba(153, 102, 255, 1)'
								],
								borderWidth: 1
							}]
						},
						options: {
							scales: {
								yAxes: [{
									ticks: {
										beginAtZero: true
									}
								}]
							}
						}
					});

				</script>
