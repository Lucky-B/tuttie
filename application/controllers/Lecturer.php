<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lecturer extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->model('lecturers');
	}

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('lecturer/application');
		$this->load->view('template/footer');	
	}
	
		//echo $this->lecturer->check_nomination();
		//echo $this->lecturer->nominate();
		//echo $this->lecturer->accept_application();
		//echo $this->lecturer->reject_application();

	public function nominate()
	{
		$lec = array('campus' => $this->input->post('campus',TRUE),
					'l_title' => $this->input->post('title',TRUE),
					'staff_no' => $this->input->post('staff_no',TRUE),
					'l_initial' => $this->input->post('initial',TRUE),
					'l_lastname' => $this->input->post('surname',TRUE),
					's_email' => $this->input->post('s_email',TRUE),
					'module' => $this->input->post('module',TRUE),
					'code' => $this->input->post('code',TRUE));
		
		if(($this->lecturers->check_nomination($lec))=== 0)
		{
			
			if($this->lecturers->nominate($lec))
			{
				$this->load->library('email');
				$config['protocol'] = 'sendmail';
				$config['mailpath'] = '/usr/sbin/sendmail';
				$config['charset'] = 'iso-8859-1';
				$config['wordwrap'] = TRUE;
				$config['smtp_host'] ='mail.tuttie.co.za';
				$config['smtp_user'] = 'no-reply@tuttie.co.za';
				$config['smtp_pass'] = 'x1EEBp37vQS#';
				$config['smtp_port'] = 456;
				$config['smtp_timeout'] = 10;
				$config['smtp_keepalive'] = false ;
				$config['smtp_crypto'] = 'tls';
				$config['wordwrap'] = true;
				$config['mailtype']  = 'html';
				$config['charset'] = 'utf-8';
				$config['crlf'] = '\r\n' ;
				$config['newline'] = '\n';
				$config['dsn'] = true;
				$this->email->initialize($config);
				$this->email->from('no-reply@tuttie.co.za', 'Lucky Bogatsu');
				$this->email->to('Luckybogatsu@gmail.com');
				$this->email->subject('Email Test');
				$this->email->message('Testing the email class.');

				if($this->email->send())
				{
					$this->load->view('template/header');
					$this->load->view('student/finished');
					$this->load->view('template/footer');
				}
				else
				{
					$data = $this->email->print_debugger();
					print_r($data);
				}
			}
		}
	}
}
