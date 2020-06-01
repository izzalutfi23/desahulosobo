<div class="blog_area fix" style="margin-top: 30px;">
	<div class="container">
		<div class="trending-main">
			<div class="row">
				<div class="col-lg-8 mb-5">
					<div class="blog_left_sidebar">
						<?php
							foreach($berita as $data){
						?>
						<article class="blog_item">
							<div class="blog_item_img">
								<img class="card-img rounded-0"
									src="<?=base_url()?>assets/image/berita/<?=$data->foto?>" alt="">
								<a href="#" class="blog_item_date">
									<h3><?=date('d', strtotime($data->tgl))?></h3>
									<p><?=date('M', strtotime($data->tgl))?></p>
								</a>
							</div>

							<div class="blog_details">
								<a class="d-inline-block" href="<?=base_url('home/newsdetail/'.$data->slug)?>">
									<h2><?=$data->judul?></h2>
								</a>
								<p><?=substr($data->isi, 0, 300)?>...</p>
								<ul class="blog-info-link">
									<li><a href="#"><i class="fa fa-user"></i> <?=$data->penulis?></a></li>
									<li><a href="#"><i class="fa fa-clock"></i> <?=date('d M Y', strtotime($data->tgl))?></a></li>
								</ul>
							</div>
						</article>
						<?php } ?>

						<?=$this->pagination->create_links();?>


					</div>
				</div>
