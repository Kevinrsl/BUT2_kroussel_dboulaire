<?php
    class Internships_model extends CI_Model{
        public function __construct(){
            parent::__construct();
            $this->load->database();
        }
    }


    function get_produit(){
        $query=$this->db->get('produit');
        return $query->result_array();
        }
        
        function add_produit($id,$type,$description,$marque,$modele,$prix_location,$etat){
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
            

?>

