<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
		$this->load->model('lecturers');
		$this->load->model('students');
		
		
		$this->load->view('template/header');
		$this->load->view('template/index');
		$this->load->view('template/footer');
	}
}
