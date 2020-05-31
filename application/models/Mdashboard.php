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
                'pin' => random_string('alnum', 5),
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
    }
?>