<?php
require('./koneksi.php');

$email = $_POST['email'];
$nama = $_POST['nama'];
$telepon = $_POST['telepon'];
$lahir = $_POST['lahir'];
$alamat = $_POST['alamat'];
$jk = $_POST['jk'];

$sql = "INSERT INTO `diri`(`nama`, `email`, `lahir`, `telepon`, `alamat`, `kelamin`) 
    VALUES ('$nama','$email','$lahir','$telepon','$alamat','$jk')";
$result = $koneksi->query($sql);
if ($result) {
    header('Location: ./../index.php?insert=success');
}
