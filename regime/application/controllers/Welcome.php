<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('log');
	}
	public function log () {
		$this->load->view('login.php');
	}


	public function login() {
		// $this->load->library('session');
		$this->load->helper('url_helper');
		$this->load->model('home_model');
		session_start();
			$user = $this->input->post('user');
			$mdp = $this->input->post('mdp');
			if ($this->home_model->login($user,$mdp)) {
				// $this->session->set_userdata('user', $user);
				$_SESSION['user'] = $user;
				$this->load->view('home');
			} else {
				redirect('welcome/log');
			}
	}

	public function accueil() {
		$this->load->helper('url_helper');
		$this->load->model('home_model');
		$data['customers'] = $this->home_model->get_list_customer2();
		
		$this->load->view('home', $data);
	}
	
	public function format($money = '0') {
		$this->load->helper('format_helper');
		echo 'Salut à toi : ' .$money.'<br/>';
		echo format_to_money($money);
	}

	public function manger($plat = '', $boisson = '') {
		echo 'Voici votre menu : <br/>';
		echo $plat . '<br/>';
		echo $boisson . '<br/>';
		echo 'Bon appétit !';
	}

	function about() {
		// définition des données variables du template
		$data['title'] = '48hs4\'s page';
		$data['description'] = 'Page created by 48hs4';
		$data['keywords'] = '48hs4, Regime';
		// on charge la view qui contient le corps de la page
		$data['contents'] = 'welcome_message';
		// on charge la page dans le template
		$this->load->view('template', $data);
	}
}