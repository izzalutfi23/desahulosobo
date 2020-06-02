<!doctype html>
<html class="no-js" lang="zxx">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title><?=$title?></title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="manifest" href="site.webmanifest">
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

	<!-- CSS here -->
	<link rel="stylesheet" href="<?=base_url()?>assets/home/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/home/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/home/css/ticker-style.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/home/css/flaticon.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/home/css/slicknav.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/home/css/animate.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/home/css/magnific-popup.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/home/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/home/css/themify-icons.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/home/css/slick.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/home/css/nice-select.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/home/css/style.css">

	<!-- sweet alert framework -->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/sweetalert/css/sweetalert.css">

	<!-- Datatables -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">

	<style type="text/css">
		.alert-info-alt { border-color: #B4E1E4;background: #81c7e1;color: #fff; }
	</style>
	
	<script type="text/javascript" src="<?=base_url()?>assets/home/js/Chart.js"></script>
</head>

<body>

	<!-- Preloader Start -->
	<!-- <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div> -->
	<!-- Preloader Start -->

	<header>
		<!-- Header Start -->
		<div class="header-area">
			<div class="main-header ">
				<div class="header-top black-bg d-none d-md-block">
					<div class="container">
						<div class="col-xl-12">
							<div class="row d-flex justify-content-between align-items-center">
								<div class="header-info-left">
									<ul>
										<li><img src="<?=base_url()?>assets/home/img/icon/header_icon1.png" alt="">34ºc, Berawan </li>
										<li><img src="assets/img/icon/header_icon1.png" alt=""><?=date('D, d M Y')?>
										</li>
									</ul>
								</div>
								<div class="header-info-right">
									<ul class="header-social">
										<li><a href="#"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#"><i class="fab fa-instagram"></i></a></li>
										<li> <a href="#"><i class="fab fa-facebook"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="header-mid d-none d-md-block">
					<div class="container">
						<div class="row d-flex align-items-center">
							<!-- Logo -->
							<div class="col-xl-3 col-lg-3 col-md-3">
								<div class="logo">
									<a href="<?=base_url('home')?>"><img src="<?=base_url()?>assets/image/logo1.png"
											width="280px" height="80px" alt=""></a>
								</div>
							</div>
							<div class="col-xl-9 col-lg-9 col-md-9">
								<div class="header-banner f-right ">
									<img src="<?=base_url()?>assets/home/img/hero/header_card.jpg" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="header-bottom header-sticky">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-xl-10 col-lg-10 col-md-12 header-flex">
								<!-- sticky -->
								<div class="sticky-logo">
									<a href="<?=base_url('home')?>"><img src="<?=base_url()?>assets/image/logo1.png"
											width="200px" height="60px" alt=""></a>
								</div>
								<!-- Main-menu -->
								<div class="main-menu d-none d-md-block">
									<nav>
										<ul id="navigation">
											<li><a href="<?=base_url('home')?>">Home</a></li>
											<li><a href="#">Pemerintah Desa</a>
												<ul class="submenu">
													<li><a href="<?=base_url('home/newsdetail/visi-dan-misi-desa-hulosobo.html')?>">Visi dan Misi</a></li>
													<li><a href="<?=base_url('home/struktur')?>">Pemerintah Desa</a></li>
													<li><a href="<?=base_url('home/newsdetail/badan-musyawarah-desa-hulosobo.html')?>">Badan Permusyawaratan Desa</a></li>
												</ul>
											</li>
											<li><a href="#">Data Desa</a>
												<ul class="submenu">
													<li><a href="<?=base_url('home/data')?>">Data Pendidikan dalam KK</a></li>
													<li><a href="blog.html">Data Pendidikan ditempuh</a></li>
													<li><a href="single-blog.html">Data Pekerjaan</a></li>
													<li><a href="details.html">Data Jenis Kelamin</a></li>
													<li><a href="single-blog.html">Data Golongan Darah</a></li>
													<li><a href="details.html">Data Kelompok Umur</a></li>
													<li><a href="details.html">Data Perkawinan</a></li>
												</ul>
											</li>
											<li><a href="contact.html" class="sweet">Surat Online</a></li>
											<li><a href="<?=base_url('home/berita')?>">Berita</a></li>
											<li><a href="<?=base_url('home/kontak')?>">Kontak</a></li>
											<?php
												if($this->session->userdata('user')){
											?>
											<li><a href="#"><?=$nama->nama?></a>
												<ul class="submenu">
													<li><a href="<?=base_url('home/profil')?>">Lihat Profil</a></li>
													<li><a href="<?=base_url('login/logout')?>">Logout</a></li>
												</ul>
											</li>
											<?php } ?>

										</ul>
									</nav>
								</div>
							</div>
							<div class="col-xl-2 col-lg-2 col-md-4">
								<div class="header-right-btn f-right d-none d-lg-block">
									<i class="fas fa-search special-tag"></i>
									<div class="search-box">
										<form action="<?=base_url('home/berita')?>" method="post">
											<input type="text" name="cari" placeholder="Search">
										</form>
									</div>
								</div>
							</div>
							<!-- Mobile Menu -->
							<div class="col-12">
								<div class="mobile_menu d-block d-md-none"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Header End -->
	</header>
