<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My404 extends CI_Controller {

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
		$this->output->set_status_header('404'); 
		$this->load->view('template/header');
		$this->load->view('template/error_404');
		$this->load->view('template/footer');
	}
}
