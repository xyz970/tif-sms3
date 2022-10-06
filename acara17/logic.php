<?php
include './koneksi.php';
$files = $_FILES;
$jumlahFile = count($files['foto']['name']);
$folderUpload = "images";
for ($i = 0; $i < $jumlahFile; $i++) {
    $namaFile = $files['foto']['name'][$i];
    $lokasiTmp = $files['foto']['tmp_name'][$i];

    $lokasiBaru = "$folderUpload/$namaFile";
    $prosesUpload = move_uploaded_file($lokasiTmp, $lokasiBaru);
    $koneksi->query("INSERT INTO `gambar`(`gambar_nama`) VALUES ('$namaFile')");

    if ($prosesUpload) {
        echo "Upload file berhasil. <br>";
    } else {
        echo "<span style='color: red'>Upload file {$namaFile} gagal</span> <br>";
    }
}
?>
