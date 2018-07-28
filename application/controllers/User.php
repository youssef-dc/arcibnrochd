<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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

}
