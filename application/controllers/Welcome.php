<?php
defined('BASEPATH') OR exit('No direct script access allowed');





class Welcome extends CI_Controller {

   public function __construct(){
      parent::__construct();
      $this->load->model('Internships_model');
  }


   public function index(){


      $this->load->view('header');
/*       $data['produitlist']=$this->Internships_model->get_produits();
      $data['title']='home';
      $data['content']='produit_list';
      $this->load->vars($data );
      $this->load->view('home'); */


      $this->load->view('connexion');
      }


}
