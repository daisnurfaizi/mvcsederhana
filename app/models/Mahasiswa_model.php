<?php
//membuat model untuk menampilkan data
class Mahasiswa_model{
    // memnuat objek nama table
    private $table = 'mahasiswa';
    //membuat penampung data
    private $db;
    public function __construct(){
        $this->db = new Database;
    }
    public function getAllMahasiswa(){
        $this->db->query('Select * from '.$this->table);
        return $this->db->resultSet();
    }
    public function getMahasiswaById($id){
        $this->db->query('Select * from '.$this->table.' where id=:id ');
        $this->db->bind('id',$id);
        return $this->db->single();
    }
}