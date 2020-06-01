<?php
    class Mhome extends CI_Model{
        public function getberita($par){
            $this->db->order_by('id_berita', 'desc');
            return $this->db->get('berita', $par['perpage'], $par['start']);
        }

        public function getdberita($slug){
            $this->db->where('slug', $slug);
            $query = $this->db->get('berita');
            return $query;
        }
    }
?>