<?php
    class Mdashboard extends CI_Model{
        public function getnama($user){
            $query = $this->db->get_where('user', array('username'=>$user))->row();
            return $query;
        }
    }
?>