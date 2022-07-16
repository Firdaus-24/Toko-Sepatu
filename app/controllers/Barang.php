<?php 
 
 class Barang extends Controller{
     public function index()
     {
        $data['judul'] = 'Barang';     
        $this->view('template/header' , $data);
        $this->view('barang/index');
        $this->view('template/footer');
     }
 }