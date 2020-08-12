<?php 
namespace App\Controllers;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\OAuth;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

class Student extends BaseController
{
//	protected $session;
//	public $mail = new PHPMailer();

	function __construct()
    {
		$this->helpers = array_merge($this->helpers, ['url']);
		//$this->session = \Config\Services::session();
       // $this->session->start();
    }

	public function index()
	{
		echo view('template/header');
		echo view('student/application_part1');
		echo view('template/footer');

	}

	public function laststep()
	{
		if(true)
		{
			echo view('template/header');
			echo view('student/application_part2');
			echo view('template/footer');
			$this->step1 = 'Done';
		}
		else
		{
			return redirect()->to('index'); 
		}
	}


	public function finished()
	{
		if(true)
		{
			
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
			}
		}
		else
		{
			return redirect()->to('index');
		}
	}

		//--------------------------------------------------------------------
}
