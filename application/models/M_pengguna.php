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

    

}

/* End of file ModelName.php */
