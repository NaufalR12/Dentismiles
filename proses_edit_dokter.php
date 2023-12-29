<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sambungan = mysqli_connect("localhost", "root", "", "klinik");

    if (!$sambungan) {
        die("Koneksi ke basis data gagal: " . mysqli_connect_error());
    }

    $id_dokter = mysqli_real_escape_string($sambungan, $_POST['id_dokter']);
    $nama_dokter = mysqli_real_escape_string($sambungan, $_POST['nama_dokter']);
    $spesialisasi = mysqli_real_escape_string($sambungan, $_POST['spesialisasi']);
    $jam_mulai = mysqli_real_escape_string($sambungan, $_POST['jam_mulai']);
    $jam_berakhir = mysqli_real_escape_string($sambungan, $_POST['jam_berakhir']);

    // Cek apakah file gambar diunggah
    if (!empty($_FILES['gambar']['name'])) {
        $gambar = $_FILES['gambar']['name'];
        $tmp_gambar = $_FILES['gambar']['tmp_name'];

        $gambar_data = file_get_contents($tmp_gambar);
    } else {
        // Jika tidak ada file yang diunggah, pertahankan foto lama
        $query_get_foto = "SELECT foto_profil FROM dokter WHERE id_dokter = ?";
        $stmt_get_foto = mysqli_prepare($sambungan, $query_get_foto);
        mysqli_stmt_bind_param($stmt_get_foto, "i", $id_dokter);
        mysqli_stmt_execute($stmt_get_foto);
        mysqli_stmt_bind_result($stmt_get_foto, $gambar_data);
        mysqli_stmt_fetch($stmt_get_foto);
        mysqli_stmt_close($stmt_get_foto);
    }

    $query_update = "UPDATE dokter SET nama_dokter=?, spesialisasi=?, jam_mulai=?, jam_berakhir=?, foto_profil=? WHERE id_dokter = ?";
    $stmt_update = mysqli_prepare($sambungan, $query_update);
    mysqli_stmt_bind_param($stmt_update, "sssssi", $nama_dokter, $spesialisasi, $jam_mulai, $jam_berakhir, $gambar_data, $id_dokter);
    $hasil_update = mysqli_stmt_execute($stmt_update);

    if ($hasil_update) {
        echo "Data dokter berhasil diperbarui. <a href='tampil_dokter_admin.php'>Kembali ke daftar dokter</a>";
    } else {
        echo "Gagal memperbarui data dokter: " . mysqli_error($sambungan);
    }

    mysqli_stmt_close($stmt_update);
    mysqli_close($sambungan);
} else {
    echo "Akses tidak sah!";
}
?>