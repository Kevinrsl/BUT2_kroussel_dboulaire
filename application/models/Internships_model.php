<?php
    class Internships_model extends CI_Model{
        public function __construct(){
            parent::__construct();
            $this->load->database();
        }

        public function get_produits(){
            $query=$this->db->get('produit');
            return $query->result_array();
            }


            public function get_produit_details($produit_id){
                $query = $this->db->get_where('produit', array('id' => $produit_id));
                return $query->row_array();
            }


            public function add_produit($id,$type,$description,$marque,$modele,$prix_location,$etat){
                $data=array(
                'produit_id'=>$id,
                'type'=>$type,
                'description'=>$description,
                'marque'=>$marque,
                'modele'=>$modele,
                'prix_location'=>$prix_location,
                'etat'=>$etat
                );
                return $this->db->insert('produit',$data);
                }



                public function get_utilisateurs() {
                    $query = $this->db->get('utilisateur');
                    return $query->result_array();
                }

    }

?>

