<?php
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
class Crud extends Koneksi
{

    public function login($email, $password)
    {
        $sql = "select * from user_detail where `user_email` = :email && `user_password`= :password";
        $result = $this->koneksi->prepare($sql);
        $result->bindParam(':email', $email);
        $result->bindParam(':password', $password);
        $result->execute();
        if ($result) {
            return true;
        }else{
            return false;
        }
    }
    public function lihatData()
    {
        $sql = "select * from user_detail";
        $result = $this->koneksi->prepare($sql);
        $result->execute();
        return $result;
    }
    public function insertData($email, $password, $nama)
    {
        try {
            $sql = "INSERT INTO `user_detail`(`user_email`, `user_password`, `user_fullname`, `level`) VALUES (:email, :password , :nama,2)";
            $result = $this->koneksi->prepare($sql);
            $result->bindParam(':email', $email);
            $result->bindParam(':password', $password);
            $result->bindParam(':nama', $nama);
            $result->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
}