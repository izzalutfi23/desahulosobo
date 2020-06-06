<?php
    class Mhome extends CI_Model{
        public function getberita($par){
            if($par['cari']!=null){
                $this->db->like('judul', $par['cari']);
            }
            $this->db->order_by('id_berita', 'desc');
            return $this->db->get('berita', $par['perpage'], $par['start']);
        }

        public function getdberita($slug){
            $this->db->where('slug', $slug);
            $query = $this->db->get('berita');
            return $query;
        }

        public function getbbaru(){
            $this->db->order_by('id_berita', 'desc');
            $this->db->limit(7);
            return $this->db->get('berita');
        }

        public function regis($data){
            $param = array(
                'role' => 'umum',
                'nama' => $data['nama'],
                'username' => $data['username'],
                'password' => md5($data['password'])
            );
            $this->db->insert('user', $param);
        }

        public function getnama($user){
            $this->db->where('username', $user);
            return $this->db->get('user')->row();
        }

        public function getpenduduk(){
            return $this->db->get('penduduk');
        }

        public function addlaporan($data){
            $param = array(
                'id_user' => $data['id_user'],
                'email' => $data['email'],
                'id_surat' => $data['id_surat'],
                'pesan' => $data['pesan'],
                'tgl' => date('Y-m-d')
            );
            $this->db->insert('laporan', $param);
        }

        public function getlaporan($id){
            $this->db->where('laporan.id_user', $id);
            $this->db->join('user', 'user.id_user=laporan.id_user');
            $this->db->join('surat', 'surat.id_surat=laporan.id_surat');
            return $this->db->get('laporan');
        }

        public function getjsurat(){
            return $this->db->get('surat');
        }
    }
?>