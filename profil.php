<?php 
    session_start();
    if (empty($_SESSION['username'])) {
    header("location:index.php?pesan=belum_login");
}
?>
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
</head>

<body>
    <!-- Navbar start -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="gambar/logo klinik (1v3) 3.png" alt="Logo Dentismiles" height="50" />
            </a>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="home.php"
                            id="menuNavbar">Home</a>
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

                <!-- Navbar-->
                <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false"><i data-feather="user"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#!">Reservasi</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar end -->
    <div class="mt-5 p-5"></div>
    <!-- profil start -->
    <div class="container mt-3 text-center">
        <div class="row align-items-start">
            <div class="col-4">
                <img style="width: 250px;" src="gambar/icons8-user-100.png" alt="foto profil" />
            </div>
            <div class="col-8 text-start">
                <?php 

include('koneksi.php');


$id_pengguna = $_SESSION['id_pengguna']; 


$query = "SELECT nama_lengkap, username, password, nomor_telepon FROM pengguna WHERE id_pengguna = $id_pengguna";


$result = $connect->query($query);


if ($result) {
    
    if ($result->num_rows > 0) {
        
        $row = $result->fetch_assoc();

        $nama_lengkap = $row['nama_lengkap'];
        $username = $row['username'];
        $nomor_telepon = $row['nomor_telepon'];

    } else {
        echo "Tidak ada data pengguna dengan ID tersebut.";
    }
} else {
    echo "Error: " . $connect->error;
}
?>
                <div class="card">
                    <div class="card-header">
                        Profil
                    </div>
                    <div class="card-body">
                        <?php 
                        echo "<p>Nama Lengkap: $nama_lengkap</p>";
                        echo "<p>Username: $username</p>";
                        echo "<p>Nomor Telepon: $nomor_telepon</p>";
                        ?>
                        <a href="logout.php" class="btn btn-primary">Logout</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Profil end -->

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
                    <a class="dropdown-item" href="home.php">Home</a>
                    <a class="dropdown-item" href="dokter.php">Dokter</a>
                    <a class="dropdown-item" href="reservasi.php">Reservasi</a>
                </div>
                <div class="col pt-5 pb-5">
                    <p style="font-size: 1.2rem" class="text-custom">Layanan Kami</p>
                    <a class="dropdown-item" href="#">Behel Gigi</a>
                    <a class="dropdown-item" href="#">Scaling Gigi</a>
                    <a class="dropdown-item" href="#">Tambal Gigi</a>
                    <a class="dropdown-item" href="#">Cabut Gigi</a>
                    <a class="dropdown-item" href="#">Dan Lain-lain</a>
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