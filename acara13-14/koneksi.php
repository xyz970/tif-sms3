<?php

/**
 * Buat koneksi
 * $server = "localhost"
 * $username = "root";
 * $password = "";
 * $db = "native";
 */
// $server = "localhost";
// $username = "adi_sptro";
// $password = "12345678";
// $db = "user";
// $koneksi = mysqli_connect($server, $username, $password, $db);

// if (mysqli_connect_error()) {
//     echo "Koneksi gagal " . mysqli_connect_error();
// }

class Koneksi
{
    private $server = "localhost";
    private $username = "adi_sptro";
    private $password = "12345678";
    private $db = "user";
    protected $koneksi;
    public function __construct() {
        //DSN (Data Source Name)
        $dsn = "mysql:host=$this->server;dbname=$this->db";
        try {
            $this->koneksi = new PDO($dsn,$this->username,$this->password);
            $this->koneksi->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
        return $this->koneksi;
    }
}
