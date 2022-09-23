<?php
class Tablet {
    protected $merk, $camera, $memory;
    /**
     * Setter
     * Isi semua variable
     */
    public function setMerk($merk)
    {
        $this->merk = $merk;
    }

    public function setCamera($camera)
    {
        $this->camera = $camera;
    }

    public function setMemori($memory)
    {
        $this->memory = $memory;
    }

    /**
     * Getter
     * Ambil isi dari semua variable
     */
    public function getMerk()
    {
        return $this->merk;
    }

    public function getCamera()
    {
        return $this->camera;
    }

    public function getMemori()
    {
        return $this->memory;
    }
}
