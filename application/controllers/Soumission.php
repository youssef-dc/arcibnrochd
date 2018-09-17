<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Soumission extends CI_Controller {

	public function __construct() {
		parent::__construct();
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
		if (date('y-m-d') > date('18-09-10')) {
			$this->finSoumissions();
		}
		if(!$this->session->has_userdata('nom')){
			redirect ('Compte');
		}
		$this->load->view('header_session');
		$this->load->view('menu');
		$this->load->view('soumissions', $this->data);
		$this->load->view('footer');
	}

public function save()
	{
		if (date('y-m-d') > date('18-09-10')) {
			$this->finSoumissions();
		}
		$this->load->model('Soumission_model');
		$this->Soumission_model->insert_entry();

		$this->load->model('Compte_model');
		$user = $this->Compte_model->get($_SESSION['id_compte']);

		$this->load->library('email');

		$this->email->from('contact@arcibnrochd.com'); 
		$this->email->to($user['email']); 
		$this->email->subject('Soumission');
		
		$this->email->message('Bonjour,  <br/><br/> Votre soumission a bien été enregistrée. <br/><br/> Bien à vous.');
		if ($this->email->send())
			{
				$data['success'] = 'Yes';
			}
		else
			{
			$data['success'] = 'No';
			$data['error'] = $this->email->print_debugger(array(
				'headers'
			));

		echo " < pre > ";
		print_r($data);
		echo " < / pre > ";
		}

		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('index', $this->data);
		$this->load->view('footer');
	}


	public function finSoumissions(){
		if(!$this->session->has_userdata('nom')){
			redirect ('Compte');
		}
		$this->load->view('header_session');
		$this->load->view('menu');
		$this->load->view('fin-soumissions');
		$this->load->view('footer');
	}


	public function liste(){
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->model('Soumission_model');
		$services = $this->Soumission_model->getDistinctServices();
		$soumissions = $this->Soumission_model->getForListing();
		
		$final = array();
		foreach ($services as $service) {
			foreach ($soumissions as $soumission) {
				if ($soumission->services == $service->services) {					
					if ($soumission->communication == 'oral') {
						$final['Oral'][$service->services][] = $soumission ;
					}else if ($soumission->communication == 'ecrite') {
						$final['Affichee'][$service->services][] = $soumission ;
					}
				}				 
			}
		}

		$this->data['soumissions'] = $final ;

		$this->load->view('list-resultas', $this->data);
		$this->load->view('footer');
	
	}



}

