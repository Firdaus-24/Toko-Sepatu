<?php 

class Kategori_model{
    private $table = 'kategori';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function getAllKategori()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
    public function tambahDataKategori($data)
    {
        $query = "INSERT INTO kategori 
                    VALUES
                    (:id_kategori , :nama_kategori)";
        $this->db->query($query);
        $this->db->bind('id_kategori' , $data['id_kategori'] );
        $this->db->bind('nama_kategori' , $data['nama_kategori'] );

        $this->db->execute();
        
        return $this->db->rowCount();
    }   
    public function hapusDataKategori($id_kategori)
    {
        $query = "DELETE FROM kategori WHERE id_kategori = :id_kategori";

        $this->db->query($query);
        $this->db->bind('id_kategori' , $id_kategori);

        $this->db->execute();
        return $this->db->rowCount();
    }
    public function ubah()
    {
        
    }
}