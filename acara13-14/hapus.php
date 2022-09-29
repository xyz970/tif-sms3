<?php
require('./koneksi.php');
$id = $_POST['id'];
$sql = "DELETE FROM `user_detail` WHERE id = '".$id."'";
$koneksi->query($sql);
header("Location: ./template/pages/home.php");