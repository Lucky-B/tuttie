<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Validate extends CI_Controller {
	public function __construct() 
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('url');
	}
	
	public function index()
	{
				
		if(isset($this->session->userdata['logged_in']))
		{
			redirect('admin');
		}
				
		$this->form_validation->set_rules('user','User name','required|max_length[8]');
		$this->form_validation->set_rules('pass','Password','required');
		
		if ($this->form_validation->run() == TRUE)
		{
			$name = $this->input->post('name',TRUE);
			$pass = $this ->input->post('password',TRUE);
			$this->load->model('login');
			if ($this->login->check_credentails($name,$pass))
			{
				$user = $this->login->getuserinfo($name);
				$_SESSION['username']     		 = (string)$user->name;
				$_SESSION['logged_in']    		 = (bool)true;
				redirect('admin');
			}
			else //user does not exist
			{
				$this->login->check_credentails($name,$pass);
				$attempt['user'] = $this->input->post('name',TRUE);
				$attempt['pass'] = $this ->input->post('pass',TRUE);
				$this->load->view('admin',$attempt);
			}
		}
		else
		{
			$attempt['userid'] = $this->input->post('userid',TRUE);
			$attempt['userpass'] = $this ->input->post('userpass',TRUE);
			$this->load->view('admin',$attempt);
		}		
		
	}
	
}
