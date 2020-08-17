<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->helper('url');
	}
	
		
	public function index()
	{
		$this->load->model('students');
		$this->students->check_application();
		$this->load->view('template/header');
		$this->load->view('student/application');
		$this->load->view('template/footer');
	}

	public function apply()
	{
		
		$stu = array('campus' => $this->input->post('campus',TRUE),
					's_initial' => $this->input->post('initial',TRUE),
					's_lastname' => $this->input->post('surname',TRUE),
					's_title' => $this->input->post('title',TRUE),
					'nationality' => $this->input->post('Nationality',TRUE),
					'student_id' => $this->input->post('studentnumber',TRUE),
					'id_passport' => $this->input->post('id_passport',TRUE),
					'cell_no1' => $this->input->post('phonenumber_1',TRUE),
					'cell_no2' => $this->input->post('phonenumber_2',TRUE),
					'student_email' => $this->input->post('s_email',TRUE),
					'memoir' => $this->input->post('cv_desc',TRUE),
					'current_program' => $this->input->post('degree',TRUE),
					'current_year' => $this->input->post('current_year',TRUE),
					'campus' => $this->input->post('campus',TRUE),
					'faculty' => $this->input->post('faculty',TRUE),
					'module_name' => $this->input->post('module',TRUE),
					'l_email' => $this->input->post('l_email',TRUE),
					'module_code' => $this->input->post('code',TRUE)
						);

				echo $stu ['campus'],':Campus','<br>';
				echo $stu ['s_title'],':Title','<br>';
				echo $stu ['student_id'],':Student ID','<br>';
				echo $stu ['s_initial'],':Intial','<br>';
				echo $stu ['s_lastname'],':Lastname','<br>';
				echo $stu ['current_program'],':Current Program','<br>';
				echo $stu ['current_year'],':Current year','<br>';
				echo $stu ['id_passport'],':ID/passport','<br>';
				echo $stu ['nationality'],':Nationality','<br>';
				echo $stu ['cell_no1'],':Cell No 1','<br>';
				echo $stu ['cell_no2'],':Cell No 1','<br>';
				echo $stu ['student_email'],':Email','<br>';
				echo $stu ['campus'],':Campus','<br>';
				
				echo $stu ['module_name'],':Module Name','<br>';
				echo $stu ['module_code'],':Module Code','<br>';
				echo $stu ['l_email'],':Lecturer Email','<br>';
				echo $stu ['faculty'],':Fuculty','<br>';
				echo $stu ['memoir'],':Memoir','<br>';
				
		//echo $this->student->check_application();
		//echo $this->student->apply();
	}
	
	public function accept()
	{
		
		//echo $this->student->accept_nomination();
		
		$this->load->view('template/header');
		//$this->load->view('student/nominated');
		$this->load->view('template/footer');
	}

	public function reject()
	{
		//echo $this->student->reject_nomination();
	
		$this->load->view('template/header');
		//$this->load->view('student/nominated');
		$this->load->view('template/footer');
	}

	
	public function finished()
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

		//--------------------------------------------------------------------
}
