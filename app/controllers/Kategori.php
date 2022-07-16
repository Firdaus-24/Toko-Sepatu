<?php 

class Kategori extends Controller{
    public function index()
    {
        $data['judul'] = 'Kategori';
        $data['kategori'] = $this->model('Kategori_model')->getAllKategori();
        $this->view('template/header' , $data);
        $this->view('kategori/index' , $data);
        $this->view('template/footer');
    }
    public function tambah()
    {
        if ( $this->model('Kategori_model')->tambahDataKategori($_POST) > 0 ){
            Flasher::setFlash('Berhasil', 'ditambahkan', 'primary');
            header('Location: ' . BASEURL . '/kategori');
            exit;
        }else{
            Flasher::setFlash('Gagal', 'ditambahkan', 'primary');
            header('Location: ' . BASEURL . '/kategori');
            exit;
        }
    }
    public function hapus($id_kategori)
    {
        if ( $this->model('Kategori_model')->hapusDataKategori($id_kategori) > 0 ){
            Flasher::setFlash('Berhasil', 'dihapus', 'primary');
            header('Location: ' . BASEURL . '/kategori');
            exit;
        }else{
            Flasher::setFlash('Gagal', 'dihapus', 'primary');
            header('Location: ' . BASEURL . '/kategori');
            exit;
        }
    }
  
}