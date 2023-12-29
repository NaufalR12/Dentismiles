<?php
include('koneksi.php');

if (isset($_GET['selected_time'])) {
    $selectedTime = $_GET['selected_time'];

    // Perform a query to get available doctors based on the selected time
    $query = "SELECT * FROM dokter WHERE '$selectedTime' BETWEEN jam_mulai AND DATE_SUB(jam_berakhir, INTERVAL 30 MINUTE)";
    $result = $connect->query($query);

    // Build the options for the dropdown
    $options = '<option value="" disabled selected>Pilih Dokter</option>';
    while ($row = $result->fetch_assoc()) {
        $options .= '<option value="' . $row['id_dokter'] . '">' . $row['nama_dokter'] .' - '. $row['spesialisasi'] . '</option>';
    }

    // Return the options to the JavaScript
    echo $options;
}
?>