<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function about()
	{
		$this->load->view('about');
	}
	public function contact()
	{
		$this->load->view('contact');
	}
	public function datadiri()
	{
		$this->load->view('datadiri');
	}
	public function pengalaman()
	{
		$this->load->view('pengalaman');
	}
	public function container()
	{
		$this->load->view('container');
	}
}
