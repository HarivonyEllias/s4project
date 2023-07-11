<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Objectif_controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Objectif_model');
    }

	public function index() {
        redirect('Objectif_controller/objectif');
    }    
    
    public function objectif($message = null) {
        $data['objectifs'] = $this->Objectif_model->findAll();
        $this->load->view('objectif.php', $data);
    }

    public function modifier_objectif() {
        $this->load->view('modifier_objectif.php');
    }

    public function update_objectif() {
        try {
            $idobjectif = $this->input->post('idobjectif');
            $nom = $this->input->post('nom');
            $data = array(
                'nom' => $nom
            );
            $this->Objectif_model->update($idobjectif, $data);
            redirect('Objectif_controller/objectif');
        } catch (Exception $e) {
            redirect('Objectif_controller/update_objectif'.urlencode($e->getMessage()));
        }
    }
    

    public function supprimer_objectif($message = null) {
        $idobjectif = $this->input->get('idobjectif');
        $this->Objectif_model->delete($idobjectif);
        redirect('Objectif_controller/objectif');
    }

    public function ajouter_objectif() {
        $this->load->view('ajouter_objectif.php');
    }

    public function insert_objectif($message = null) {
        $nom = $this->input->post('nom');
        $data = array(
            'nom' => $nom
        );
        $this->Objectif_model->create($data);
        redirect('Objectif_controller/objectif');
    }
    
}