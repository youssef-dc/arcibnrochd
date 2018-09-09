<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Correcteur extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->menu = 'correcteur' ;
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
		if(!$this->session->has_userdata('service')){
			redirect ('Compte');
		}
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->model('Soumission_model');
		$service = (isset($_SESSION['service'])) ? $_SESSION['service'] : '' ;
		$this->data['soumissions'] = $this->Soumission_model->getByService($service);
		$this->load->view('listing_soumissions', $this->data);
		$this->load->view('footer');
	}



	public function soumission($id){		
		if(!$this->session->has_userdata('nom')){
			redirect ('Compte');
		}
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->model('Soumission_model');
		$soumission = $this->Soumission_model->getById($id);
		$this->data['soumission'] = $soumission;		
		$this->load->view('soumission', $this->data);
		$this->load->view('footer');
	}

	public function validation(){
		$status = 0 ;
		switch ($_POST['valide']) {
            case 'VALIDE':                                                    
                $status = 1 ;
                break;
            case 'NON VALIDE':                                                    
                $status = 2 ;
                break;
        }
		$soumission = array(
			'id' => $_POST['id_soumission'],
			'status' => $status,
			'communication' => $_POST['com'], 
			);
		$this->load->model('Soumission_model');
		$this->Soumission_model->update_soumission($soumission);
		$this->index();
	}

}
