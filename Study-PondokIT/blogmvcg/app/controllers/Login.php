<?php

class Login extends Controller
{
    public function index()
    {
        $data['judul'] = 'Halaman Login';
        $data['log'] = $this->model('Login_model')->getTambah();
        $this->view('templates/login', $data);
        $this->view('login/index', $data);
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
}