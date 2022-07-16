<?php 

class Merk_model{
    private $table = 'merk';
    private $db;
    public function __construct()
    {
        $this->db = new  Database;
    }
    public function getAllMerk()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
    public function getMerkById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id' , $id);
        return $this->db->singel();
    }
    public function tambahDataMerk($data)
    {
        $query = "INSERT INTO merk 
                    VALUES 
                    (:id , :nama_merk)";
        $this->db->query($query);
        $this->db->bind('id' , $data['id']);
        $this->db->bind('nama_merk' , $data['nama_merk']);

        $this->db->execute();
        return $this->db->rowCount();
    }
    public function hapusDataMerk($id)
    {
        $query = "DELETE FROM merk WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id' , $id );

        $this->db->execute();
        return $this->db->rowCount();
    }
}