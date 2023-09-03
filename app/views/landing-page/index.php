<nav class="navbar navbar-expand-lg navbar-dark site_navbar bg-dark site-navbar-light" id="site-navbar">
	<div class="container">
		<a class="navbar-brand" href="index.html">Ekstrakurikuler</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#site-nav" aria-controls="site-nav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="oi oi-menu"></span>
		</button>

		<div class="collapse navbar-collapse" id="site-nav">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active"><a href="<?=BASEURL;?>" class="nav-link">Home</a></li>
				<li class="nav-item"><a href="<?= BASEURL; ?>/about" class="nav-link">Tentang</a></li>
				<li class="nav-item"><a href="ekskul.html" class="nav-link">Ekskul</a></li>
				<li class="nav-item"><a href="galeri.html" class="nav-link">Galeri</a></li>
				<li class="nav-item"><a href="berita.html" class="nav-link">Berita</a></li>
			</ul>
			<a href="" target="_blank" class="btn btn-primary daftar" data-toggle="modal" data-target="#reservationModal">Daftar</a>
		</div>
	</div>
</nav>
<!-- END nav -->

<section id="section-home">
	<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
			<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="<?=BASEURL; ?>/landing-page/images/carousel/Ekskul-1.jpg" class="d-block w-100" alt="carousel">
				<div class="carousel-caption d-none d-md-block">
					<h2 class="text-white">First slide label</h2>
					<p>Some representative placeholder content for the first slide.</p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="<?=BASEURL; ?>/landing-page/images/carousel/Ekskul-2.jpg" class="d-block w-100" alt="carousel">
				<div class="carousel-caption d-none d-md-block">
					<h2 class="text-white">Second slide label</h2>
					<p>Some representative placeholder content for the second slide.</p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="<?=BASEURL; ?>/landing-page/images/carousel/Ekskul-3.jpg" class="d-block w-100" alt="carousel">
				<div class="carousel-caption d-none d-md-block">
					<h2 class="text-white">Third slide label</h2>
					<p>Some representative placeholder content for the third slide.</p>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</section>
<!-- END section -->

<section class="site-section" id="section-tentang">
	<div class="container">
		<div class="row">
			<div class="col-md-5 site-animate mb-5">
				<h2 class="site-primary-title display-4">Selamat Datang</h2>
				<p>Website ini tentang seluruh Ekstrakurikuler yang ada di SMK NEGERI 4 Kuningan.</p>

				<p class="mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut, porro? Eveniet voluptatem assumenda recusandae voluptas sit ipsa saepe vel sed praesentium magni dicta reprehenderit earum provident, nesciunt sint atque consectetur quisquam
				iure illo facilis aspernatur aperiam! Placeat repellat voluptatum sint vitae rem sunt laborum. Ipsum, ipsa nostrum. Dignissimos, veritatis ipsam.</p>
				<p><a href="tentang.html" class="btn btn-secondary btn-lg">Selengkapnya</a></p>
			</div>
			<div class="col-md-1"></div>
			<div class="col-md-6 site-animate img" data-animate-effect="fadeInRight">
				<img src="<?=BASEURL; ?>/landing-page/images/tentang/Ekskul-1.jpg" alt="Foto-tentang" class="img-fluid">
			</div>
		</div>
	</section>
	<!-- END section -->


	<section class="site-section bg-light" id="section-ekskul">
		<div class="container">

			<div class="row">
				<div class="col-md-12 text-center mb-5 site-animate">
					<h4 class="site-sub-title">Semua Ekstrakurikuler</h4>
					<h2 class="display-4">Ekskul SMK NEGERi 4 Kuningan</h2>
					<div class="row justify-content-center">
						<div class="col-md-7">
							<p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus minima voluptate vel dignissimos!</p>
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="owl-carousel site-owl">

						<div class="item">
							<div class="media d-block mb-4 text-center site-media site-animate border-0">
								<img src="<?=BASEURL; ?>/landing-page/images/ekskul/Osis.jpg" alt="Foto-ekskul" class="img-fluid">
								<div class="media-body p-md-5 p-4">
									<h5 class="mt-0 h4">OSIS</h5>
									<p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam omnis ut accusamus voluptatibus nulla! Voluptas!</p>

									<p class="mb-0"><a href="detail-ekskul.html" class="btn btn-primary btn-sm">Selengkapnya</a></p>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="media d-block mb-4 text-center site-media site-animate border-0">
								<img src="<?=BASEURL; ?>/landing-page/images/ekskul/Mpk.jpg" alt="Foto-ekskul" class="img-fluid">
								<div class="media-body p-md-5 p-4">
									<h5 class="mt-0 h4">MPK </h5>
									<p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus officiis laboriosam qui adipisci possimus vel?</p>

									<p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Selengkapnya</a></p>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="media d-block mb-4 text-center site-media site-animate border-0">
								<img src="<?=BASEURL; ?>/landing-page/images/ekskul/Pmr.jpg" alt="Foto-ekskul" class="img-fluid">
								<div class="media-body p-md-5 p-4">
									<h5 class="mt-0 h4">PMR</h5>
									<p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem illum quisquam dolor explicabo impedit. Error.</p>

									<p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Selengkapnya</a></p>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="media d-block mb-4 text-center site-media site-animate border-0">
								<img src="<?=BASEURL; ?>/landing-page/images/ekskul/Rohis.jpg" alt="Foto-ekskul" class="img-fluid">
								<div class="media-body p-md-5 p-4">
									<h5 class="mt-0 h4">Rohis</h5>
									<p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam omnis ut accusamus voluptatibus nulla! Voluptas!</p>

									<p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Selengkapnya</a></p>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="media d-block mb-4 text-center site-media site-animate border-0">
								<img src="<?=BASEURL; ?>/landing-page/images/ekskul/Silat.jpg" alt="Foto-ekskul" class="img-fluid">
								<div class="media-body p-md-5 p-4">
									<h5 class="mt-0 h4">Pencak Silat</h5>
									<p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam omnis ut accusamus voluptatibus nulla! Voluptas!</p>

									<p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Selengkapnya</a></p>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="media d-block mb-4 text-center site-media site-animate border-0">
								<img src="<?=BASEURL; ?>/landing-page/images/ekskul/Pramuka.jpg" alt="Foto-ekskul" class="img-fluid">
								<div class="media-body p-md-5 p-4">
									<h5 class="mt-0 h4">Pramuka</h5>
									<p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam omnis ut accusamus voluptatibus nulla! Voluptas!</p>

									<p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Selengkapnya</a></p>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="media d-block mb-4 text-center site-media site-animate border-0">
								<img src="images/ekskul/Liputan-4.jpg" alt="Foto-ekskul" class="img-fluid">
								<div class="media-body p-md-5 p-4">
									<h5 class="mt-0 h4">Liputan 4</h5>
									<p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam omnis ut accusamus voluptatibus nulla! Voluptas!</p>

									<p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Selengkapnya</a></p>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="media d-block mb-4 text-center site-media site-animate border-0">
								<img src="images/ekskul/Paskibra.jpg" alt="Foto-ekskul" class="img-fluid">
								<div class="media-body p-md-5 p-4">
									<h5 class="mt-0 h4">Paskibra</h5>
									<p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam omnis ut accusamus voluptatibus nulla! Voluptas!</p>

									<p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Selengkapnya</a></p>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="media d-block mb-4 text-center site-media site-animate border-0">
								<img src="images/ekskul/Marching-band.jpg" alt="Foto-ekskul" class="img-fluid">
								<div class="media-body p-md-5 p-4">
									<h5 class="mt-0 h4">Marching Band</h5>
									<p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam omnis ut accusamus voluptatibus nulla! Voluptas!</p>

									<p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Selengkapnya</a></p>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="media d-block mb-4 text-center site-media site-animate border-0">
								<img src="images/ekskul/Futsal.jpg" alt="Foto-ekskul" class="img-fluid">
								<div class="media-body p-md-5 p-4">
									<h5 class="mt-0 h4">Futsal</h5>
									<p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam omnis ut accusamus voluptatibus nulla! Voluptas!</p>

									<p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Selengkapnya</a></p>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="media d-block mb-4 text-center site-media site-animate border-0">
								<img src="images/ekskul/Volly_ball.jpg" alt="Foto-ekskul" class="img-fluid">
								<div class="media-body p-md-5 p-4">
									<h5 class="mt-0 h4">Volly Ball</h5>
									<p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam omnis ut accusamus voluptatibus nulla! Voluptas!</p>

									<p class="mb-0"><a href="#" class="btn btn-primary btn-sm">Selengkapnya</a></p>
								</div>
							</div>
						</div>

					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- END section -->

	<section class="site-section" id="section-galeri">
		<div class="container">
			<div class="row site-custom-gutters">

				<div class="col-md-12 text-center mb-5 site-animate">
					<h2 class="display-4">Galeri</h2>
					<div class="row justify-content-center">
						<div class="col-md-7">
							<p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate, doloremque!</p>
						</div>
					</div>
				</div>

				<div class="col-md-4 site-animate">
					<a href="images/galeri/Osis.jpg" class="site-thumbnail image-popup">
						<img src="images/galeri/Osis.jpg" alt="Free Template by colorlib.com" class="img-fluid">
					</a>
				</div>
				<div class="col-md-4 site-animate">
					<a href="images/galeri/Mpk.jpg" class="site-thumbnail image-popup">
						<img src="images/galeri/Mpk.jpg" alt="Free Template by colorlib.com" class="img-fluid">
					</a>
				</div>
				<div class="col-md-4 site-animate">
					<a href="images/galeri/Pmr.jpg" class="site-thumbnail image-popup">
						<img src="images/galeri/Pmr.jpg" alt="Free Template by colorlib.com" class="img-fluid">
					</a>
				</div>

				<div class="col-md-4 site-animate">
					<a href="images/galeri/Rohis.jpg" class="site-thumbnail image-popup">
						<img src="images/galeri/Rohis.jpg" alt="Free Template by colorlib.com" class="img-fluid">
					</a>
				</div>
				<div class="col-md-4 site-animate">
					<a href="images/galeri/Silat.jpg" class="site-thumbnail image-popup">
						<img src="images/galeri/Silat.jpg" alt="Free Template by colorlib.com" class="img-fluid">
					</a>
				</div>
				<div class="col-md-4 site-animate">
					<a href="images/galeri/Pramuka.jpg" class="site-thumbnail image-popup">
						<img src="images/galeri/Pramuka.jpg" alt="Free Template by colorlib.com" class="img-fluid">
					</a>
				</div>

			</div>
			<br>
			<br>
			<center>
				<a href="galeri.html" class="h3 text-primary">Selengkapnya</a>
			</center>
		</div>
	</section>
	<!-- END section -->

	<section class="site-section bg-light" id="section-berita">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center mb-5">
					<h2 class="display-4">Berita</h2>
					<div class="row justify-content-center">
						<div class="col-md-7">
							<p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum itaque quam eius cupiditate sint.</p>
						</div>
					</div>
				</div>

				<div class="col-md-12 text-center">

					<div class="tab-content text-left">
						<div class="row">
							<div class="col-md-6 site-animate">
								<div class="media menu-item">
									<img class="mr-3" src="images/berita/Osis.jpg" class="img-fluid" alt="foto-berita">
									<div class="media-body">
										<h5 class="mt-0">Kegiatan Sertijab OSIS</h5>
										<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
										<a href="artikel.html" class="text-primary">Selengkapnya</a>
									</div>
								</div>

								<div class="media menu-item">
									<img class="mr-3" src="images/berita/Mpk.jpg" class="img-fluid" alt="foto-berita">
									<div class="media-body">
										<h5 class="mt-0">Kegiatan Sertijab MPK</h5>
										<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
										<a href="#" class="text-primary">Selengkapnya</a>
									</div>
								</div>

								<div class="media menu-item">
									<img class="mr-3" src="images/berita/Pmr.jpg" class="img-fluid" alt="foto-berita">
									<div class="media-body">
										<h5 class="mt-0">Kegiatan Pelantikan PMR</h5>
										<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
										<a href="#" class="text-primary">Selengkapnya</a>
									</div>
								</div>

							</div>
							<div class="col-md-6 site-animate">
								<div class="media menu-item">
									<img class="mr-3" src="images/berita/Rohis.jpg" class="img-fluid" alt="foto-berita">
									<div class="media-body">
										<h5 class="mt-0">Demonstrasi Ekskul Rohis</h5>
										<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
										<a href="#" class="text-primary">Selengkapnya</a>
									</div>
								</div>

								<div class="media menu-item">
									<img class="mr-3" src="images/berita/Silat.jpg" class="img-fluid" alt="foto-berita">
									<div class="media-body">
										<h5 class="mt-0">Demonstrasi Ekskul Pencak Silat</h5>
										<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
										<a href="#" class="text-primary">Selengkapnya</a>
									</div>
								</div>

								<div class="media menu-item">
									<img class="mr-3" src="images/berita/Pramuka.jpg" class="img-fluid" alt="foto-berita">
									<div class="media-body">
										<h5 class="mt-0">Kegiatan Pelantikan Pramuka</h5>
										<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
										<a href="#" class="text-primary">Selengkapnya</a>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>

			</div>
		</div>
	</section>
	<!-- END section -->

	<!-- Modal -->
	<div class="modal fade" id="reservationModal" tabindex="-1" role="dialog" aria-labelledby="reservationModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<div class="row">
						<div class="col-lg-12">
							<div class="bg-image" style="background-image: url(images/carousel/Ekskul-2.jpg);"></div>
						</div>
						<div class="col-lg-12 p-5">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<small>CLOSE </small><span aria-hidden="true">&times;</span>
							</button>
							<h1 class="mb-4">Formulir Pendaftaran</h1>
							<form action="#" method="post">
								<div class="row">
									<div class="col-md-12 form-group">
										<label>Nama Lengkap</label>
										<input type="text" class="form-control">
									</div>
								</div>

								<div class="row">
									<div class="col-md-6 form-group">
										<label>Tempat Lahir</label>
										<input type="text" class="form-control">
									</div>
									<div class="col-md-6 form-group">
										<label>Tanggal Lahir</label>
										<input type="date" class="form-control">
									</div>
								</div>

								<div class="row">
									<div class="col-md-6 form-group">
										<label>Ekstrakurikuler</label>
										<select name="" class="form-control">
											<option value="">Pilih Ekstrakurikuler</option>
											<option value="">OSIS</option>
											<option value="">MPK</option>
											<option value="">Rohis</option>
											<option value="">Pencak Silat</option>
											<option value="">Pramuka</option>
											<option value="">Liputan 4</option>
											<option value="">Paskibra</option>
											<option value="">Marching Band</option>
											<option value="">Futsal</option>
											<option value="">Volly Ball</option>
										</select>
									</div>
									<div class="col-md-6 form-group">
										<label>No. Whatsapp</label>
										<input type="text" class="form-control">
									</div>
								</div>

								<div class="row">
									<div class="col-md-12 form-group">
										<label>Alasan Masuk</label>
										<textarea class="form-control" cols="30" rows="7"></textarea>
									</div>
								</div>

								<div class="row">
									<div class="col-md-12 form-group">
										<input type="submit" class="btn btn-primary btn-lg btn-block" value="Daftar">
									</div>
								</div>

							</form>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- END Modal -->

	<footer class="site-footer site-bg-dark site-section">
		<div class="container">
			<div class="row mb-5">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-4 site-animate">
							<h2 class="site-heading-2">Tentang</h2>
							<p>Website ini tentang informasi untuk semua ekstrakurikuler yang ada di SMKN 4 Kuningan.</p>
						</div>
						<div class="col-md-2"></div>
						<div class="col-md-6 site-animate">
							<div class="site-footer-widget mb-4">
								<h2 class="site-heading-2">Hubungi Kami</h2>
								<ul class="list-unstyled">
									<li class="py-2 d-block"><span class="ion-ios-location"></span> Jl. Puter Sari Cikeusik No.73, Cikeusik, Cidahu, Kabupaten Kuningan, Jawa Barat 45595, Indonesia </li>
									<li class="py-2 d-block"><span class="ion-ios-telephone"></span> (0231) 8666972 </li>
									<li class="py-2 d-block"><span class="ion-email"></span> ekskul@smkn4kng.sch.id </li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row mb-5">
				<div class="col-lg-12">
					<div class="row">
						<div class="col-lg-4 site-animate">
							<h2 class="site-heading-2">Maps</h2>
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.4470844155862!2d108.6811145141452!3d-6.956470770038557!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f0e97e9beddcb%3A0x2fd17d5f9eaf9d66!2sSMK%20N%204%20Kuningan!5e0!3m2!1sid!2sid!4v1611820455471!5m2!1sid!2sid"
							width="300" height="150" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
						</div>
						<div class="col-lg-2"></div>
						<div class="col-lg-6 site-animate">
							<div class="site-footer-widget mb-4">
								<h2 class="site-heading-2">Ekstrakurikuler</h2>
								<div class="row">
									<div class="col-sm-4">
										<ul class="list-unstyled">
											<li><a href="#" class="py-2 d-block">OSIS</a></li>
											<li><a href="#" class="py-2 d-block">MPK</a></li>
											<li><a href="#" class="py-2 d-block">PMR</a></li>
											<li><a href="#" class="py-2 d-block">Rohis</a></li>
										</ul>
									</div>
									<div class="col-sm-4">
										<ul class="list-unstyled">
											<li><a href="#" class="py-2 d-block">Pencak Silat</a></li>
											<li><a href="#" class="py-2 d-block">Marching Band</a></li>
											<li><a href="#" class="py-2 d-block">Liputan 4</a></li>
											<li><a href="#" class="py-2 d-block">Paskibra</a></li>
										</ul>
									</div>
									<div class="col-sm-4">
										<ul class="list-unstyled">
											<li><a href="#" class="py-2 d-block">Pramuka</a></li>
											<li><a href="#" class="py-2 d-block">Futsal</a></li>
											<li><a href="#" class="py-2 d-block">Volly Ball</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row site-animate">
				<div class="col-md-12 text-center">
					<div class="site-footer-widget mb-4">
						<ul class="site-footer-social list-unstyled ">
							<li class="site-animate"><a href="#"><span class="icon-youtube"></span></a></li>
							<li class="site-animate"><a href="#"><span class="icon-facebook"></span></a></li>
							<li class="site-animate"><a href="#"><span class="icon-instagram"></span></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-12 text-center">
					<p>&copy; Copyright &copy;
						<script>
							document.write(new Date().getFullYear());
						</script> Ekstrakurikuler | By with <i class="icon-heart"></i> Ali Abdurohman</a>
					</p>
				</div>
			</div>
		</div>
	</footer>

	<!-- loader -->
	<div id="site-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


