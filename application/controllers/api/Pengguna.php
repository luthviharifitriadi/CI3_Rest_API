<?php

defined('BASEPATH') OR exit('No direct script access allowed');
use chriskacerguis\RestServer\RestController;

class Pengguna extends  RestController {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_pengguna', 'pengguna');
    }

    public function index_get(){

        //mencari bersarkan username
        $username = $this->get('username');
        //tampikan data pengguna
        if($username === null){
            $pengguna = $this->pengguna->getPengguna();
        }else{
              $pengguna = $this->pengguna->getPengguna($username);
        }

        if($pengguna){
            $this->response( [
                'status' => true,
                'data' => $pengguna
            ], 200 );
        }else {
            $this->response( [
                'status' => false,
                'message' => "Data Tidak Ditemukan"
            ], 404 );

        }
    }

}

/* End of file Controllername.php */
