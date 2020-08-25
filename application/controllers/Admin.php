<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
	//	$this->load->helper('form');
	//	$this->load->library('form_validation');
	//	$this->load->library('session');
		$this->load->helper('string');
		$this->load->helper('url');
	}
	public function index ()
	{
		$this->load->view('admin/basic');
	}

		//--------------------------------------------------------------------

}
