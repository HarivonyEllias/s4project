<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sport_controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Sport_model');
    }

	public function index() {
        redirect('Sport_controller/sport');
    }    
    
    public function sport($message = null) {
        $data['sports'] = $this->Sport_model->findAll();
        $this->load->view('sport.php', $data);
    }

    public function modifier_sport() {
        $this->load->view('modifier_sport.php');
    }

    public function update_sport() {
        try {
            $idSport = $this->input->get('idSport');
            $nom = $this->input->get('nom');
            $data = array(
                'nom' => $nom
            );
            $this->Sport_model->update($idSport,$data);
            redirect('Sport_controller/sport');
        } catch (Exception $e) {
            redirect('Sport_controller/update_sport'.urlencode($e->getMessage()));
        }
    }

    public function supprimer_sport($message = null) {
        $idSport = $this->input->get('idSport');
        $this->Sport_model->delete($idSport);
        redirect('Sport_controller/sport');
    }

    public function insert_sport($message = null) {
        $nom = $this->input->post('nom');
        $data = array(
            'nom' => $nom
        );
        $this->Sport_model->create($data);
        redirect('Sport_controller/sport');
    }
    
    

    
}