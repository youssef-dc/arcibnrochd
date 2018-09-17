<?php 
class Soumission_model extends CI_Model {

        public $titre;
        public $services;
        public $etablissements;
        public $ville;
        public $pays;
        public $auteurs;
        public $texte;
        public $status;        
        public $id_compte;
        public $communication;

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

        public function update_soumission($soumission)
        {

                $this->db->update('soumission', $soumission, array('id' => $soumission['id']));
        }

        public function getByService($service){
      $this->db->select('*');
          $this->db->from('soumission');
          $this->db->where('services', $service);
          $query = $this->db->get();
          return $query->result();
        }

        public function getById($id){
      $this->db->select('*');
          $this->db->from('soumission');
          $this->db->where('id', $id);
          $query = $this->db->get();
          return $query->row();
        }


        public function getDistinctServices(){
          $this->db->distinct();
          $this->db->select('services');
          $this->db->from('soumission');
          $query = $this->db->get();
          return $query->result();
        }


        public function getForListing($comm = null){
          $this->db->select('titre, auteurs, services, communication, status');
          $this->db->from('soumission');
          $this->db->where('status', '1');
          if (!empty($comm)) {    
            $this->db->where('communication', $comm);
          }
          $query = $this->db->get();
          return $query->result();
        }
}

?>
