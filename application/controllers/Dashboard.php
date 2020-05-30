<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
        $data = array(
            'title' => 'Home | Admin'
        );
        $this->load->view('admin/_header', $data);
        $this->load->view('admin/index');
        $this->load->view('admin/_footer');
    }

    public function penduduk()
	{
        $data = array(
            'title' => 'Penduduk | Admin'
        );
        $this->load->view('admin/_header', $data);
        $this->load->view('admin/penduduk');
        $this->load->view('admin/_footer');
    }

    public function surat()
	{
        $data = array(
            'title' => 'Surat | Admin'
        );
        $this->load->view('admin/_header', $data);
        $this->load->view('admin/surat');
        $this->load->view('admin/_footer');
    }

    public function berita()
	{
        $data = array(
            'title' => 'Berita | Admin'
        );
        $this->load->view('admin/_header', $data);
        $this->load->view('admin/berita');
        $this->load->view('admin/_footer');
    }

    public function user()
	{
        $data = array(
            'title' => 'User | Admin'
        );
        $this->load->view('admin/_header', $data);
        $this->load->view('admin/user');
        $this->load->view('admin/_footer');
    }
}