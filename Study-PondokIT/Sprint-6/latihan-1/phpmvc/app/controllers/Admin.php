<?php

class Admin extends Controller
{
    public function index()
    {
        $data['judul'] = 'Halaman Admin';
        $this->view('templates/admin', $data);
        $this->view('admin/index');
        $this->view('templates/footer');
    }
    
}