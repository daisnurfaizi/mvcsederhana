<?php
//membuat model untuk menampilkan data
class Mahasiswa_model{
    //databse handler
    private $dbh;
    // untuk menyimpan querry
    private $stmt;
    public function __construct(){
        //data source name
        $dsn = 'mysql:host=localhost;dbname=phpmvc';
        //catch error koneksi ke database
        try{
            $this->dbh = new PDO($dsn,'root','');
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }
    public function getAllMahasiswa(){
        //perintah sql
        $this->stmt = $this->dbh->prepare('Select * from mahasiswa');
        //execute sql;
        $this->stmt->execute();
        //mengambil semua data
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}