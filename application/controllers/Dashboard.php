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
            'title' => 'Data Penduduk',
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

    // Fungsi untuk edit data penduduk
    public function edit_penduduk(){
        $input = $this->input->post(NULL, false);
        $this->Mdashboard->editpenduduk($input);
        redirect('dashboard/penduduk');
    }

    // Fungsi hapus data penduduk
    public function del_penduduk($nik){
        $this->Mdashboard->del_penduduk($nik);
        redirect('dashboard/penduduk');
    }

    public function surat()
	{
        $nama = $this->Mdashboard->getnama($this->session->userdata('user'));
        $surat = $this->Mdashboard->getsurat()->result();
        $data = array(
            'title' => 'Data Permohonan Surat',
            'nama' => $nama,
            'surat' => $surat
        );
        $this->load->view('admin/_header', $data);
        $this->load->view('admin/surat');
        $this->load->view('admin/_footer');
    }

    public function del_surat($id_surat){
        $this->Mdashboard->delsurat($id_surat);
        redirect('dashboard/surat');
    }

    public function berita()
	{
        $nama = $this->Mdashboard->getnama($this->session->userdata('user'));
        $berita = $this->Mdashboard->getberita()->result();
        $data = array(
            'title' => 'Data Berita',
            'nama' => $nama,
            'berita' => $berita
        );
        $this->load->view('admin/_header', $data);
        $this->load->view('admin/berita');
        $this->load->view('admin/_footer');
    }

    public function add_berita(){
        $config['upload_path']	 = './assets/image/berita';
	 	$config['allowed_types'] = 'gif|jpg|png';
	 	$config['max_size']	 = 10000;
	 	$config['max_width']	 = 10240;
        $config['max_height']	 = 5000;
         
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto')){

            //Buat slug
            $judul=$this->input->post('judul');
            $string= preg_replace("/[^a-zA-Z0-9 ]/", "", $judul);
            $trim=trim($string);
            $pre_slug=strtolower(str_replace(" ", "-", $trim));
            $slug=$pre_slug.'.html';

            $data = array(
                'judul' => $this->input->post('judul'),
                'foto' => $_FILES['foto']['name'],
                'isi' => $this->input->post('isi'),
                'penulis' => $this->input->post('penulis'),
                'tgl' => date('Y-m-d'),
                'slug' => $slug
            );
            $this->Mdashboard->addberita($data);
            redirect('dashboard/berita');
        }
        else{
            echo "Gagal upload gambar";
        }
    }

    public function edit_berita(){
        $config['upload_path']	 = './assets/image/berita';
	 	$config['allowed_types'] = 'gif|jpg|png';
	 	$config['max_size']	 = 10000;
	 	$config['max_width']	 = 10240;
        $config['max_height']	 = 5000;
         
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto')){
            $data = array(
                'id_berita' => $this->input->post('id_berita'),
                'judul' => $this->input->post('judul'),
                'foto' => $_FILES['foto']['name'],
                'isi' => $this->input->post('isi'),
                'penulis' => $this->input->post('penulis'),
                'tgl' => date('Y-m-d')
            );
            $this->Mdashboard->editberita($data);
        }
        else{
            $data = array(
                'id_berita' => $this->input->post('id_berita'),
                'judul' => $this->input->post('judul'),
                'isi' => $this->input->post('isi'),
                'penulis' => $this->input->post('penulis'),
                'tgl' => date('Y-m-d')
            );
            $this->Mdashboard->editberita($data);
        }
        redirect('dashboard/berita');
    }

    public function del_berita($id_berita){
        $this->Mdashboard->delberita($id_berita);
        redirect('dashboard/berita');
    }

    public function user()
	{
        $nama = $this->Mdashboard->getnama($this->session->userdata('user'));
        $user = $this->Mdashboard->getuser()->result();
        $data = array(
            'title' => 'User | Admin',
            'nama' => $nama,
            'user' => $user
        );
        $this->load->view('admin/_header', $data);
        $this->load->view('admin/user');
        $this->load->view('admin/_footer');
    }

    public function add_user(){
        $input = $this->input->post(NULL, false);
        $this->Mdashboard->adduser($input);
        redirect('dashboard/user');
    }

    public function del_user($id_user){
        $this->Mdashboard->deluser($id_user);
        redirect('dashboard/user');
    }
}
