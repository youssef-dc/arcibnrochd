<?php 
class Soumission_model extends CI_Model {

        public $nom;
        public $prenom;
       

        public function get_last_ten_entries()
        {
                $query = $this->db->get('soumission', 10);
                return $query->result();
        }

        public function insert_entry()
        {
                $this->nom    = $_POST['nom']; 
                $this->prenom  = $_POST['prenom'];
               // $this->service     = time();

                $this->db->insert('soumission', $this);
        }

        public function update_entry()
        {
                $this->nom    = $_POST['nom'];
                $this->prenom  = $_POST['prenom'];
               // $this->date     = time();

                $this->db->update('soumission', $this, array('id' => $_POST['id']));
        }

}

?>
