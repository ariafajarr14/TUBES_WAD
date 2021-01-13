<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <script src="/js/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function () {
            $(".menu-icon").on("click", function () {
                $("nav ul").toggleClass("showing");
            });
        });

        // Scrolling Effect

        $(window).on("scroll", function () {
            if ($(window).scrollTop()) {
                $('nav').addClass('black');
            } else {
                $('nav').removeClass('black');
            }
        })

    </script>



    <title>Hello, world!</title>
</head>

<body>

    <!-- Home -->
    <section class="home" id="home">
        <header>
            <nav>
                <div class="menu-icon">
                    <i class="fa fa-bars fa-2x"></i>
                </div>
                <div class="logo">
                    <a href="#home" class="page-scroll"><img src="/img/klinikku3.png" alt=""></a>
                </div>
                <div class="menu">
                    <ul>
                        <li><a href="#home" class="page-scroll">Home</a></li>
                        <li><a href="#about" class="page-scroll">Tentang kami</a></li>
                        <li><a href="#services" class="page-scroll">Layanan</a></li>
                        <li><a href="#contacts" class="page-scroll">Kontak</a></li>
                        <li><a href="#team" class="page-scroll">Tim</a></li>
                        <li><a href="/UserAuth/login"><button type="button" class="btn"
                                    style="color:white; background-color: #65CFBB; margin-left:100px;">Login</button></a>
                        </li>
                        <li><a href="#register" class="page-scroll"><button type="button" class="btn"
                                    style="color:white; background-color: #65CFBB; margin-left:-70px;">Register</button></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
    </section>

    <!-- About us -->
    <section class="about" id="about">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5" style="height: 559px;">
                        <img src="/img/aboutus.png" alt="">
                    </div>
                    <div class="col-sm-7">
                        <h2 class="text-center">Tentang Kami</h2>
                        <center>
                            <hr>
                        </center>
                        <p>
                            <strong>Klinik Ku</strong> merupakan platform klinik digital yang siap melayani
                            dan membantu masalah kesehatan kamu kapanpun dan dimanapun.
                        </p>
                        <br>
                        <h5 id="h5text">Mengapa pilih Klinik Ku ?</h5>
                        <p>Memilih Klinik Ku akan mempertemukan kamu dengan dokter umum yang berpengalaman dan
                            tersertifikasi secara cepat. Tidak perlu repot mencari dokter terdekat dan harus keluar
                            rumah. Klinik Ku memastikan kamu mendapatkan pelayanan terbaik.
                            Kamu bisa melakukan konsultasi dan diskusi kesehatan dengan dokter kami, rekomendasi obat,
                            rujukan ke rumah sakit, hingga terapi pemulihan pasca sembuh dari penyakit dan upaya
                            pencegahan terhadap penyakit maupun kondisi kesehatan lainnya.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Services -->
    <section class="services" id="services">
        <div class="content">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="text-center">Layanan Kami</h2>
                    <center>
                        <hr>
                    </center>
                </div>
            </div>
            <div id="carouselExampleCaptions" class="carousel carousel-danger slide" data-bs-ride="carousel"
                style="border-radius: 25px;">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
                    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"></li>
                </ol>
                <div class="carousel-inner" style="border-radius: 25px; color:aqua;">
                    <div class="carousel-item active" data-bs-interval="3000">
                        <img src="/img/konsultasi.jpg" class="d-block w-100 " alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Konsultasi dengan Dokter</h5>
                            <p>Melalui platform ini, kamu dapat berkonsultasi langsung dengan Dokter umum yang sudah
                                berpengalaman dan terverifikasi tanpa harus datang langsung ke klinik.</p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <img src="/img/obat.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Resep Obat yang Aman dan Terjangkau</h5>
                            <p>Resep Obat kami diberikan pasti aman dan terjangkau sehingga dapat dijangkau oleh semua
                                kalangan. </p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <img src="/img/apotek.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Apotek</h5>
                            <p>Penebusan resep obat dapat dilakukan langsung di Apotek Klinik Ku yang ada di lokasi
                                Klinik Ku.</p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <img src="/img/rumahsakit.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Rujukan dengan Rumah Sakit terdekat</h5>
                            <p>Kami dapat memberi rujukan ke rumah sakit terbaik di sekitar tempat tinggal kamu jadi
                                kamu tidak perlu khawatir jika kondisi kamu perlu penanganan lebih lanjut.</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
    </section>

    <!-- Contacts -->
    <section class="contacts" id="contacts">
        <div class="content">
            <div class="row">
                <div class="col-sm-4">
                    <h2 class="text-center">Kontak</h2>
                    <center>
                        <hr>
                    </center>
                    <div class="icon" style="">
                        <div class="description">
                            Kamu dapat menghubungi dan memberi feedback kepada kami melalui :
                        </div>
                        <br>
                        <div class="icon1" style="color:#56B0D2">
                            <img src="/img/icon_telp.png" alt="">
                            Emergecy Call
                            <p style="margin-left: 55px;">021-222-333
                            </p>
                        </div>
                        <div class="icon2" style="color:#56B0D2">
                            <img src="/img/icon_email.png" alt="">Email
                            <p style="margin-left: 51px;">klinikku@medica.co.id
                            </p>
                        </div>
                        <div class="icon3" style="color:#56B0D2">
                            <img src="/img/icon_alamat.png" alt="">Alamat
                            <p style="margin-left: 55px;">Jln. Kesehatan No.1 Blok.OK
                            </p>
                        </div>
                    </div>

                </div>
                <div class="col-sm-8" style="height:559px;">
                    <img src="/img/contacts.png" style=" float:right; height:100%;" alt="">
                </div>
            </div>

        </div>
    </section>

    <!-- Team -->
    <section class="team" id="team">
        <div class="content" style="width: 90%;">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="text-center">Tim</h2>
                    <center>
                        <hr>
                    </center>
                </div>
            </div>
            <br>
            <div align="center" class="row">
                <div class="col-sm-4">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="/img/bobob.png" alt="Avatar" style="width:300px;height:300px;">
                            </div>
                            <div class="flip-card-back">
                                <h4>Achmad Husein Mulya WNH</h4>
                                <p>Architect & Engineer</p>
                                <p>We love that guy</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="/img/petrik.png" alt="Avatar" style="width:300px;height:300px;">
                            </div>
                            <div class="flip-card-back">
                                <h4>Aria Fajar Ramdhany</h4>
                                <p>Architect & Engineer</p>
                                <p>We love that guy</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="/img/sandy.png" alt="Avatar" style="width:300px;height:300px;">
                            </div>
                            <div class="flip-card-back">
                                <h4>Fitria Nikmatul Hidayah</h4>
                                <p>Architect & Engineer</p>
                                <p>We love that guy</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div align="center" class="row" style="">
                <div class="col-sm-6">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="/img/squid.png" alt="Avatar" style="width:300px;height:300px;">
                            </div>
                            <div class="flip-card-back">
                                <h4>M. Affan Ramadhani</h4>
                                <p>Architect & Engineer</p>
                                <p>We love that guy</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="/img/mrcrab.png" alt="Avatar" style="width:300px;height:300px;">
                            </div>
                            <div class="flip-card-back">
                                <h4>Yusuf Herianto Manik</h4>
                                <p>Architect & Engineer</p>
                                <p>We love that guy</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <br>
    </section>

    <!-- Register -->
    <section class="register" id="register">
        <div class="content">

            <div class="row container-page ml-auto mr-auto">
                <div class="col-md-12">
                    <h2 class="text-center">Registrasi</h2>
                    <center>
                        <hr>
                    </center>
                    <div class="form-group col-lg-6">
                        <label>Nama Lengkap</label>
                        <input type="" name="" class="form-control" id="" value="" placeholder="Contoh : Ucen Nurhakim">
                    </div>
                    <div class="form-group col-lg-6">
                        <label>Username</label>
                        <input type="" name="" class="form-control" id="" value="" placeholder="Maksimal 12 Huruf">
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-3">
                            <label>Password</label>
                            <input type="password" name="" class="form-control" id="" value="">
                        </div>

                        <div class="form-group col-lg-3">
                            <label>Repeat Password</label>
                            <input type="password" name="" class="form-control" id="" value="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-3">
                            <label>Email Address</label>
                            <input type="" name="" class="form-control" id="" value="">
                        </div>

                        <div class="form-group col-lg-3">
                            <label>Repeat Email Address</label>
                            <input type="" name="" class="form-control" id="" value="">
                        </div>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="inputAddress">Alamat Lengkap</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="Contoh: Jln. Jalan Kuy">
                    </div>
                    <div class="row">
                        <legend class="col-form-label col-sm-3 pt-0">Jenis Kelamin</legend>
                        <div class="col-sm-9">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                    value="option1">
                                <label class="form-check-label" for="gridRadios1">
                                    Laki-laki
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2"
                                    value="option2">
                                <label class="form-check-label" for="gridRadios2">
                                    Perempuan
                                </label>
                            </div>
                        </div>
                    </div>


                    <br>
                    <center><button type="submit" class="btn btn-primary">Register</button></center>
                </div>

            </div>
    </section>

    <footer class="section footer-classic context-dark bg-image" style="background: #254d45;">
        <div class="container">
            <div class="row row-30">
                <div class="col-md-4 col-xl-5">
                    <div class="pr-xl-4">
                        <h4>Klinik Ku</h4>
                        <p>Aplikasi Klinik Ku masih jauh dari kata sempurna, Oleh karena itu, kami sangat mengharapkan
                            adanya feedback dari teman-teman pengguna Klinik Ku bisa berupa Kritik dan Saran yang dapat
                            disampaikan ke bagian kontak kami demi peningkatan kualitas dan layanan kami untuk kamu.
                            .</p>
                        <!-- Rights-->
                        <p class="rights"><span>©  </span><span
                                class="copyright-year">2021</span><span> </span><span>Klinik-Ku</span><span>. </span><span>All
                                Rights Reserved.</span></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <h5>Kontak</h5>
                    <dl class="contact-list">
                        <dt>Alamat:</dt>
                        <dd>Jln. Kesehatan No.1 Blok.OK</dd>
                    </dl>
                    <dl class="contact-list">
                        <dt>email:</dt>
                        <dd><a href="mailto:#">klinikku@medica.co.id</a></dd>
                    </dl>
                    <dl class="contact-list">
                        <dt>phones:</dt>
                        <dd><a href="tel:#">021-222-333</a>
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
        <div class="row no-gutters social-container">
            <div class="col"><a class="social-inner" href="#"><span
                        class="icon mdi mdi-facebook"></span><span>Facebook</span></a></div>
            <div class="col"><a class="social-inner" href="#"><span
                        class="icon mdi mdi-instagram"></span><span>instagram</span></a></div>
            <div class="col"><a class="social-inner" href="#"><span
                        class="icon mdi mdi-twitter"></span><span>twitter</span></a></div>
            <div class="col"><a class="social-inner" href="#"><span
                        class="icon mdi mdi-youtube-play"></span><span>google</span></a></div>
        </div>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
        integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous">
    </script>
    <script>
        $('.page-scroll').on('click', function (e) {

            var tujuan = $(this).attr('href');

            var elemenTujuan = $(tujuan);

            $('html , body').animate({
                scrollTop: elemenTujuan.offset().top - 0
            }, 900, 'swing');

            e.preventDefault();
        });

    </script>

</body>

</html>
