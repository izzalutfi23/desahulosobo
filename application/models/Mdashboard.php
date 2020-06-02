<?php
    class Mdashboard extends CI_Model{
        
        public function getnama($user){
            $query = $this->db->get_where('user', array('username'=>$user))->row();
            return $query;
        }

        public function getpenduduk(){
            return $this->db->get('penduduk')->result();
        }

        public function inputpenduduk($data){
            $param = array(
                'nik' => $data['nik'],
                'gol_d' => $data['gol_d'],
                'nama' => $data['nama'],
                'tgl_lahir' => $data['tgl_lahir'],
                'tmp_lahir' => $data['tmp_lahir'],
                'j_kel' => $data['j_kel'],
                'alamat' => $data['alamat'],
                'rt_rw' => $data['rt_rw'],
                'kelurahan' => $data['kelurahan'],
                'kecamatan' => $data['kecamatan'],
                'agama' => $data['agama'],
                'pendidikan' => $data['pendidikan'],
                'sts_kawin' => $data['sts_kawin'],
                'pekerjaan' => $data['pekerjaan']
            );
            $this->db->insert('penduduk', $param);
        }

        public function editpenduduk($data){
            $param = array(
                'nama' => $data['nama'],
                'tgl_lahir' => $data['tgl_lahir'],
                'tmp_lahir' => $data['tmp_lahir'],
                'j_kel' => $data['j_kel'],
                'alamat' => $data['alamat'],
                'rt_rw' => $data['rt_rw'],
                'kelurahan' => $data['kelurahan'],
                'kecamatan' => $data['kecamatan'],
                'agama' => $data['agama'],
                'pendidikan' => $data['pendidikan'],
                'sts_kawin' => $data['sts_kawin'],
                'pekerjaan' => $data['pekerjaan']
            );
            $this->db->update('penduduk', $param, ['nik'=>$data['nik']]);
        }

        public function del_penduduk($nik){
            $this->db->where('nik', $nik);
            $this->db->delete('penduduk');
        }

        public function getsurat(){
            $this->db->join('penduduk', 'penduduk.nik=surat.nik');
            return $this->db->get('surat');
        }

        public function delsurat($id){
            $this->db->where('id_surat', $id);
            $this->db->delete('surat');
        }

        public function getberita(){
            return $this->db->get('berita');
        }

        public function addberita($data){
            $this->db->insert('berita', $data);
        }

        public function editberita($data){
            $this->db->update('berita', $data, ['id_berita'=>$data['id_berita']]);
        }

        public function delberita($id){
            $this->db->where('id_berita', $id);
            $this->db->delete('berita');
        }

        public function getuser(){
            return $this->db->get('user');
        }

        public function adduser($data){
            $param = array(
                'nama' => $data['nama'],
                'username' => $data['username'],
                'password' => md5($data['password'])
            );
            $this->db->insert('user', $param);
        }

        public function deluser($id){
            $this->db->where('id_user', $id);
            $this->db->delete('user');
        }
    }
?>