<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('Auth');
    }
    
	public function index()
	{
        $this->load->view('login');
    }

    public function auth(){
        $user=$_POST['username'];
        $pass=md5($_POST['password']);
        $query=$this->Auth->cek($user,$pass);
        $cek=$query->num_rows();
        $data = $query->row();
        if($cek>0){
            if($data->role=="admin"){
                $this->session->set_userdata(array('user'=>$user, 'role'=>$data->role));
                redirect('dashboard');
            }
            else{
                $this->session->set_userdata(array('user'=>$user, 'role'=>$data->role));
                $this->session->set_flashdata('login', 'Berhasil Melakukan Login');
                redirect('home');
            }
        }
        else{
            redirect('login');
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('home');
    }
}