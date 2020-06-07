<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('Mhome');
    }
	public function index()
	{
        $beritabaru = $this->Mhome->getbbaru()->result();
        $nama = $this->Mhome->getnama($this->session->userdata('user'));
        $data = array(
            'nama' => $nama,
            'title' => 'Home | Desa Hulosobo',
            'bbaru' => $beritabaru
        );
        $this->load->view('home/_header', $data);
        $this->load->view('home/index');
        $this->load->view('home/_footer');
    }

    public function struktur(){
        $nama = $this->Mhome->getnama($this->session->userdata('user'));
        $data = array(
            'nama' => $nama,
            'title' => 'Struktur Organisasi | Desa Hulosobo'
        );
        $this->load->view('home/_header', $data);
        $this->load->view('home/struktur');
    }
    
    public function berita()
	{
        $row=$this->db->get('berita')->num_rows();
        $config['base_url'] = base_url('home/berita');
		$config['total_rows'] = $row;
		$config['per_page'] = 3;

		$config['first_link']       = 'First';
                $config['last_link']        = 'Last';
                $config['next_link']        = 'Next';
                $config['prev_link']        = 'Prev';
                $config['full_tag_open']    = '<nav class="blog-pagination justify-content-center d-flex"><ul class="pagination">';
                $config['full_tag_close']   = '</ul></nav>';
                $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
                $config['num_tag_close']    = '</span></li>';
                $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
                $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
                $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
                $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
                $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
                $config['prev_tagl_close']  = '</span>Next</li>';
                $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
                $config['first_tagl_close'] = '</span></li>';
                $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
                $config['last_tagl_close']  = '</span></li>';

		$start=$this->uri->segment(3);
        $this->pagination->initialize($config);

        $cari=null;
		if(isset($_POST['cari'])){
			$cari=$_POST['cari'];
		}
        
        $par=array(
			'perpage'=>$config['per_page'],
            'start'=>$start,
            'cari'=>$cari 
		);

        $berita = $this->Mhome->getberita($par)->result();

        $beritabaru = $this->Mhome->getbbaru()->result();
        $nama = $this->Mhome->getnama($this->session->userdata('user'));
        $data = array(
            'bbaru' => $beritabaru,
            'nama' => $nama,
            'title' => 'Berita | Desa Hulosobo',
            'berita' => $berita
        );
        $this->load->view('home/_header', $data);
        $this->load->view('home/berita');
        $this->load->view('home/_footer');
    }
    
    public function newsdetail($slug)
	{
        $dberita = $this->Mhome->getdberita($slug)->row();
        $beritabaru = $this->Mhome->getbbaru()->result();
        $nama = $this->Mhome->getnama($this->session->userdata('user'));
        $data = array(
            'bbaru' => $beritabaru,
            'nama' => $nama,
            'title' => $dberita->judul,
            'dberita' => $dberita
        );
        $this->load->view('home/_header', $data);
        $this->load->view('home/berita_detail');
        $this->load->view('home/_footer');
    }
    
    public function data_pendidikan()
	{
        $beritabaru = $this->Mhome->getbbaru()->result();
        $nama = $this->Mhome->getnama($this->session->userdata('user'));
        $penduduk = $this->Mhome->getpenduduk()->result();
        $data = array(
            'bbaru' => $beritabaru,
            'nama' => $nama,
            'title' => 'Data Pendidikan | Desa Hulosobo',
            'penduduk' => $penduduk
        );
        $this->load->view('home/_header', $data);
        $this->load->view('home/data_pendidikan');
        $this->load->view('home/_footer');
    }

    public function data_jkel()
	{
        $beritabaru = $this->Mhome->getbbaru()->result();
        $nama = $this->Mhome->getnama($this->session->userdata('user'));
        $penduduk = $this->Mhome->getpenduduk()->result();
        $data = array(
            'bbaru' => $beritabaru,
            'nama' => $nama,
            'title' => 'Data Jenis Kelamin | Desa Hulosobo',
            'penduduk' => $penduduk
        );
        $this->load->view('home/_header', $data);
        $this->load->view('home/data_jkel');
        $this->load->view('home/_footer');
    }

    public function data_gold()
	{
        $beritabaru = $this->Mhome->getbbaru()->result();
        $nama = $this->Mhome->getnama($this->session->userdata('user'));
        $penduduk = $this->Mhome->getpenduduk()->result();
        $data = array(
            'bbaru' => $beritabaru,
            'nama' => $nama,
            'title' => 'Data Golongan Darah | Desa Hulosobo',
            'penduduk' => $penduduk
        );
        $this->load->view('home/_header', $data);
        $this->load->view('home/data_gold');
        $this->load->view('home/_footer');
    }

    public function data_perkawinan()
	{
        $beritabaru = $this->Mhome->getbbaru()->result();
        $nama = $this->Mhome->getnama($this->session->userdata('user'));
        $penduduk = $this->Mhome->getpenduduk()->result();
        $data = array(
            'bbaru' => $beritabaru,
            'nama' => $nama,
            'title' => 'Data Perkawinan | Desa Hulosobo',
            'penduduk' => $penduduk
        );
        $this->load->view('home/_header', $data);
        $this->load->view('home/data_perkawinan');
        $this->load->view('home/_footer');
    }
    
    public function kontak()
	{
        $nama = $this->Mhome->getnama($this->session->userdata('user'));
        $data = array(
            'nama' => $nama,
            'title' => 'Kontak | Desa Hulosobo'
        );
        $this->load->view('home/_header', $data);
        $this->load->view('home/kontak');
    }
    
    public function registrasi()
	{
        $nama = $this->Mhome->getnama($this->session->userdata('user'));
        $data = array(
            'nama' => $nama,
            'title' => 'Registrasi | Desa Hulosobo'
        );
        $this->load->view('home/_header', $data);
        $this->load->view('home/registrasi');
    }
    
    public function proses_registrasi(){
        $input = $this->input->post(NULL, false);
        $this->Mhome->regis($input);
        $this->session->set_flashdata('registrasi', 'Silahkan login menggunakan username dan password yg telah anda buat');
        redirect('home/registrasi');
    }

    public function profil()
	{
        $beritabaru = $this->Mhome->getbbaru()->result();
        $nama = $this->Mhome->getnama($this->session->userdata('user'));
        $data = array(
            'bbaru' => $beritabaru,
            'nama' => $nama,
            'title' => 'Profil | Desa Hulosobo'
        );
        $this->load->view('home/_header', $data);
        $this->load->view('home/profil');
        $this->load->view('home/_footer');
    }

    public function surat()
	{
        $nama = $this->Mhome->getnama($this->session->userdata('user'));
        $jsurat = $this->Mhome->getjsurat()->result();
        $laporan = $this->Mhome->getlaporan($nama->id_user);
        $data = array(
            'nama' => $nama,
            'title' => 'Permohonan Surat | Desa Hulosobo',
            'jsurat' => $jsurat,
            'laporan' => $laporan->result()
        );
        $this->load->view('home/_header', $data);
        $this->load->view('home/surat');
    }

    public function add_laporan(){
        $input = $this->input->post(NULL, false);
        $this->Mhome->addlaporan($input);
        $this->session->set_flashdata('surat', 'Permohonan surat berhasil dibuat, silahkan download dengan klik tombol download dibawah!');
        redirect('home/surat');
    }

    public function laporan_pdf(){

        $data = array(
            "dataku" => array(
                "nama" => "Petani Kode",
                "url" => "http://petanikode.com"
            )
        );
    
        $this->load->library('pdf');
    
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "laporan-petanikode.pdf";
        $this->pdf->load_view('home/laporan_pdf', $data);
    }
}
