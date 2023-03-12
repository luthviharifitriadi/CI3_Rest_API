<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_pengguna extends CI_Model {

    public function getPengguna($username = null)
    {

        if($username === null){
            $this->db->select('*'); 
            $this->db->from('tbl_pengguna');
        }else{
            $this->db->select('*'); 
            $this->db->from('tbl_pengguna');
            $this->db->where('username', $username);

        }
       return $this->db->get()->result_array();
        
    }

    public function delete($username){
        $this->db->delete('tbl_pengguna', ['username' => $username]);
        return $this->db->affected_rows();
    }

    public function tambah($data){
        $this->db->insert('tbl_pengguna', $data);
        return  $this->db->affected_rows();
    }

    public function edit($data, $username){
        $this->db->update('tbl_pengguna', $data, ['username' => $username]);
        return  $this->db->affected_rows();
    }

}

/* End of file ModelName.php */
