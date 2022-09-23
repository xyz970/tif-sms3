<?php
include './Baju.php';
$baju = new Baju();
$baju->setNama("Baju Adidas");
$baju->setTipe("Kaos");
$baju->setWarna("Merah");
$baju->setUkuran("XL");

echo$baju->getNama();
echo$baju->getTipe();
echo$baju->getWarna();
echo$baju->getUkuran();