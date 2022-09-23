<?php
include './Tablet.php';
class Handphone extends Tablet{
    public function beliHandphone()
    {
        echo "Merk : ".$this->getMerk()."<br>";
        echo "Tipe Kamera : ".$this->getCamera()."<br>";
        echo "Kapasitas Memori : ".$this->getMemori()."<br>";
    }
}