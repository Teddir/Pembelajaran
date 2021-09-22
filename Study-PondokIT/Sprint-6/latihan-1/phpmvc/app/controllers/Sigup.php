<?php

class Sigup extends Controller
{
    public function index()
    {
        $data['judul'] = 'Halaman Sigup';
        $data['log'] = $this->model('Sigup_model')->getAll();
        $this->view('templates/sigup', $data);
        $this->view('sigup/index', $data);
        $this->view('templates/footer');
    }
    
    public function tambah()
    {
        if ($this->model('Sigup_model')->sigup($_POST) > 0)
        {
            Flasher::setSigup('Berhasil ', ' Terimakasih ', 'success');
            header('Location: ' . BASEURL . '/Blog');
            exit;
        } else 
        {
            Flasher::setSigup('Gagal', ' Terimakasi ', 'danger');
            header('Location: ' . BASEURL . '/Sigup');
            exit;
        
        }
    }
}