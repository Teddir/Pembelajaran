<?php
ini_set("display_errors", "1");
error_reporting(E_ALL);
class Santri extends Controller
{
    public function index()
    {
        $data['judul'] = 'Daftar Artikel';
        $data['str'] = $this->model('Santri_model')->getAllsantri();
        $this->view('templates/header', $data);
        $this->view('Santri/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Artikel';
        $data['str'] = $this->model('Santri_model')->getId($id);
        $this->view('templates/header', $data);
        $this->view('Santri/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Santri_model')->tambahData($_POST) > 0)
        {
            Flasher::setflash('berhasil ', ' ditambahkan ', 'success');
            header('Location: ' . BASEURL . '/Santri');
            exit;
        } else 
        {
            Flasher::setflash('gagal', ' ditambahkan ', 'danger');
            header('Location: ' . BASEURL . '/Santri');
            exit;
        
        }
    }

    public function hapus($id)
    {
        if ($this->model('Santri_model')->hapusData($id) > 0)
        {
            Flasher::setflash('berhasil ', ' dihapus ', 'success');
            header('Location: ' . BASEURL . '/Santri');
            exit;
        } else 
        {
            Flasher::setflash('gagal', ' dihapus ', 'danger');
            header('Location: ' . BASEURL . '/Santri');
            exit;
        
        }
    }

    public function getubah()
    {
        echo json_encode($this->model('Santri_model')->getId($_POST['id']));
    }

    public function ubah()
    {
        try {
            //code...
            if ($this->model('Santri_model')->ubahData($_POST) > 0)
            {
                Flasher::setflash('berhasil ', ' diUpdate ', 'success');
                header('Location: ' . BASEURL . '/Santri');
                exit;
            } else 
            {
                Flasher::setflash('gagal', ' diUpdate ', 'danger');
                header('Location: ' .   BASEURL . '/Santri');
                exit;
                
            }
            } catch (Execption $th) {
                $th->getMessage();
            }
    }

    public function cari()
    {
        $data['judul'] = 'Daftar Santri';
        $data['str'] = $this->model('Santri_model')->cariArtikel();
        $this->view('templates/header', $data);
        $this->view('Santri/index', $data);
        $this->view('templates/footer');

    }

}