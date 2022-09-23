<?php
include './Item.php';
class Baju extends Item{
    private $tipe;

    /**
     * Setter
     * Isi semua variable
     */
    public function setTipe($tipe)
    {
        $this->tipe = $tipe;
    }

    /**
     * Getter
     * Ambil isi dari semua variable
     */
    public function getTipe()
    {
        return $this->tipe;
    }
}