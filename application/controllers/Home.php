<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('Mhome');
    }
	public function index()
	{
        $data = array(
            'title' => 'Home | Desa Hulosobo'
        );
        $this->load->view('home/_header', $data);
        $this->load->view('home/index');
        $this->load->view('home/_footer');
    }

    public function struktur(){
        $data = array(
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
        
        $par=array(
			'perpage'=>$config['per_page'],
			'start'=>$start
		);

        $berita = $this->Mhome->getberita($par)->result();

        $data = array(
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
        $data = array(
            'title' => 'Berita | Desa Hulosobo',
            'dberita' => $dberita
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
