<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regime_controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Regime_model');
    }

	public function index() {
        redirect('Regime_controller/regime');
    }    
    
    public function regime($message = null) {
        $data['regimes'] = $this->Regime_model->findAll();
        $this->load->view('regime.php', $data);
    }

    public function modifier_regime() {
        $this->load->view('modifier_regime.php');
    }

    public function update_regime() {
        try {
            $idRegime = $this->input->get('idRegime');
            $menu = $this->input->get('menu');
            $description = $this->input->get('description');
            $prix = $this->input->get('prix');
            $data = array(
                'menu' => $menu,
                'description' => $description,
                'prix' => $prix
            );
            $this->Regime_model->update($idRegime,$data);
            redirect('Regime_controller/regime');
        } catch (Exception $e) {
            redirect('Regime_controller/update_regime'.urlencode($e->getMessage()));
        }
    }

    public function supprimer_regime($message = null) {
        $idRegime = $this->input->get('idRegime');
        $this->Regime_model->delete($idRegime);
        redirect('Regime_controller/regime');
    }

    public function insert_regime($message = null) {
        $menu = $this->input->get('menu');
        $description = $this->input->get('description');
        $prix = $this->input->get('prix');        
        $data = array(
            'menu' => $menu,
            'description' => $description,
            'prix' => $prix
        );
        $this->Regime_model->create($data);
        redirect('Regime_controller/regime');
    }
    
}