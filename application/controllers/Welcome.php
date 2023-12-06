<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	 public function __construct(){
		parent::__construct();
		$this->load->model('internships_model');
	}

	public function index()
	{
		$this->load->view('header');
	}

	public function aide()
	{
		$this->load->view('aide');
	}



}
