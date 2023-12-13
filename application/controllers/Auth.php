<?php

class Auth extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->view('header');
        $this->load->model('auth_model');
        $this->load->model('internships_model');
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

    public function login() {

    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('auth'); // rediriger vers la page de connexion après la déconnexion
    }
}
