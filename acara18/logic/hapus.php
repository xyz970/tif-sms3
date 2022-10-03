<?php
require('./koneksi.php');
$id = $_GET['id'];
$sql = "DELETE FROM `diri` WHERE `id` = '$id'";

$result = $koneksi->query($sql);
if ($result) {
    header('Location: ./../index.php?delete=success');
}