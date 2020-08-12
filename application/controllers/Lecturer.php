<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lecturer extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
	//	$this->load->helper('form');
	//	$this->load->library('form_validation');
	//	$this->load->library('session');
		$this->load->helper('url');
	}
	public function index()
	{
		if(true)
		{
			$this->load->view('template/header');
			$this->load->view('lecturer/application');
			$this->load->view('template/footer');
		}
	}

	public function finished()
	{
		
		if(true)
		{		
			
			$this->load->view('template/header');
			$this->load->view('lecturer/finished');
			$this->load->view('template/footer');
		}
		else
		{
			return redirect()->to('index'); 
		}
		$this->session->destroy();
	}
}
