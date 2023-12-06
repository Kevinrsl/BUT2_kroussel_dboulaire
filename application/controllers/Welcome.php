<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$this->load->view('header');
		$this->load->view('accueil');
	}





/* 
	function catalogue_sante(){
		parent::construct();
	} */

	public function catalogue_sante()
	{
		$this->load->view('header');
		$this->load->view('catalogue-sante');
	}


}
