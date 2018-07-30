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
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('login', $this->data);
		$this->load->view('footer');
	}

	public function enregistrement()
	{
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('enregistrement', $this->data);
		$this->load->view('footer');
	}

public function save_user()
	{

               $this->load->model('User_model');
               $this->Login_model->insert_entry();
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('index', $this->data);
		$this->load->view('footer');
	}


public function update_user()
	{

               $this->load->model('User_model');
               $this->Login_model->insert_entry();
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('index', $this->data);
		$this->load->view('footer');
	}

  public function connexion() { 
         //loading session library
         $this->load->library('session');
         $this->load->model('User_model');
              $row=  $this->User_model->login($_POST['email'],$_POST['password']);
			
if (isset($row))
{

       $nom = '';
       $prenom = '';
       $email='';
       $password='';
  /*     
 $utilisateur_session = array(
'username'  => $row['username'],
        'password'     => $row['password'],

        'nom'     => $row['nom']

);
*/

//$this->session->set_userdata($utilisateur_session);
  $this->session->set_userdata('nom',$nom);
$this->session->set_userdata('prenom',$prenom);
$this->session->set_userdata('email',$email);


      
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
         $this->session->unset_userdata('utilisateur'); 
         $this->index(); 
      } 

}
