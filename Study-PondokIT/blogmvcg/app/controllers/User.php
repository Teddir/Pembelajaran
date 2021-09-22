<?php

class User extends Controller
{
    public function index()
    {
        $data['judul'] = 'Daftar User';
        $data['usr'] = $this->model('User_model')->getUser();
        $this->view('templates/header', $data);
        $this->view('user/index', $data);
        $this->view('templates/footer');
    }
}