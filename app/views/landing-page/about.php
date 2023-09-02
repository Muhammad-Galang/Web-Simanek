    <nav class="navbar navbar-expand-lg navbar-dark site_navbar bg-dark site-navbar-light" id="site-navbar">
        <div class="container">
            <a class="navbar-brand" href="<?=BASEURL;?>">Ekstrakurikuler</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#site-nav" aria-controls="site-nav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="oi oi-menu"></span>
          </button>

          <div class="collapse navbar-collapse" id="site-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="<?=BASEURL;?>" class="nav-link">Home</a></li>
                <li class="nav-item active"><a href="#section-tentang" class="nav-link">Tentang</a></li>
                <li class="nav-item"><a href="ekskul.html" class="nav-link">Ekskul</a></li>
                <li class="nav-item"><a href="galeri.html" class="nav-link">Galeri</a></li>
                <li class="nav-item"><a href="berita.html" class="nav-link">Berita</a></li>
            </ul>
            <a href="" target="_blank" class="btn btn-primary daftar" data-toggle="modal" data-target="#reservationModal">Daftar</a>
        </div>
    </div>
</nav>
<!-- END nav -->

<!-- Intro -->
<section id="section-tentang">
    <div class="intro intro-single site-cover bg-image" style="background-image: url(images/carousel/Ekskul-1.jpg);" id="section-home">
        <div class="overlay-mf"></div>
        <div class="intro-content display-table">
            <div class="table-cell">
                <div class="container">
                    <h2 class="intro-title mb-4">Tentang</h2>
                    <ol class="breadcrumb d-flex justify-content-center">
                        <li class="breadcrumb-item">
                            <a href="<?=BASEURL;?>">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Tentang</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END Intro -->

<!-- Content -->
<section class="blog-wrapper sect-pt4">
    <div class="container ">
        <div class="row ">
            <div class="col-md ">
                <div class="post-box ">
                    <div class="post-meta ">
                        <center>
                            <h1 class="article-title ">Tentang</h1>
                        </center>
                    </div>
                    <br/>
                    <br/>
                    <div class="post-thumb ">
                        <img src="images/tentang/Ekskul-1.jpg " class="img-fluid" alt="foto">
                    </div>
                    <div class="post-meta ">
                        <h1 class="article-title ">Selamat Datang</h1>
                    </div>
                    <div class="article-content ">
                        <p>Website ini tentang seluruh Ekstrakurikuler yang ada di SMK NEGERI 4 Kuningan.</p>
                        <p>
                            Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Cras ultricies ligula sed magna dictum porta. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum
                            ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Nulla quis lorem ut libero malesuada feugiat.
                        </p>
                        <p>
                            Nulla porttitor accumsan tincidunt. Cras ultricies ligula sed magna dictum porta. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Cras ultricies ligula sed magna dictum porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
                            sollicitudin molestie malesuada.
                        </p>
                        <p>
                            Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
                            arcu erat, accumsan id imperdiet et, porttitor at sem. Donec rutrum congue leo eget malesuada.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis lorem ut libero malesuada feugiat. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vivamus suscipit tortor eget felis porttitor volutpat. Vivamus suscipit tortor eget
                            felis porttitor volutpat. Quisque velit nisi, pretium ut lacinia in, elementum id enim.
                        </p>
                        <blockquote class="blockquote ">
                            <p class="mb-0 ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        </blockquote>
                        <p>
                            Nulla porttitor accumsan tincidunt. Cras ultricies ligula sed magna dictum porta. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Cras ultricies ligula sed magna dictum porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
                            sollicitudin molestie malesuada.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Content -->

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

<footer class="site-footer site-bg-dark site-section ">
    <div class="container ">
        <div class="row mb-5 ">
            <div class="col-md-12 ">
                <div class="row ">
                    <div class="col-md-4 site-animate ">
                        <h2 class="site-heading-2 ">Tentang</h2>
                        <p>Website ini tentang informasi untuk semua ekstrakurikuler yang ada di SMKN 4 Kuningan.</p>
                    </div>
                    <div class="col-md-2 "></div>
                    <div class="col-md-6 site-animate ">
                        <div class="site-footer-widget mb-4 ">
                            <h2 class="site-heading-2 ">Hubungi Kami</h2>
                            <ul class="list-unstyled ">
                                <li class="py-2 d-block "><span class="ion-ios-location "></span> Jl. Puter Sari Cikeusik No.73, Cikeusik, Cidahu, Kabupaten Kuningan, Jawa Barat 45595, Indonesia </li>
                                <li class="py-2 d-block "><span class="ion-ios-telephone "></span> (0231) 8666972 </li>
                                <li class="py-2 d-block "><span class="ion-email "></span> ekskul@smkn4kng.sch.id </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-5 ">
            <div class="col-lg-12 ">
                <div class="row ">
                    <div class="col-lg-4 site-animate ">
                        <h2 class="site-heading-2 ">Maps</h2>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.4470844155862!2d108.6811145141452!3d-6.956470770038557!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f0e97e9beddcb%3A0x2fd17d5f9eaf9d66!2sSMK%20N%204%20Kuningan!5e0!3m2!1sid!2sid!4v1611820455471!5m2!1sid!2sid "
                        width="300 " height="150 " frameborder="0 " style="border:0; " allowfullscreen=" " aria-hidden="false " tabindex="0 "></iframe>
                    </div>
                    <div class="col-lg-2 "></div>
                    <div class="col-lg-6 site-animate ">
                        <div class="site-footer-widget mb-4 ">
                            <h2 class="site-heading-2 ">Ekstrakurikuler</h2>
                            <div class="row ">
                                <div class="col-sm-4 ">
                                    <ul class="list-unstyled ">
                                        <li><a href="# " class="py-2 d-block ">OSIS</a></li>
                                        <li><a href="# " class="py-2 d-block ">MPK</a></li>
                                        <li><a href="# " class="py-2 d-block ">PMR</a></li>
                                        <li><a href="# " class="py-2 d-block ">Rohis</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-4 ">
                                    <ul class="list-unstyled ">
                                        <li><a href="# " class="py-2 d-block ">Pencak Silat</a></li>
                                        <li><a href="# " class="py-2 d-block ">Marching Band</a></li>
                                        <li><a href="# " class="py-2 d-block ">Liputan 4</a></li>
                                        <li><a href="# " class="py-2 d-block ">Paskibra</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-4 ">
                                    <ul class="list-unstyled ">
                                        <li><a href="# " class="py-2 d-block ">Pramuka</a></li>
                                        <li><a href="# " class="py-2 d-block ">Futsal</a></li>
                                        <li><a href="# " class="py-2 d-block ">Volly Ball</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row site-animate ">
            <div class="col-md-12 text-center ">
                <div class="site-footer-widget mb-4 ">
                    <ul class="site-footer-social list-unstyled ">
                        <li class="site-animate "><a href="# "><span class="icon-youtube "></span></a></li>
                        <li class="site-animate "><a href="# "><span class="icon-facebook "></span></a></li>
                        <li class="site-animate "><a href="# "><span class="icon-instagram "></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-12 text-center ">
                <p>&copy; Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> Ekstrakurikuler | By with <i class="icon-heart "></i> Ali Abdurohman</a>
                </p>
            </div>
        </div>
    </div>
</footer>

<!-- loader -->
<div id="site-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


