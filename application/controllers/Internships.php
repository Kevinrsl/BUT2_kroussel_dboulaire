<?php
    class Internships extends CI_Controller {
        public function __construct(){
            parent::__construct();
            $this->load->model('internships_model');
        }

        public function index(){
            $data['produitlist']=$this->internships_model->get_produit();
            // a title to display above the list
            $data['title']='Produit list';
            // template will call 'task_list ' sub - view
            $data['content']='produit_list';
            $this->load->vars($data );
            $this->load->view('template');
            }


            public function create(){
                $this->load->helper('form');
                $this->load->library('form_validation');

                $this->form_validation->set_rules('type','type','required');
                $this->form_validation->set_rules('description','description','required');
                $this->form_validation->set_rules('marque','marque','required');
                $this->form_validation->set_rules('id','id','required');
                $this->form_validation->set_rules('modele','modele','required');
                $this->form_validation->set_rules('prix_location','prix_location','required');
                $this->form_validation->set_rules('etat','etat','required');

                if($this->form_validation->run()===FALSE){
                $data['content']='form';
                }

                else{
                    $type=$this->input->post('type');
                    $description=$this->input->post('description');
                    $marque=$this->input->post('marque');
                    $id=$this->input->post('id');
                    $modele=$this->input->post('modele');
                    $prix_location=$this->input->post('prix_location');
                    $etat=$this->input->post('etat');

                    $this->internships_model->add_student($id,$type,$description,$marque,$modele,$prix_location,$etat);
                    $data['content']='add_success';
                    }
                    $this->load->vars($data);
                    $this->load->view('template');
                }
}
