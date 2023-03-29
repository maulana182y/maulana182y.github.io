<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {
    public function index()
	{
        $this->load->view('templates/header');
        // $this->load->view('templates/nav_sosial');
		$this->load->view('v_landingPage');
	}
}