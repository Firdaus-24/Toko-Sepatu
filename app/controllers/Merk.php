<?php 

class Merk extends Controller{
    public function index()
    {
        $data['judul'] = 'Merk';
        $data['merk'] = $this->model('Merk_model')->getAllMerk();
        $this->view('template/header' , $data);
        $this->view('merk/index' , $data);
        $this->view('template/footer');
    }
    public function detail($id)
    {
        $data['judul'] = 'Detail Merk';
        $data['merk'] = $this->model('Merk_model')->getMerkByid($id);
        $this->view('template/header' , $data);
        $this->view('merk/detail' , $data);
        $this->view('template/footer');
    }
    public function tambah()
    {
        if ( $this->model('Merk_model')->tambahDataMerk($_POST) > 0 ){
            Flasher::setFlash('Berhasil', 'ditambahkan', 'primary');
            header('Location: ' . BASEURL . '/merk');
            exit;
        }else{
            Flasher::setFlash('Gagal', 'ditambahkan', 'primary');
            header('Location: ' . BASEURL . '/merk');
            exit;
        }
    }
    public function hapus($id)
    {
        if ( $this->model('Merk_model')->hapusDataMerk($id) > 0 ){
            Flasher::setFlash('Berhasil', 'dihapus', 'primary');
            header('Location: ' . BASEURL . '/merk');
            exit;
        }else{
            Flasher::setFlash('Gagal', 'dihapus', 'primary');
            header('Location: ' . BASEURL . '/merk');
            exit;
        }
    }
}