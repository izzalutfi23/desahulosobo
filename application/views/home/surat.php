<!-- ================ contact section start ================= -->
<section class="blog_area fix" style="margin-top: 30px;">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="contact-title">Permohonan Surat</h2>
			</div>
			<div class="col-lg-8">
				<form class="form-contact contact_form" action="<?=base_url('home/add_surat')?>" method="post">
					<div class="row">
                    <div class="col-12">
							<div class="form-group">
								<input class="form-control" name="nama" type="text" readonly value="<?=$nama->nama?>">
							</div>
                        </div>
						<div class="col-sm-6">
							<div class="form-group">
                            <input class="form-control" name="email" type="email" placeholder="Masukkan Email">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<select name="j_surat" class="form-control">
                                    <option value="sku">Surat Keterangan Usaha</option>
                                    <option value="skm">Surat Keterangan Miskin</option>
                                    <option value="sktm">Surat Keterangan Tidak Mampu</option>
                                    <option value="skk">Surat Keterangan Kelahiran</option>
                                </select>
							</div>
						</div>
                        <div class="col-12">
							<div class="form-group">
								<textarea class="form-control w-100" name="pesan" placeholder="Tinggalkan Pesan" cols="30" rows="9"></textarea>
							</div>
						</div>
					</div>
					<div class="form-group mt-3">
						<button type="submit" class="button button-contactForm boxed-btn">Kirim</button>
					</div>
				</form>
			</div>
			<div class="col-lg-3 offset-lg-1">
				<div class="media contact-info">
					<span class="contact-info__icon"><i class="ti-home"></i></span>
					<div class="media-body">
						<h3>Hulosobo, Kaligesing</h3>
						<p>Kab. Purworejo, Jawa Tengah</p>
					</div>
				</div>
				<div class="media contact-info">
					<span class="contact-info__icon"><i class="ti-tablet"></i></span>
					<div class="media-body">
						<h3>+628675876455</h3>
						<p>Senin-Sabtu 07.00-14.00</p>
					</div>
				</div>
				<div class="media contact-info">
					<span class="contact-info__icon"><i class="ti-email"></i></span>
					<div class="media-body">
						<h3>email@hulosobo.desa.id</h3>
						<p>Kirim email kapan saja!</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ================ contact section end ================= -->

<footer>
	<!-- Footer Start-->
	<div class="footer-area fix" style="padding-top:20px;">
		<div class="container">
			<div class="row d-flex justify-content-between">
				<div class="col-xl-5 col-lg-5 col-md-7 col-sm-12">
					<div class="single-footer-caption">
						<div class="single-footer-caption">
							<!-- logo -->
							<div class="footer-logo">
								<a href="index.html"><img src="<?=base_url()?>assets/image/logo1.png" width="280px"
										height="80px" alt=""></a>
							</div>
							<div class="footer-tittle">
								<div class="footer-pera">
									<p>Website pemerintah Desa Hulosobo bertujuan untuk memberi informasi
										kepada masyarakat secara cepat, akurat, dan menyediakan layanan yang bisa
										diakses secara online.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4  col-sm-6">
					<div class="single-footer-caption mt-60">
						<div class="footer-tittle">
							<h4>Newsletter</h4>
							<p>Heaven fruitful doesn't over les idays appear creeping</p>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
					<div class="single-footer-caption mb-50 mt-60">
						<div class="footer-tittle">
							<h4>Social Media</h4>
						</div>
						<!-- social -->
						<div class="header-social">
							<a href="#"><i class="fab fa-twitter" style="color:#FFF;"></i></a>
							<a href="#"><i class="fab fa-instagram" style="color:#FFF; margin-left: 8px;"></i></a>
							<a href="#"><i class="fab fa-facebook" style="color:#FFF; margin-left: 10px;"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>

<!-- JS here -->

<!-- All JS Custom Plugins Link Here here -->
<script src="<?=base_url()?>assets/home/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="<?=base_url()?>assets/home/js/vendor/jquery-1.12.4.min.js"></script>
<script src="<?=base_url()?>assets/home/js/popper.min.js"></script>
<script src="<?=base_url()?>assets/home/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="<?=base_url()?>assets/home/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="<?=base_url()?>assets/home/js/owl.carousel.min.js"></script>
<script src="<?=base_url()?>assets/home/js/slick.min.js"></script>
<!-- Date Picker -->
<script src="<?=base_url()?>assets/home/js/gijgo.min.js"></script>
<!-- One Page, Animated-HeadLin -->
<script src="<?=base_url()?>assets/home/js/wow.min.js"></script>
<script src="<?=base_url()?>assets/home/js/animated.headline.js"></script>
<script src="<?=base_url()?>assets/home/js/jquery.magnific-popup.js"></script>

<!-- Breaking New Pluging -->
<script src="<?=base_url()?>assets/home/js/jquery.ticker.js"></script>
<script src="<?=base_url()?>assets/home/js/site.js"></script>

<!-- Scrollup, nice-select, sticky -->
<script src="<?=base_url()?>assets/home/js/jquery.scrollUp.min.js"></script>
<script src="<?=base_url()?>assets/home/js/jquery.nice-select.min.js"></script>
<script src="<?=base_url()?>assets/home/js/jquery.sticky.js"></script>

<!-- contact js -->
<script src="<?=base_url()?>assets/home/js/contact.js"></script>
<script src="<?=base_url()?>assets/home/js/jquery.form.js"></script>
<script src="<?=base_url()?>assets/home/js/jquery.validate.min.js"></script>
<script src="<?=base_url()?>assets/home/js/mail-script.js"></script>
<script src="<?=base_url()?>assets/home/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="<?=base_url()?>assets/home/js/plugins.js"></script>
<script src="<?=base_url()?>assets/home/js/main.js"></script>

<!-- Datatables -->
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

<!-- Sweetaler -->
<script src="<?=base_url()?>assets/sweetalert/js/sweetalert.min.js"></script>

<script>
	// Sweet
	$('.sweet').on('click', function (e) {
		e.preventDefault();
		swal({
			title: "Oppss!!!",
			text: "Anda harus login terlebih dahulu",
			type: "warning"
		});
	});

</script>

</body>

</html>
