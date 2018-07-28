<?php 
class Login_model extends CI_Model {

        public $nom;
        public $prenom;
        public $service;
        public $etablissement;
        public $adresse;
        public $code_postale;
        public $ville;
        public $pays;
        public $telephone;
        public $GSM;
        public $code_postale;
        public $ville;
        public $pays;
        public $membre_arc;

        public function get_last_ten_entries()
        {
                $query = $this->db->get('soumission', 10);
                return $query->result();
        }

        public function insert_entry()
        {
                $this->nom    = $_POST['nom']; 
                $this->prenom  = $_POST['prenom'];
                $this->service    = $_POST['service']; 
                $this->etablissement  = $_POST['etablissement'];
                $this->adresse    = $_POST['adresse']; 
                $this->code_postale  = $_POST['code_postale'];
                $this->ville    = $_POST['ville']; 
                $this->pays  = $_POST['pays'];
                $this->telephone    = $_POST['telephone']; 
                $this->GSM  = $_POST['GSM'];
                $this->code_postale    = $_POST['code_postale']; 
                $this->prenom  = $_POST['prenom'];
                $this->service    = $_POST['service']; 
                $this->etablissement  = $_POST['etablissement'];



               // $this->service     = time();

                $this->db->insert('soumission', $this);
        }

        public function update_entry()
        {
                $this->nom    = $_POST['nom'];
                $this->prenom  = $_POST['prenom'];
               // $this->date     = time();

                $this->db->update('user', $this, array('id' => $_POST['id']));
        }

}

?>
