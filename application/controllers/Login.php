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
        $query=$this->Auth->cek($user,$pass)->row();
        $cek=count($query);
        if($cek>0){
            $this->session->set_userdata('user', $user);
            redirect('dashboard');
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