<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProfilR extends CI_Controller {

    public function index () {
        $this->load->model('Code_model');

        if ($this->Code_model->findAll() > 0){
            $codes = $this->Code_model->findAll();
            $data['codes'] = $codes;
            $this->load->view('profil', $data);
        } else $this->load->view('profil', $data);
    }
}