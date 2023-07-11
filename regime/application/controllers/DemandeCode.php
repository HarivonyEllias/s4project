<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DemandeCode extends CI_Controller {

    public function index () {
        session_start();
        $user = $_SESSION['user'];
        $this->load->model('Demandecode_model');
        $this->load->model('Code_model');
        $code = $this->input->post('code');

        $data = array(
            "idutilisateur" => (int)$user->id,
            "idcode" => (int)($this->Code_model->findByCode($code))->id
        );
        $this->Demandecode_model->create($data);

        redirect('ProfilR', [$msg => "demande en attente"]);
    }
}