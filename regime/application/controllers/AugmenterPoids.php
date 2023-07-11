<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AugmenterPoids extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ObjUser_model');
        $this->load->model('User_model');
    }

	public function index () {
        $this->load->helper('proposer_helper');
        $this->load->helper('utils_helper');

        session_start();
        $user = $_SESSION['user'];
        // creation objectif de l utilisateur
        $data = array(
            "idobjectif" => (int)$this->input->get('objectif'),
            "idutilisateur" => $user->id,
            "kilos" => (float)$this->input->get('kilos'),
        );
        $this->ObjUser_model->create($data);
        
        // obtention de cet objectif courant de l'utilisateur
        $objuser = $this->User_model->getLastObjectifUtilisateur($user);
        

        // generation proposition pour l utilisateur
        $propositions = propose($objuser);
        for ($i=0; $i <count($propositions) ; $i++) { 
            $propositions[$i]->regime = getRegimeById($propositions[$i]->idregime); 
            $propositions[$i]->sport = getSportById($propositions[$i]->idSport); 
        }
        $redirectUrl = '/HomeR?proposition=' . urlencode(serialize($propositions));
        redirect($redirectUrl);
        
    }
    
    public function log($message = null) {
        $this->load->view('log.php', ['error_message' => urldecode($message)]);
    }


    public function login() {
        try {
            $email = $this->input->get('email');
            $password = $this->input->get('password');
            $this->user_model->login($email, $password);
            redirect('HomeR/index');
        } catch (Exception $e) {
            redirect('user/log/'.urlencode($e->getMessage()));
        }
    }


    public function signup() {
        try {
            $nom = $this->input->post('nom');
            $email = $this->input->post('email');
            $mdp = $this->input->post('password');
            $genre = $this->input->post('genre');
            $taille =(float) $this->input->post('taille');
            $poids =(float) $this->input->post('poids');
    
            $user_id = $this->user_model->signup($nom, $email, $mdp, $genre, $taille, $poids);
    
            redirect('welcome'); 
        } catch (Exception $e) {
            redirect('user/log/' . urlencode($e->getMessage()));
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('user/log');
    }
}