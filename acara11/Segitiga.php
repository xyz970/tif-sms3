<?php

include './HitungLuas.php';

class Segitiga implements HitungLuas{
    private $alas;
    private $tinggi;
    /**
     * Setter
     * Isi semua variable
     */
    public function setAlas($alas)
    {
        $this->alas = $alas;
    }
    public function setTinggi($tinggi)
    {
        $this->tinggi = $tinggi;
    }

    /**
     * Getter
     * Ambil isi dari semua variable
     */
    public function getAlas()
    {
        return $this->alas;
    }
    public function getTinggi()
    {
        return $this->tinggi;
    }

    public function hitungLuasPersegi()
    {
        throw new Exception("Method tidak ada isinya!!", 1);
        
    }
    
    public function hitungLuasSegitiga()
    {
        $hasil = 1/2 * $this->getAlas() * $this->getTinggi();
        return $hasil;
    }

    public function hitungLuasLingkaran()
    {
        throw new Exception("Method tidak ada isinya!!", 1);
    }
}