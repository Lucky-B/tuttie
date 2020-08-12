<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('student/application_part1');
		$this->load->view('template/footer');

	}

	public function laststep()
	{
		if(true)
		{
			$this->load->view('template/header');
			$this->load->view('student/application_part2');
			$this->load->view('template/footer');
		}
		else
		{
			//return redirect()->to('index'); 
		}
	}


	public function finished()
	{
		if(true)
		{
			/* 
			$email = \Config\Services::email();
			$email->setTo('luckybogatsu@gmail.com');
			$email->setFrom('no-reply@tuttie.co.za');
			$email->setSubject('Here is your info ');
			$email->setMessage('Hi Here is the info you requested.');
			if($email->send())
			{
				echo view('template/header');
				echo view('student/finished');
				echo view('template/footer');
			}
			else
			{
				$data = $email->printDebugger(['header']);
				print_r($data);
			} */
		}
		else
		{
			return redirect()->to('index');
		}
	}

		//--------------------------------------------------------------------
}
