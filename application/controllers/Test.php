<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {



	
	public function index()
	{

   $this->load->library('email');
   $this->email->from('abdelali.mounaji@gmail.com'); 
   $this->email->to('abdelali.mounaji@gmail.com'); 
   $this->email->subject('test email');
   $this->email->message('body message');
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
   }

   echo " < pre > ";
   print_r($data);
   echo " < / pre > ";


		$this->load->view('header_session');
		$this->load->view('menu');
		$this->load->view('login');
		$this->load->view('footer');
	}

}
