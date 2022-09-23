<?php
class Item{
    private $ukuran;
    private $nama;
    private $warna;

    /**
     * Setter
     * Isi semua variable
     */
    public function setUkuran($ukuran)
    {
        $this->ukuran = $ukuran;
    }

    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function setWarna($warna)
    {
        $this->warna = $warna;
    }

    /**
     * Getter
     * Ambil isi dari semua variable
     */
    public function getUkuran()
    {
        return $this->ukuran;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function getWarna()
    {
        return $this->warna;
    }
}