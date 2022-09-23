<?php

include './HitungLuas.php';

class Lingkaran implements HitungLuas{
    private $r;
    /**
     * Setter
     * Isi semua variable
     */
    public function setJariJari($r)
    {
        $this->r = $r;
    }

    /**
     * Getter
     * Ambil isi dari semua variable
     */
    public function getJariJari()
    {
        return $this->r;
    }

    public function hitungLuasLingkaran()
    {
        $luas = 3.14 * $this->getJariJari() * $this->getJariJari();
        return $luas;
        
    }
    
    public function hitungLuasSegitiga()
    {
        throw new Exception("Method tidak ada isinya!!", 1);
    }

    public function hitungLuasPersegi()
    {
        throw new Exception("Method tidak ada isinya!!", 1);
    }
}