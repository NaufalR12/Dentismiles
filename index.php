<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <!-- Css -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,700;1,
      700&family=Roboto+Mono:ital,wght@0,100;0,200;0,400;0,600;0,700;1,400&family=Roboto:ital,wght@0,
      100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet" />
    <!-- Feather Icon  -->
    <script src="https://unpkg.com/feather-icons"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Tampilkan modal saat halaman dimuat
        var myModal = new bootstrap.Modal(document.getElementById('exampleModal1'));
        myModal.show();
    });
    </script>
</head>

<body id="home">
    <!-- Navbar start -->
    <nav class="navbar navbar-expand-lg bg-custom">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="gambar/logo klinik (1v3) 3.png" alt="Logo Dentismiles" height="50" />
            </a>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="#home" id="menuNavbar">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false" id="menuNavbar">
                            Tentang
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#tentang">Tentang Kami</a></li>
                            <li>
                                <a class="dropdown-item text-black" href="#alasan">Alasan Memilih Kami</a>
                            </li>
                            <li><a class="dropdown-item" href="#layanan">layanan</a></li>
                            <li><a class="dropdown-item" href="#testimoni">Testimoni</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li>
                                <a class="dropdown-item" href="#kontak">Kontak</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="dokter.php" id="menuNavbar">Dokter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="reservasi.php" id="menuNavbar">Reservasi</a>
                    </li>
                </ul>



                <!-- Navbar Search-->
                <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                    <div class="input-group">
                        <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..."
                            aria-describedby="btnNavbarSearch" />
                        <button class="btn btn-custom2" id="btnNavbarSearch" type="button">
                            <i data-feather="search"></i>
                        </button>
                    </div>
                </form>

                <div class="me-5">
                    <a class="nav-link" id="tombolMasuk" href="#"><button
                            class="btn btn-custom2 text-white rounded-pill me-2" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Masuk
                        </button></a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar end -->

    <!-- Modal notif start -->
    <div class="modal modal-xl" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Pemberitahuan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php
                    if (isset($_GET['pesan'])) {
                        if ($_GET['pesan'] == "gagal") {
                            echo "Login gagal! username dan password salah!";
                        } else if ($_GET['pesan'] == "logout") {
                            echo "Anda telah berhasil logout";
                        } else if ($_GET['pesan'] == "belum_login") {
                            echo "Anda harus login untuk mengakses halaman admin";
                        }
                    } else {
                        echo "Selamat datang di Dentismiles.";
                    }
                    ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal notif end -->

    <!-- Masuk start -->
    <div class="modal modal-xl" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col pt-3" style="padding-left: 2.5rem">
                            <strong>
                                <p style="font-size: 2.5rem; margin-left: 2rem" class="ml-5 mb-0 text-custom2">
                                    Akses Cepat Menuju Kesehatan Gigi yang Lebih Baik
                                </p>
                            </strong>
                            <img src="gambar/login.png" style="padding-left: 5rem" class="mt-0" width="400px" alt="" />
                        </div>
                        <div class="col mb-5">
                            <h1>Welcome Back</h1>
                            <p class="mb-4">Kami Sangat Senang Melihat Anda Kembali!</p>

                            <form action="cek_login.php" method="POST">
                                <div class="row">
                                    <label class="col-form-label"><b>Masukan Username Anda</b></label>
                                    <div class="col-sm-12">
                                        <input placeholder="Username" type="text" name="username"
                                            class="form-control" />
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-form-label"><b>Masukan Password Anda</b></label>
                                    <div class="col-sm-12">
                                        <input placeholder="Password" type="password" name="password"
                                            class="form-control" />
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-form-label"><b>Masuk Sebagai</b></label>
                                    <div class="col-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kategori" id="admin"
                                                value="admin" />
                                            <label class="form-check-label" for="admin">Admin</label>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kategori" id="pengguna"
                                                value="pengguna" />
                                            <label class="form-check-label" for="pengguna">Pengguna</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col mt-3 align-self-end">
                                    <p class="text-custom">Lupa Password?</p>
                                </div>
                                <div class="d-grid gap-2">
                                    <button type="submit" class="mt-4 btn btn-custom text-white">
                                        Login
                                    </button>
                                </div>
                                <div class="text-center text-custom3 mt-4">
                                    Belum Punya Akun?
                                    <a href="DAFTAR" data-bs-toggle="modal" data-bs-target="#Modaldaftar">Daftar
                                    </a>disini.
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Masuk End -->

    <!-- Daftar Start -->
    <div class="modal modal-xl" id="Modaldaftar" tabindex="-1" aria-labelledby="ModaldaftarLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col pt-3" style="padding-left: 2.5rem">
                            <strong>
                                <p style="font-size: 2.5rem; margin-left: 2rem" class="ml-5 mb-0 text-custom2">
                                    Wujudkan Senyum <br />Impian Anda <br />Bersama Kami
                                </p>
                            </strong>
                            <img src="gambar/loginn.png" class="mt-0" width="500px" alt="" />
                        </div>
                        <div class="col mb-5">
                            <h1>Let's Join Us</h1>
                            <p class="mb-4">
                                Kami Sangat Senang Anda Bergabung Bersama Kami!
                            </p>

                            <form action="proses_daftar.php" method="POST">
                                <div class="row">
                                    <label class="col-form-label"><b>Masukan Nama Lengkap Anda</b></label>
                                    <div class="col-sm-12">
                                        <input placeholder="Nama Lengkap" type="text" name="namalengkap"
                                            class="form-control" />
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-form-label"><b>Masukan No.HP anda</b></label>
                                    <div class="col-sm-12">
                                        <input placeholder="Nomor HP" type="text" name="noHP" class="form-control" />
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-form-label"><b>Masukan Username</b></label>
                                    <div class="col-sm-12">
                                        <input placeholder="Username" type="text" name="username"
                                            class="form-control" />
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-form-label"><b>Masukan Password</b></label>
                                    <div class="col-sm-12">
                                        <input placeholder="Password" type="password" name="password"
                                            class="form-control" />
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-form-label"><b>Daftar Sebagai</b></label>
                                    <div class="col-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kategori" id="admin"
                                                value="admin" />
                                            <label class="form-check-label" for="admin">Admin</label>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kategori" id="pengguna"
                                                value="pengguna" />
                                            <label class="form-check-label" for="pengguna">Pengguna</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-grid gap-2">
                                    <button type="submit" class="mt-4 btn btn-custom text-white">
                                        Daftar
                                    </button>
                                </div>
                                <div class="text-center text-custom3 mt-4">
                                    Sudah Punya Akun?
                                    <a href="MASUK" data-bs-toggle="modal" data-bs-target="#exampleModal">Masuk
                                    </a>disini.
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Daftar End -->

    <!-- Lingkaran di background start-->
    <div class="wrapper">
        <div class="circle"></div>
    </div>
    <!-- Lingkaran di background end-->

    <!-- slider start -->
    <div class="mt-5 mb-5 pt-3" id="home">
        <div id="carouselExampleIndicators" class="carousel slider mt-5 pt-5"
            style="width: 65vw; margin: auto; top: 10px">
            <div class="carousel-indicators dots">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="li active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="li"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class="li"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner list mb-0">
                <div class="carousel-item active item">
                    <img src="gambar/slider1 (2).png" class="d-block w-100 c-img rounded" alt="slide 1" />
                </div>
                <div class="carousel-item item">
                    <img src="gambar/slider2 (2).png" class="d-block w-100 c-img rounded" alt="slide 2" />
                </div>
                <div class="carousel-item item">
                    <img src="gambar/slider3 (2).png" class="d-block w-100 c-img rounded" alt="slide 3" />
                </div>
            </div>
            <button id="prev" class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button id="next" class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!-- slider end -->

    <!-- Hero start -->
    <div class="mt-5 ms-5 me-5 pt-5 mb-5 pb-5">
        <div class=" container text-center pb-5">
            <div class="row justify-content-start">
                <div class="col-8 text-start mt-5">
                    <h1 style="font-size: 50px">
                        <strong>
                            Senyuman <br />
                            Indah Dimulai <br />Dari Sini</strong>
                    </h1>
                    <p style="font-size: 23px" class="text-custom3">
                        Rawat gigi anda di tempat terpercaya!
                    </p>
                    <a href="#alasan"><button class=" btn btn-custom3 text-custom4 rounded-pill w-35 me-2"
                            style="width: 25%; height: 18%; font-size: 20px">
                            Selengkapnya
                        </button></a>

                </div>
                <div class="col-4 mt-0" id="cardGambar">
                    <!-- Lingkaran di background start-->
                    <div class="alas3">
                        <div class="bulat3">
                            <img src="gambar/gambar1.png" alt="gambar cafe" />
                        </div>
                    </div>
                    <!-- Lingkaran di background end-->
                </div>
            </div>
        </div>
    </div>
    <!-- Hero end -->

    <!-- Tentang start -->
    <div class="mt-5 ms-5 me-5 pt-5" id="tentang">
        <div class="container text-center pb-5">
            <div class="row justify-content-start">
                <div class="col-6">
                    <!-- Lingkaran 2 di background start-->
                    <div class="alas mt-5">
                        <div class="bulat mt-1">
                            <div class="borderLingkaran">
                                <div class="lingkaranBlur"></div>
                                <img src="gambar/gambar2.png" alt="gambar tentang kami" />
                                <h2>Tentang Kami</h2>
                            </div>
                        </div>
                    </div>
                    <!-- Lingkaran 2 di background end-->
                </div>
                <div class="col-6 text-start">
                    <h2 class="mt-5 pt-5">
                        Klinik Gigi Terbaik di Indonesia <br />
                        Dentismiles
                    </h2>
                    <img src="gambar/Landing - Copy.jpg" alt="detail tentang kami" />
                    <p class="detailKami">
                        DentisMiles, sebuah klinik gigi yang menawarkan pelayanan
                        kesehatan gigi yang unggul dan inovatif melalui tim ahli dokter
                        gigi terampil dengan fokus pada kenyamanan pasien dan standar
                        keamanan tertinggi.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Tentang end -->

    <!-- kelebihan kami start -->
    <div class="container mt-5 pt-5" id="alasan">
        <div class="row row-cols-md-4 py-5 mt-5 pt-5">
            <div class="col text-center mt-5 pt-5">
                <div class="card shadow rounded" style="width: 16rem; height: 23rem; background-color: #f0fafe">
                    <img style="border-bottom-right-radius: 5rem" src="gambar/kenapa1.jpg" class="card-img-top"
                        alt="..." />
                    <div class="card-body p-1">
                        <p class="fw-bold">Kesehatan</p>
                        <p class="card-text">
                            DebtisMiles sudah menerapkan protokol kesehatan sehingga pasien
                            dapat perawatan dengan aman dan nyaman
                        </p>
                    </div>
                </div>
            </div>
            <div class="col text-center mt-5 pt-5">
                <div class="card shadow rounded" style="width: 16rem; height: 23rem; background-color: #f0fafe">
                    <img style="border-bottom-right-radius: 5rem" src="gambar/kenapa2.jpg" class="card-img-top"
                        alt="..." />
                    <div class="card-body p-1">
                        <p class="fw-bold">Kualitas Pelayanan</p>
                        <p class="card-text">
                            Selalu berinovasi dalam memberikan dan meningkatkan kualitas
                            pelayanan untuk mewujudkan senyum sehat masyarakat Indonesia
                        </p>
                    </div>
                </div>
            </div>
            <div class="col text-center mt-5 pt-5">
                <div class="card shadow rounded" style="width: 16rem; height: 23rem; background-color: #f0fafe">
                    <img style="border-bottom-right-radius: 5rem" src="gambar/kenapa3.jpg" class="card-img-top"
                        alt="..." />
                    <div class="card-body p-1">
                        <p class="fw-bold">Dokter Profesional</p>
                        <p class="card-text">
                            Ketelitian dan keahlian adalah inti dari layanan dokter gigi
                            profesional kami, yang siap memberikan perawatan berkualitas
                            pada setiap pasien.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col mt-5 pt-5">
                <h3 style="color: #01579b; font-size: 3rem">
                    Kenapa Harus DentisMiles?
                </h3>
            </div>
        </div>
    </div>
    <!-- kelebihan kami end -->

    <!-- layanan kami start-->
    <div class="row mt-5" id="layanan">
        <div class="col-6">
            <center>
                <img src="gambar/layanan.png" width="600rem" alt="gambar layanan" draggable="false" />
            </center>
        </div>
        <div class="col-6 p-3">
            <h1 class="mt-5">Layanan Perawatan Klinik <br />Gigi DentisMiles</h1>
            <p class="mt-3">
                Layanan perawatan di klinik gigi dentismiles ada banyak sekali, <br />
                mulai dari pasang behel, scaling gigi, tambal gigi, gigi palsu,<br />
                perawatan saluran akar, bleaching, dsb.
            </p>
            <!-- <img src="gambar/layanan1.png" width="400rem" alt="" /> -->
            <div class="row justify-content-start ms-0" style="max-width: 550px; margin-left: 0">
                <div class="container">
                    <div class="row justify-content-start">
                        <p class="d-inline-flex gap-3">
                            <button class="btn btn-outline-secondary rounded-pill" style="width: 30%">
                                Pasang Behel
                            </button>

                            <button class="btn btn-outline-secondary rounded-pill" style="width: 20%">
                                Scaling
                            </button>

                            <button class="btn btn-outline-secondary rounded-pill" style="width: 30%">
                                Tambal Gigi
                            </button>

                            <button class="btn btn-outline-secondary rounded-pill" style="width: 30%">
                                Gigi Palsu
                            </button>
                        </p>
                    </div>
                    <div class="row justify-content-center mr-5">
                        <p class="d-inline-flex gap-1 align-items-center justify-content-center">
                            <button class="btn btn-custom text-white rounded-pill w-50 me-2">
                                Perawatan Saluran Akar
                            </button>
                            <button class="btn btn-custom text-white rounded-pill w-25 me-2">
                                Bleaching
                            </button>
                        </p>
                    </div>
                    <div class="row justify-content-between">
                        <p class="d-inline-flex gap-5 align-items-center justify-content-center">
                            <button class="btn btn-outline-secondary rounded-pill" style="width: 25%">
                                Veener Gigi
                            </button>
                            <button class="btn btn-outline-secondary rounded-pill" style="width: 25%">
                                Implan Gigi
                            </button>
                            <button class="btn btn-outline-secondary rounded-pill" style="width: 25%">
                                Cabut Gigi
                            </button>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- layanan kami end-->

    <!-- Testimoni start -->
    <!-- Lingkaran 5 di background start-->
    <div class="alas5 mt">
        <div class="bulat5"></div>
    </div>
    <!-- Lingkaran 5 di background end-->
    <div class="container mt-5" id="testimoni">
        <div class="row row-cols-md-4 py-5 mt-5 pt-5">
            <div class="col text-center">
                <div class="card shadow p-1" id="cardTestimoni"
                    style="width: 16rem; height: 23rem; background-color: #f0fafe">
                    <div class="card-body">
                        <div class="mt-2 mb-2" id="testimoniStars">
                            <i data-feather="star" class="star-full"></i>
                            <i data-feather="star" class="star-full"></i>
                            <i data-feather="star" class="star-full"></i>
                            <i data-feather="star" class="star-full"></i>
                            <i data-feather="star" class="star-full"></i>
                        </div>
                        <p class="card-text">
                            DebtisMiles sudah menerapkan protokol kesehatan sehingga pasien
                            dapat perawatan dengan aman dan nyaman
                        </p>
                        <p class="fw-bold">Mulyono saputra</p>
                        <img style="width: 6rem; height: 6rem; object-fit: cover" class="rounded-circle"
                            src="gambar/testimoni/mulyono.jpg" alt="gambar profil testimoni" />
                    </div>
                </div>
            </div>
            <div class="col text-center">
                <div class="card shadow p-1" id="cardTestimoni"
                    style="width: 16rem; height: 23rem; background-color: #f0fafe">
                    <div class="card-body">
                        <div class="mt-2 mb-2" id="testimoniStars">
                            <i data-feather="star" class="star-full"></i>
                            <i data-feather="star" class="star-full"></i>
                            <i data-feather="star" class="star-full"></i>
                            <i data-feather="star" class="star-full"></i>
                            <i data-feather="star" class="star-full"></i>
                        </div>
                        <p class="card-text">
                            DebtisMiles sudah menerapkan protokol kesehatan sehingga pasien
                            dapat perawatan dengan aman dan nyaman
                        </p>
                        <p class="fw-bold">Putri ningsihyanti</p>
                        <img style="width: 6rem; height: 6rem; object-fit: cover" class="rounded-circle"
                            src="gambar/testimoni/putri.jpg" alt="gambar profil testimoni" />
                    </div>
                </div>
            </div>
            <div class="col text-center">
                <div class="card shadow p-1" id="cardTestimoni"
                    style="width: 16rem; height: 23rem; background-color: #f0fafe">
                    <div class="card-body">
                        <div class="mt-2 mb-2" id="testimoniStars">
                            <i data-feather="star" class="star-full"></i>
                            <i data-feather="star" class="star-full"></i>
                            <i data-feather="star" class="star-full"></i>
                            <i data-feather="star" class="star-full"></i>
                            <i data-feather="star" class="star"></i>
                        </div>
                        <p class="card-text">
                            DebtisMiles sudah menerapkan protokol kesehatan sehingga pasien
                            dapat perawatan dengan aman dan nyaman
                        </p>
                        <p class="fw-bold">Arif budiman pratama</p>
                        <img style="width: 6rem; height: 6rem; object-fit: cover" class="rounded-circle"
                            src="gambar/testimoni/arif.jpg" alt="gambar profil testimoni" />
                    </div>
                </div>
            </div>

            <div class="col mt-5 pt-5">
                <!-- Lingkaran di background start-->
                <div class="alas4 mt-5">
                    <div class="bulat4 mt-5">
                        <div class="garisBulat">
                            <h2 style="color: #01579b">
                                Testimoni <br />
                                Mereka Yang <br />
                                Sudah Mencoba <br />
                                DentisMiles
                            </h2>
                        </div>
                    </div>
                </div>
                <!-- Lingkaran di background end-->
            </div>
        </div>
    </div>
    <!-- Testimoni end -->

    <!-- tombol reservasi start-->
    <div class="container mt-5 mb-5" style="max-width: 1100px">
        <div class="card-border-custom shadow">
            <div class="card-body">
                <div class="row">
                    <div class="col p-3" style="margin-left: 5rem; align-items: center">
                        <p class="mt-2 mb-0" style="font-size: 1.5rem">
                            Siap Memancarkan Senyuman?
                        </p>
                        <p>DentisMiles Menunggu Kedatangan Anda</p>
                    </div>
                    <div class="col p-3" style="align-items: center; justify-content: center">
                        <a href="#" class=""><button
                                class="btn mt-3 btn-custom btn-lg text-white shadow rounded-pill me-2"
                                style="width: 60%; height: 70%">
                                Reservasi Sekarang!
                            </button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- tombol reservasi end-->

    <!-- Kontak start -->
    <div class="mt-5 ms-5 me-5 pt-5" id="kontak">
        <div class="container text-center pb-5">
            <div class="row justify-content-start">
                <div class="col-6 text-start">
                    <h1>Klinik Kami</h1>
                    <div class="cabang">
                        <p class="namaCabang">Dentismiles Kaliurang Center</p>
                        <div class="contact-info">
                            <i data-feather="phone"></i>
                            <p>+6282523659865</p>
                            <i data-feather="mail"></i>
                            <p>DMKaliurangC@gmail.com</p>
                        </div>
                        <div class="contact-info">
                            <i data-feather="map-pin"></i>
                            <p>Jl. Kaliurang Km.4 No.23B, Yogyakarta (Depan Miniso)</p>
                        </div>
                    </div>
                    <div class="cabang">
                        <p class="namaCabang">Dentismiles Kaliurang Center</p>
                        <div class="contact-info">
                            <i data-feather="phone"></i>
                            <p>+6282523659865</p>
                            <i data-feather="mail"></i>
                            <p>DMKaliurangC@gmail.com</p>
                        </div>
                        <div class="contact-info">
                            <i data-feather="map-pin"></i>
                            <p>Jl. Kaliurang Km.4 No.23B, Yogyakarta (Depan Miniso)</p>
                        </div>
                    </div>
                    <div class="cabang">
                        <p class="namaCabang">Dentismiles Kaliurang Center</p>
                        <div class="contact-info">
                            <i data-feather="phone"></i>
                            <p>+6282523659865</p>
                            <i data-feather="mail"></i>
                            <p>DMKaliurangC@gmail.com</p>
                        </div>
                        <div class="contact-info">
                            <i data-feather="map-pin"></i>
                            <p>Jl. Kaliurang Km.4 No.23B, Yogyakarta (Depan Miniso)</p>
                        </div>
                    </div>
                    <div class="cabang">
                        <p class="namaCabang">Dentismiles Kaliurang Center</p>
                        <div class="contact-info">
                            <i data-feather="phone"></i>
                            <p>+6282523659865</p>
                            <i data-feather="mail"></i>
                            <p>DMKaliurangC@gmail.com</p>
                        </div>
                        <div class="contact-info">
                            <i data-feather="map-pin"></i>
                            <p>Jl. Kaliurang Km.4 No.23B, Yogyakarta (Depan Miniso)</p>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.974059430042!2d110.3632
          6807660846!3d-7.792571077341828!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5742a17e8c33%3A0xf92dc9a55003beb0!2sMalioboro%20Yogyakarta!5e0!3m2!1sid!2sid!4v1691143243362!5m2!1sid!2sid"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                        class="map"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Kontak end -->

    <!-- footer start -->
    <footer>
        <div class="container">
            <div class="row" style="justify-content: center">
                <div class="col pt-4">
                    <img class="mb-3 mt-3" src="gambar/logo klinik (1v3) 3.png" width="240rem" alt="" />
                    <p>
                        Dentismiles pilihan tepat untuk gigi <br />
                        dan senyuman anda.
                    </p>
                    <div class="credit">
                        <br />
                        <p class="mt-4">&copy 2023 | All rights reserved.</p>
                    </div>
                </div>
                <div class="col pt-5 pb-5">
                    <p style="font-size: 1.2rem" class="text-custom">DentisMiles</p>
                    <p>
                        Klinik Gigi Terpercaya dengan 24 Cabang di Indonesia <br />
                        Call Center: <br />
                        081267676776 <br />
                        Jam Buka: <br />
                        24 jam
                    </p>
                </div>
                <div class="col pt-5 pb-5" style="margin-left: 4rem">
                    <p style="font-size: 1.2rem" class="text-custom">Menu</p>
                    <a class="dropdown-item" href="#home">Home</a>
                    <a class="dropdown-item" href="#tentang">Tentang</a>
                    <a class="dropdown-item" href="dokter.php">Dokter</a>
                    <a class="dropdown-item" href="reservasi.php">Reservasi</a>
                </div>
                <div class="col pt-5 pb-5">
                    <p style="font-size: 1.2rem" class="text-custom">Layanan Kami</p>
                    <a class="dropdown-item">Behel Gigi</a>
                    <a class="dropdown-item">Scaling Gigi</a>
                    <a class="dropdown-item">Tambal Gigi</a>
                    <a class="dropdown-item">Cabut Gigi</a>
                    <a class="dropdown-item">Dan Lain-lain</a>
                </div>
                <div class="col-3 mt-5">
                    <center>
                        <a href="http://instagram.com/"><img width="45rem" src="gambar/ig.png" alt="" /></a>
                        <a href="http://twitter.com/"><img width="45rem" src="gambar/tw.png" alt="" /></a>
                        <a href="http://facebook.com/"><img width="45rem" src="gambar/fb.png" alt="" /></a>
                        <div class="apk mt-2">
                            <!-- Tambahkan logo AppStore dengan tautan ke aplikasi -->
                            <a href="https://www.apple.com/id/app-store/">
                                <img align="top" src="gambar/appstore.png" alt="Logo AppStore" width="110"
                                    class="ios" />
                            </a>

                            <!-- Tambahkan logo Play Store dengan tautan ke aplikasi -->
                            <a href="https://play.google.com/store/">
                                <img align="top" src="gambar/playstore.png" alt="Logo Play Store" width="110"
                                    class="android" />
                            </a>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->

    <!-- Feather Icon -->
    <script>
    feather.replace();
    </script>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <!-- Javascript -->
    <script src="js/script.js"></script>
</body>

</html>