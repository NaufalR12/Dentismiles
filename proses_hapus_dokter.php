<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $sambungan = mysqli_connect("localhost", "root", "", "klinik");

    if (!$sambungan) {
        die("Koneksi ke basis data gagal: " . mysqli_connect_error());
    }

    $id_dokter = $_POST['id_dokter'];

    // Hapus terlebih dahulu semua data reservasi terkait
    $query_hapus_reservasi = "DELETE FROM reservasi WHERE id_dokter = $id_dokter";
    $hasil_hapus_reservasi = mysqli_query($sambungan, $query_hapus_reservasi);

    if ($hasil_hapus_reservasi) {
        // Setelah menghapus reservasi, hapus dokter
        $query_hapus_dokter = "DELETE FROM dokter WHERE id_dokter = $id_dokter";
        $hasil_hapus_dokter = mysqli_query($sambungan, $query_hapus_dokter);

        if ($hasil_hapus_dokter) {
            echo "Data dokter berhasil dihapus. <a href='tampil_dokter_admin.php'>Kembali ke daftar dokter</a>";
        } else {
            echo "Gagal menghapus data dokter: " . mysqli_error($sambungan);
        }
    } else {
        echo "Gagal menghapus data reservasi: " . mysqli_error($sambungan);
    }

    mysqli_close($sambungan);
} else {
    echo "Akses tidak sah!";
}
?>