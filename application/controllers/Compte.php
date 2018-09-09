<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Compte extends CI_Controller {

	public function __construct() {
		parent::__construct();

              $this->load->library('session');
if(isset($this->session->userdata['utilisateur'])) {

;

}
		$this->menu = 'accueil' ;
		$this->data['active_'.$this->menu] = 'active' ;

	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
				if($this->session->has_userdata('email')){

               $this->load->view('header_session');

}

else {
		$this->load->view('header');
	}
	
		$this->load->view('menu');
        
		$this->load->view('login', $this->data);
		$this->load->view('footer');
	}

	public function enregistrement()
	{
		if($this->session->has_userdata('email')){

                   redirect('Compte');

}



                $this->load->view('header');
		$this->load->view('menu');
		$this->load->view('enregistrement', $this->data);
		$this->load->view('footer');
	}

public function ajouter_utilisateur()
	{

               $this->load->model('Compte_model');
               $this->Compte_model->ajouter_compte();
		  redirect('accueil');
	}


public function update_user()
	{

               $this->load->model('Compte_model');
               $this->Compte_model->insert_entry();
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('index', $this->data);
		$this->load->view('footer');
	}

  public function connexion() { 
         //loading session library
         $this->load->library('session');
         $this->load->model('Compte_model');
              $row=  $this->Compte_model->login($_POST['email'],$_POST['password']);
			
if (isset($row))
{

       $nom = '';
       $prenom = '';
       $email='';
       $password='';
       $id='';
       $iscorrecteur=0;
       
       if($row['correcteur']>0){
           
           // CARDIOLOGIE
           $this->session->set_userdata('service',$row['username']);
redirect('Correcteur');
       }
      // $service='';
  /*     
 $utilisateur_session = array(
'username'  => $row['username'],
			'password'     => $row['password'],

        'nom'     => $row['nom']

);
*/

//$this->session->set_userdata($utilisateur_session);
  $this->session->set_userdata('nom',$row['nom']);
$this->session->set_userdata('prenom',$row['prenom']);
$this->session->set_userdata('email',$row['email']);
$this->session->set_userdata('id_compte',$row['id']);


      
}

             
                $temp['nom'] =  $this->session->get_userdata('nom');
                $temp['prenom'] =  $this->session->get_userdata('prenom');
		$this->load->view('header_session',$temp);
		$this->load->view('menu');
		$this->load->view('index', $this->data);
		$this->load->view('footer');
         //removing session data 
        // $this->session->unset_userdata('utilisateur'); 
       //  $this->index(); 
      } 

  public function deconnexion() { 
         //loading session library
         $this->load->library('session');
			
         //removing session data 
         $this->session->unset_userdata('nom');
         $this->session->unset_userdata('prenom');
         $this->session->unset_userdata('email'); 
         $this->session->unset_userdata('id_compte');
         
         redirect('Accueil'); 
      } 

}
