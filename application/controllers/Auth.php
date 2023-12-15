<?php

class Auth extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->view('header');
        $this->load->model('auth_model');
        $this->load->model('internships_model');
        $this->config->load('custom_config');
        
    }
    

    public function index() {
        //$this->load->view('connexion');
        $this->load->view('accueil');
        $login = $this->input->post('login');
        $password = $this->input->post('password');

        $user = $this->auth_model->authenticate_user($login, $password);

        if ($user) {
            $data = array(
                'user_id' => $user->id,
                'login' => $user->login,
                'type_utilisateur' => $user->type_utilisateur,
                'logged_in' => true
            );

            $this->session->set_userdata($data);
            $this->load->view('accueil');
        } else {
            $data['error'] = 'Identifiants incorrects';
            $this->load->view('login', $data);
        }

            
           
                   
    }

    private function chargerAccueil() {
        $data['produits'] = $this->Internships_model->get_produit();
        $data['title'] = 'accueil';
        $data['username'] = $this->session->userdata('username');
        $data['type_utilisateur'] = $this->session->userdata('type_utilisateur');
        $this->load->vars($data );
        $type_utilisateur = $this->session->userdata('type_utilisateur');
        if ($type_utilisateur == 'admin') {
        $this->load->view('accueil_admin');
        } elseif ($type_utilisateur == 'client') {
        $this->load->view('accueil');
        }
        }

    public function accueil() {
        if ($this->session->has_userdata('username')) {
            $type_utilisateur = $this->session->userdata('type_utilisateur');
            if ($type_utilisateur == 'admin') {
            $this->load->view('accueil_admin');
            } elseif ($type_utilisateur == 'client') {
            $this->chargerAccueil();
            }
            
            } else {
            redirect('Auth/connexion');
        }
    }






    public function register_user() {

        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[utilisateur.email]');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('nom', 'Nom', 'required');
        $this->form_validation->set_rules('prenom', 'Prénom', 'required');
        $this->form_validation->set_rules('ddn', 'Date de Naissance', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('register');
            error_log('Form validation failed.');
            return;
        }

        $data = array(
            'email' => $this->input->post('email'),
            'password' => md5($this->input->post('password')),
            'nom' => $this->input->post('nom'),
            'prenom' => $this->input->post('prenom'),
            'ddn' => $this->input->post('ddn'),
            
        );
    

        $last_user_id = $this->auth_model->get_last_user_id();
    
        $data['id'] = $last_user_id + 1;
    
        $this->auth_model->register_user($data);
    
        $data['message'] = 'Inscription réussie, connectez-vous maintenant.';
        $this->load->view('connexion', $data);
        redirect('auth/connexion');

    }

    public function register() {
        $this->load->view('register');
    }


    public function logout() {
        $this->session->sess_destroy();
        redirect('auth'); // rediriger vers la page de connexion après la déconnexion
    }



    public function accueil_admin() {
        $this->load->model('Utilisateur_model');
        $data['utilisateur'] = $this->Utilisateur_model->get_utilisateurs(); 
        $this->load->view('accueil_admin', $data);
        }

}



