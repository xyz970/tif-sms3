<?php
include './HitungLuas.php';
class Persegi implements HitungLuas{
    private $sisi;
    /**
     * Setter
     * Isi semua variable
     */
    public function setSisi($sisi)
    {
        $this->sisi = $sisi;
    }

    /**
     * Getter
     * Ambil isi dari semua variable
     */
    public function getSisi()
    {
        return $this->sisi;
    }

    public function hitungLuasPersegi()
    {
        $luas = 4 * $this->getSisi();
        return $luas;
        
    }
    
    public function hitungLuasSegitiga()
    {
        throw new Exception("Method tidak ada isinya!!", 1);
    }

    public function hitungLuasLingkaran()
    {
        throw new Exception("Method tidak ada isinya!!", 1);
    }
    
}