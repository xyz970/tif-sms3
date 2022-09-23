<?php
include './Item.php';
class Topi extends Item{
    private $model;

    /**
     * Setter
     * Isi semua variable
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * Getter
     * Ambil isi dari semua variable
     */
    public function getModel()
    {
        return $this->model;
    }
}