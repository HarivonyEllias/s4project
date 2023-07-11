<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeR extends CI_Controller {

    public function index () {
        $data = array();
        if ($this->input->get('proposition') != null) {
            $serializedProposition = $this->input->get('proposition');
            $proposition = unserialize(urldecode($serializedProposition));
            $data['proposition'] = $proposition;
            $this->load->view('home', $data);
        }else $this->load->view('home', $data);
    }
}