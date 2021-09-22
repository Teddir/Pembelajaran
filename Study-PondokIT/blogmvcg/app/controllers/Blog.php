<?php

class Blog extends Controller
{
    public function index()
    {
        $data['judul'] = 'Blog';
        $this->view('templates/blog', $data);
        $this->view('blog/index');
        $this->view('templates/footer');
    }
    
}