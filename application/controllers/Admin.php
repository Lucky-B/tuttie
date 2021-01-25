<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->helper('form');
	//	$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('string');
		$this->load->helper('url');
		$this->load->model('lecturers');
		$this->load->model('login');
	}
	public function index ($var = null)
	{
		
		$this->load->database();
		$data['aply']= $this->login->applied();
		$data['nom'] = $this->login->nominated();
		$data['acpt'] = $this->login-> accepted();
		$data['rjt'] = $this->login->rejected();
		$data['incm'] = $this->login->incompleted();
			
		if(!isset($this->session->userdata['logged_in']))
		{
			$this->load->view('template/header');
			$this->load->view('admin/login');
			$this->load->view('template/footer');
		}
		else
		{
			//All view
			$data['info'] = $this->db->get('application');
			$this->load->view('admin/basic',$data);
		}

		if($var == 1)
		{
			//Nominations views
		}			
		
		if($var == 2)
		{
			//Applications views
		}			
		
		
		if($var == 3)
		{
			//Incomepleted	viewa	
		}			
	
		if($var == 4)
		{
			//Rejected views
		}
		
		
	}
	
	public function wrong()
	{
		if(isset($this->session->userdata['logged_in']))
		{
			redirect('admin');
		}
		else
		{
			$this->load->view('template/header');
			$this->load->view('admin/loginw');
			$this->load->view('template/footer');
		}
	}

	public function view()
	{
		if(isset($this->session->userdata['logged_in']))
		{
			/*get information based on hash.
			Then query selected form 
			*/
			
			$this->load->view('template/header');
			$this->load->view('admin/application_view');
			//$this->load->view('template/footer');
		}
		else
		{
			redirect('admin');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('admin/');
	}
		//--------------------------------------------------------------------
}
