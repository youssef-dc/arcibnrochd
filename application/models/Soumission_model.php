<?php 
class Soumission_model extends CI_Model {

        public $titre;
        public $services;
        public $etablissements;
        public $ville;
        public $pays;
        public $auteurs;
        public $texte;
        
        public $id_compte;
       

        public function get_last_ten_entries()
        {
                $query = $this->db->get('soumission', 10);
                return $query->result();
        }

        public function insert_entry()
        {
                $this->titre    = $_POST['titre']; 
                $this->services  = $_POST['services'];
                 $this->etablissements    = $_POST['etablissements']; 
                $this->ville  = $_POST['ville'];
                 $this->pays    = $_POST['pays']; 
                $this->auteurs  = $_POST['auteurs'];
                 $this->texte    = $_POST['texte']; 
                 
                 $this->id_compte    = $_SESSION['id_compte']; 
                
               // $this->service     = time();

                $this->db->insert('soumission', $this);
        }

        public function update_entry()
        {
//                $this->nom    = $_POST['nom'];
  //              $this->prenom  = $_POST['prenom'];
               // $this->date     = time();

                $this->db->update('soumission', $this, array('id' => $_POST['id']));
        }

}

?>
