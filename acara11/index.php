<?php

interface HitungLuas
{
    public function hitungLuasPersegi();
    public function hitungLuasLingkaran();
    public function hitungLuasSegitiga();
}


class Lingkaran implements HitungLuas
{
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

class Persegi implements HitungLuas
{
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


class Segitiga implements HitungLuas
{
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
        $hasil = 1 / 2 * $this->getAlas() * $this->getTinggi();
        return $hasil;
    }

    public function hitungLuasLingkaran()
    {
        throw new Exception("Method tidak ada isinya!!", 1);
    }
}


$psg = new Persegi();
$sgtg = new Segitiga();
$lngkrn = new Lingkaran();
$lngkrn->setJariJari(50);
$sgtg->setAlas(20);
$sgtg->setTinggi(10);
$psg->setSisi(30);

echo "Luas Lingkaran: " . $lngkrn->hitungLuasLingkaran() . "<br>";
echo "Luas Persegi: " . $psg->hitungLuasPersegi() . "<br>";
echo "Luas Segitiga: " . $sgtg->hitungLuasSegitiga();
