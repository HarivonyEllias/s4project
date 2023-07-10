<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }

	public function index () {
        redirect('/user/log');
    }
    
    public function log($message = null) {
        $this->load->view('log.php', ['error_message' => urldecode($message)]);
    }


    public function login() {
        try {
            $email = $this->input->get('email');
            $password = $this->input->get('password');
            $this->user_model->login($email, $password);
            redirect('homeredirect');
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