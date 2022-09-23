<?php
include './Item.php';
class Celana extends Item{
    private $model;
    private $tipe;

    /**
     * Setter
     * Isi semua variable
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    public function setTipe($tipe)
    {
        $this->tipe = $tipe;
    }

    /**
     * Getter
     * Ambil isi dari semua variable
     */
    public function getModel()
    {
        return $this->model;
    }

    public function getTipe()
    {
        return $this->tipe;
    }
}