<?php
defined('BASEPATH') OR exit('No direct script access allowed');





class Welcome extends CI_Controller {

   public function __construct() {
      parent::__construct();
      $this->load->helper('url');
   }

   public function index() {
      $this->load->view('header');
      $this->load->view('accueil');


/* 	$model_location = new LocationModel();

	$donnees = ['id' => 1, 'prix_total' => 100, 'utilisateur_id' => 1, 'produit_id' => 1];
	 $model_location -> insert($donnees);
 */

	  $this->load->view('test');
   }

   public function catalogue_sante() {
      $this->load->view('catalogue_sante');
   }

   public function catalogue_tapis() {
      $this->load->view('catalogue-tapis');
   }
}
