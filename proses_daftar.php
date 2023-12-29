<?php 
include "koneksi.php";

$namalengkap = $_POST['namalengkap'];
$noHP = $_POST['noHP'];
$username = $_POST['username'];
$password = $_POST['password'];
$kategori = $_POST['kategori'];

if ($kategori == 'admin') {
    $query=mysqli_query($connect,"INSERT INTO admin VALUES('','$namalengkap','$username','$password','$noHP')"
    ) or die(mysqli_error($connect));
    $redirect_page = "index.php?registration_success=admin";
    header("location:index.php");
} elseif ($kategori == 'pengguna') {
    $query=mysqli_query($connect,"INSERT INTO pengguna VALUES('','$namalengkap','$username','$password','$noHP')"
    ) or die(mysqli_error($connect));
    $redirect_page = "index.php?registration_success=pengguna";
    header("location:index.php");
}

?>