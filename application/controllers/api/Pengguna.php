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
            ], RestController::HTTP_OK );
        }else {
            $this->response( [
                'status' => false,
                'message' => "Data Tidak Ditemukan"
            ], RestController::HTTP_BAD_REQUEST );

        }
    }

    public function index_delete()
    {
        $username = $this->delete('username');

        if($username === null){
            $this->response( [
                'status' => false,
                'message' => "provide and username!"
            ],  RestController::HTTP_BAD_REQUEST );
        }else {
            if($this->pengguna->delete($username) > 0){
                //0k
                $this->response( [
                    'status' => true,
                    'username' => $username,
                    'message' => 'Berhasil di delete'
                ], 204 );
            }else{
                //username not found
                $this->response( [
                    'status' => false,
                    'message' => "Username not found"
                ], RestController::HTTP_BAD_REQUEST );
            }
        }
    }

    public function index_post()
    {
        $data = [
            'username' => $this->post('username'),
            'id_pemilik' => $this->post('id_pemilik'),
            'tgl_daftar' => $this->post('tgl_daftar'),
            'password'   => $this->post('password'),
            'nama_pengguna' => $this->post('nama_pengguna'),
            'hak_akses'   => $this->post('hak_akses')
        ];

        if($this->pengguna->tambah($data) > 0) {
            //0k
            $this->response( [
                'status' => true,
                'message' => 'pengguna berhasi ditambahkan'
            ], 204 );
        }else{
            //username not found
            $this->response( [
                'status' => false,
                'message' => "data gagal ditamabhkan"
            ], RestController::HTTP_BAD_REQUEST );
        }
    }

    public function index_put()
    {
        $username = $this->put('username');
          $data = [
            'id_pemilik' => $this->put('id_pemilik'),
            'tgl_daftar' => $this->put('tgl_daftar'),
            'password'   => $this->put('password'),
            'nama_pengguna' => $this->put('nama_pengguna'),
            'hak_akses'   => $this->put('hak_akses')
        ];

        
        if($this->pengguna->edit($data, $username) > 0) {
            //0k
            $this->response( [
                'status' => true,
                'message' => 'pengguna berhasil diedit'
            ], 200 );
        }else{
            //username not found
            $this->response( [
                'status' => false,
                'message' => "data gagal diedit"
            ], RestController::HTTP_BAD_REQUEST );
        }


    }





}

/* End of file Controllername.php */
