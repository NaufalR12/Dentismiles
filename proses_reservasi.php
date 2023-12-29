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
    <?php
     include('koneksi.php');

     // Mendapatkan data dari formulir reservasi
     $nama = $_POST['nama'];
     $nomor_telepon = $_POST['nomor_telepon'];
     $keluhan = $_POST['keluhan'];
     $tanggal_reservasi = $_POST['tanggal'];
     $jam_reservasi= $_POST['jam'];
     $id_dokter = $_POST['id_dokter'];
     
     // Misalkan id_pengguna telah disimpan dalam sesi saat login
     // Anda perlu menyesuaikan cara Anda menyimpan id_pengguna saat login
     $id_pengguna = $_SESSION['id_pengguna']; // Gantilah dengan cara sesuai aplikasi Anda
     
     // Memasukkan data reservasi ke dalam tabel reservasi
     $queryInsertReservasi = "INSERT INTO reservasi (id_pengguna, id_dokter, keluhan, tanggal_reservasi, jam_reservasi) VALUES ('$id_pengguna', '$id_dokter', '$keluhan', '$tanggal_reservasi', '$jam_reservasi')";
     $resultInsertReservasi = $connect->query($queryInsertReservasi);
     
     if ($resultInsertReservasi) {
         $id_reservasi = $connect->insert_id; // Mendapatkan id_reservasi yang baru saja dibuat
         ?>
    <div class="container position-absolute top-50 start-50 translate-middle text-center mb-5 ml-5 mr-5 p-5 ">
        <div class="row">
            <div class="col">
                <div class="container" style="max-width: 750px">
                    <div class="card-border-custom shadow">
                        <div class="card-body">
                            <div class="row p-4 align-items-center">
                                <div class="col p-2 card-header" style=" align-items: center;">
                                    <p class=" mb-5 text-custom3" style="font-size: 1.5rem">
                                        <?php echo "Reservasi Berhasil!<br>" ;?> </p>
                                    <hr class="pe-4 ps-4">
                                </div>
                                <div class="row text-center">
                                    <div class="col">
                                        <?php
                                     // Jika reservasi berhasil, tampilkan informasi reservasi
                                     echo "ID Reservasi: $id_reservasi<br>";
                                     echo "ID Pengguna: $id_pengguna<br>";
                                     echo "ID Dokter: $id_dokter<br>";
                                     echo "Keluhan: $keluhan<br>";
                                     echo "Tanggal Reservasi: $tanggal_reservasi<br>";
                                     echo "Jam Reservasi: $jam_reservasi<br>"; 
                                     ?>
                                    </div>
                                    <a class="mt-3" href="reservasi.php"><button type="button"
                                            class="btn btn-info">Kembali</button></a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
     } else {
         // Handle jika terjadi kesalahan saat menyimpan reservasi
         die("Error: " . $connect->error);
     }
     
     // Tutup koneksi database
     $connect->close();
     ?>

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