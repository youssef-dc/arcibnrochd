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
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->model('Soumission_model');
		$service = (isset($_SESSION['service'])) ? $_SESSION['service'] : '' ;
		$this->data['soumissions'] = $this->Soumission_model->getByService($service);
		$this->load->view('listing_soumissions', $this->data);
		$this->load->view('footer');
	}




}
