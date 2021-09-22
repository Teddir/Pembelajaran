<?php
ini_set("display_errors", "1");
error_reporting(E_ALL);
class Artikel extends Controller
{
    public function index()
    {
        $data['judul'] = 'Daftar Artikel';
        $data['str'] = $this->model('Artikel_model')->getAllArtikel();
        $this->view('templates/header', $data);
        $this->view('Artikel/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Artikel';
        $data['str'] = $this->model('Artikel_model')->getId($id);
        $this->view('templates/header', $data);
        $this->view('Artikel/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Artikel_model')->tambahData($_POST) > 0)
        {
            Flasher::setflash('berhasil ', ' ditambahkan ', 'success');
            header('Location: ' . BASEURL . '/Artikel');
            exit;
        } else 
        {
            Flasher::setflash('gagal', ' ditambahkan ', 'danger');
            header('Location: ' . BASEURL . '/Artikel');
            exit;
        
        }
    }

    public function hapus($id)
    {
        if ($this->model('Artikel_model')->hapusData($id) > 0)
        {
            Flasher::setflash('berhasil ', ' dihapus ', 'success');
            header('Location: ' . BASEURL . '/Artikel');
            exit;
        } else 
        {
            Flasher::setflash('gagal', ' dihapus ', 'danger');
            header('Location: ' . BASEURL . '/Artikel');
            exit;
        
        }
    }

    public function getubah()
    {
        echo json_encode($this->model('Artikel_model')->getId($_POST['id']));
    }

    public function ubah()
    {
        try {
            //code...
            if ($this->model('Artikel_model')->ubahData($_POST) > 0)
            {
                Flasher::setflash('berhasil ', ' diUpdate ', 'success');
                header('Location: ' . BASEURL . '/Artikel');
                exit;
            } else 
            {
                Flasher::setflash('gagal', ' diUpdate ', 'danger');
                header('Location: ' .   BASEURL . '/Artikel');
                exit;
                
            }
            } catch (Execption $th) {
                $th->getMessage();
            }
    }

    public function cari()
    {
        $data['judul'] = 'Daftar Artikel';
        $data['str'] = $this->model('Artikel_model')->cariArtikel();
        $this->view('templates/header', $data);
        $this->view('Artikel/index', $data);
        $this->view('templates/footer');

    }

}