<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
        $data = array(
            'title' => 'Home | Desa Hulosobo'
        );
        $this->load->view('home/_header', $data);
        $this->load->view('home/index');
        $this->load->view('home/_footer');
    }
    
    public function berita()
	{
        $data = array(
            'title' => 'Berita | Desa Hulosobo'
        );
        $this->load->view('home/_header', $data);
        $this->load->view('home/berita');
        $this->load->view('home/_footer');
    }
    
    public function newsdetail()
	{
        $data = array(
            'title' => 'Berita | Desa Hulosobo'
        );
        $this->load->view('home/_header', $data);
        $this->load->view('home/berita_detail');
        $this->load->view('home/_footer');
    }
    
    public function data()
	{
        $data = array(
            'title' => 'Data | Desa Hulosobo'
        );
        $this->load->view('home/_header', $data);
        $this->load->view('home/data_desa');
        $this->load->view('home/_footer');
    }
    
    public function kontak()
	{
        $data = array(
            'title' => 'Kontak | Desa Hulosobo'
        );
        $this->load->view('home/_header', $data);
        $this->load->view('home/kontak');
	}
}
