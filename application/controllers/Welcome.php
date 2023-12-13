<?php
defined('BASEPATH') OR exit('No direct script access allowed');





class Welcome extends CI_Controller {

   public function __construct(){
      parent::__construct();
      $this->load->model('Internships_model');
  }


   public function index(){
      $this->load->view('header');


      $data['produitlist']=$this->Internships_model->get_produits();
      $data['title']='home';
      $data['content']='produit_list';
      $this->load->vars($data );
      $this->load->view('catalogue'); 


      /* $this->load->view('accueil'); */


      
      }

      public function produit_details($produit_id){
         $data['produit'] = $this->Internships_model->get_produit_details($produit_id);
         $data['title'] = 'Détails du produit';
         $data['content'] = 'produit_details'; 
         $this->load->vars($data);
         $this->load->view('produit_details');
         
         
     }


}
