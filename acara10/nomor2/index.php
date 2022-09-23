<?php
include './Baju.php';
$baju = new Baju();
$baju->setNama("Baju Adidas");
$baju->setTipe("Kaos");
$baju->setWarna("Merah");
$baju->setUkuran("XL");

echo$baju->getNama()."<br>";
echo$baju->getTipe()."<br>";
echo$baju->getWarna()."<br>";
echo$baju->getUkuran()."<br>";
