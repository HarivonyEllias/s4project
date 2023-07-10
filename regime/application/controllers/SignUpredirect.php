<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SignUpredirect extends CI_Controller {

    public function index () {
        $this->load->view('sign-up');
    }
}