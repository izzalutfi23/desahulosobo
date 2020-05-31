<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('Mdashboard');
        if(!$this->session->userdata('user')){
            redirect('login');
        }
    }

    public function index()
	{
        $nama = $this->Mdashboard->getnama($this->session->userdata('user'));
        $data = array(
            'title' => 'Home | Admin',
            'nama' => $nama
        );
        $this->load->view('admin/_header', $data);
        $this->load->view('admin/index');
        $this->load->view('admin/_footer');
    }

    public function penduduk()
	{
        $nama = $this->Mdashboard->getnama($this->session->userdata('user'));
        $penduduk = $this->Mdashboard->getpenduduk();
        $data = array(
            'title' => 'Penduduk | Admin',
            'nama' => $nama,
            'penduduk' => $penduduk
        );
        $this->load->view('admin/_header', $data);
        $this->load->view('admin/penduduk');
        $this->load->view('admin/_footer');
    }

    // Fungsi untuk menambah data penduduk
    public function add_penduduk(){
        $input = $this->input->post(NULL, false);
        $this->Mdashboard->inputpenduduk($input);
        redirect('dashboard/penduduk');
    }

    public function surat()
	{
        $nama = $this->Mdashboard->getnama($this->session->userdata('user'));
        $data = array(
            'title' => 'Surat | Admin',
            'nama' => $nama
        );
        $this->load->view('admin/_header', $data);
        $this->load->view('admin/surat');
        $this->load->view('admin/_footer');
    }

    public function berita()
	{
        $nama = $this->Mdashboard->getnama($this->session->userdata('user'));
        $data = array(
            'title' => 'Berita | Admin',
            'nama' => $nama
        );
        $this->load->view('admin/_header', $data);
        $this->load->view('admin/berita');
        $this->load->view('admin/_footer');
    }

    public function user()
	{
        $nama = $this->Mdashboard->getnama($this->session->userdata('user'));
        $data = array(
            'title' => 'User | Admin',
            'nama' => $nama
        );
        $this->load->view('admin/_header', $data);
        $this->load->view('admin/user');
        $this->load->view('admin/_footer');
    }
}