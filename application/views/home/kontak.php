<!-- ================ contact section start ================= -->
<section class="blog_area fix" style="margin-top: 30px;">
	<div class="container">
		<div class="d-none d-sm-block mb-5 pb-4">
			<div id="map" style="height: 480px; position: relative; overflow: hidden;">
				<iframe
					src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31626.926511081092!2d110.06411846870041!3d-7.7509686424612045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7aeef262f565ab%3A0x5027a76e3555fb0!2sHulosobo%2C%20Kaligesing%2C%20Kabupaten%20Purworejo%2C%20Jawa%20Tengah%2C%20Indonesia!5e0!3m2!1sid!2sbn!4v1590700431063!5m2!1sid!2sbn"
					width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
					tabindex="0"></iframe>
			</div>

		</div>


		<div class="row">
			<div class="col-12">
				<h2 class="contact-title">Get in Touch</h2>
			</div>
			<div class="col-lg-8">
				<form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm"
					novalidate="novalidate">
					<div class="row">
						<div class="col-12">
							<div class="form-group">
								<textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'"
									placeholder=" Enter Message"></textarea>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<input class="form-control valid" name="name" id="name" type="text"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'"
									placeholder="Enter your name">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<input class="form-control valid" name="email" id="email" type="email"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'"
									placeholder="Email">
							</div>
						</div>
						<div class="col-12">
							<div class="form-group">
								<input class="form-control" name="subject" id="subject" type="text"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'"
									placeholder="Enter Subject">
							</div>
						</div>
					</div>
					<div class="form-group mt-3">
						<button type="submit" class="button button-contactForm boxed-btn">Send</button>
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

<script>
	// Data Penduduk
	var ctx = document.getElementById("myChart").getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: ["Laki-laki", "Perempuan", "Total"],
			datasets: [{
				label: 'Desa Hulosobo',
				data: [12, 19, 3],
				backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 159, 64, 0.2)'
				],
				borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 159, 64, 1)'
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

	$(document).ready(function () {
		$('#example').DataTable();
	});

</script>

</body>

</html>
