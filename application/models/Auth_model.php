<?php

class Auth_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function authenticate_user($login, $password) {
        $this->db->select('*');
        $this->db->from('utilisateur');
        $this->db->where('login', $login);
        $this->db->where('password', $password);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return false;
        }
    }


    public function get_last_user_id() {
        $this->db->select_max('id');
        $query = $this->db->get('utilisateur');
        
        return $query->row()->id;
    }



    
    public function register_user($data) {
        $login = strtolower(substr($data['prenom'], 0, 1) . $data['nom']);
    
        $login_exists = true;
        $count = 1;
        while ($login_exists) {
            $existing_user = $this->db->get_where('utilisateur', ['login' => $login])->row();
            if (!$existing_user) {
                $login_exists = false;
            } else {
                $login = strtolower(substr($data['prenom'], 0, 1) . $data['nom'] . $count);
                $count++;
            }
        }
    
        $data['login'] = $login;
    
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
    
        $this->db->insert('utilisateur', $data);
    }
    

}
