<div class="blog_area fix" style="margin-top: 30px;">
	<div class="container">
		<div class="trending-main">
			<div class="row">
				<div class="col-lg-8 mb-5">
					<div class="single-post">
						<div class="feature-img">
							<img class="card-img rounded-0" src="<?=base_url()?>assets/image/berita/<?=$dberita->foto?>" alt="">
						</div>
						<div class="blog_details">
							<h2><?=$dberita->judul?></h2>
							<ul class="blog-info-link mt-3 mb-4">
								<li><a href="#"><i class="fa fa-user"></i> <?=$dberita->penulis?></a></li>
								<li><a href="#"><i class="fa fa-clock"></i> <?=date('d M Y', strtotime($dberita->tgl))?></a></li>
							</ul>
							<?=$dberita->isi?>
						</div>
					</div>
				</div>
