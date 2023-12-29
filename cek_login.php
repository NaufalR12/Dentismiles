<?php 
   session_start(); 
   include 'koneksi.php';

    $username = $_POST['username'];
    $password = $_POST['password'];
    $kategori = $_POST['kategori'];
    

    if ($kategori == 'admin') {
        $data = mysqli_query($connect,"select * from admin where username='$username' 
        and password='$password'")or die (mysqli_error($connect));
        $cek = mysqli_num_rows($data);
 
        if ($cek > 0) {
            $row = mysqli_fetch_assoc($data);
            $_SESSION['id_admin'] = $row['id_admin'];
            $_SESSION['username'] = $username;
            $_SESSION['status']   = "login";
            header("location: homeadmin.php"); 
        } else {
            header("location: index.php?pesan=gagal");
        }
        
    } elseif ($kategori == 'pengguna') {
        $data = mysqli_query($connect,"select * from pengguna where username='$username' 
    and password='$password'")or die (mysqli_error($connect));
        $cek = mysqli_num_rows($data);
    
        if ($cek > 0) {
            $row = mysqli_fetch_assoc($data);
            $_SESSION['id_pengguna'] = $row['id_pengguna'];
            $_SESSION['username'] = $username;
            $_SESSION['status']   = "login";
            header("location: home.php"); 
        } else {
            header("location: index.php?pesan=gagal");
        }
        
    }
     
?>