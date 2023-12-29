<?php session_start();

include('koneksi.php');

$id_pengguna = $_SESSION['id_pengguna']; 

$query = "SELECT nama_lengkap, usrname, password, nomor_telepon FROM pengguna WHERE id_pengguna = $id_pengguna";

$result = $connect->query($query);

if ($result) {
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        $nama_lengkap = $row['nama_lengkap'];
        $username = $row['username'];
        $password = $row['password'];
        $nomor_telepon = $row['nomor_telepon'];

        echo "Nama Lengkap: $nama_lengkap<br>";
        echo "Username: $username<br>";
        echo "Password: $password<br>";
        echo "Nomor Telepon: $nomor_telepon<br>";
    } else {
        echo "Tidak ada data pengguna dengan ID tersebut.";
    }
} else {
    echo "Error: " . $connect->error;
}

$connect->close();
?>