<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lecturer extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->helper('url');
		 $this->load->helper('string');
		$this->load->model('lecturers');
	}

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('lecturer/application');
		$this->load->view('template/footer');	
	}
	
	public function nominate()
	{
		$lec = array('campus' => $this->input->post('campus',TRUE),
					'link_id' => random_string('alnum',20),
					'l_title' => $this->input->post('title',TRUE),
					'staff_no' => $this->input->post('staff_no',TRUE),
					'l_initial' => $this->input->post('initial',TRUE),
					'l_lastname' => $this->input->post('surname',TRUE),
					'student_no' => $this->input->post('student_no',TRUE),
					's_email' => $this->input->post('s_email',TRUE),
					'l_email' => $this->input->post('l_email',TRUE),
					'module' => $this->input->post('module',TRUE),
					'code' => $this->input->post('code',TRUE));
		
		if(($this->lecturers->check_nomination($lec)) == 0)
		{
			
			$this->lecturers->nominate($lec);
			$lec['accept'] = base_url('student/accept/'.$lec['link_id'].'');
			$lec['reject'] = base_url('student/reject/'.$lec['link_id'].'');
			$email_message = $this->load->view('template/email_nomination',$lec,true); 
			
			$data = $this->lecturers->get_data_vialink($lec);
			$lectuere_email =$data->lecturere_email; 
			$student_email = $lec['s_email'];
            
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
			
			$this->email->from('no-reply@tuttie.co.za', 'Tutor Services');
			$this->email->to($student_email);
			$this->email->subject('Tutor Nomination');
			$this->email->message($email_message);
			if($this->email->send())
			{
				$this->load->view('template/header');
				$this->load->view('student/finished');
				$this->load->view('template/footer');
				
				$this->email->clear();
				$this->email->from('no-reply@tuttie.co.za', 'Tutor Services');
			    $this->email->to($lectuere_email);
			    $this->email->subject('Tutor Nomination');
			    $this->email->message('Thank you <br> The Nomination has been sent');
				$this->email->send();
		    
			}
			else
			{
				$data = $this->email->print_debugger();
				//print_r($data);
				$this->load->view('template/header');
				echo "<h1>Seems to be a problem sending an email <br>
				20967489@nwu.ac.za </h1>";
				$this->load->view('template/footer');
			}
			
		}
		
		else
		{
			$this->load->view('template/header');
			echo "<h1>You have already done this Nomination</h1>";
			$this->load->view('template/footer');
		}		
	}

	public function reject($link = null)
	{
		if ($link != null)
		{
			$link_id = array('link_id' => $link );
			if(($this->lecturers->check_link($link_id)) === 1 )
			{
				$this->lecturers->reject_application($link_id);
				$data = $this->lecturers->get_data_vialink($link_id);
				$message = $this->load->view('lecturer/email_reject',$data,true);
				$estudent =$data->student_email;
				$electurer =$data->lecturere_email;				
			
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
				
				$this->email->from('no-reply@tuttie.co.za', 'Tutor Services');
				$this->email->to($estudent);
				$this->email->to($electurer);
				$this->email->subject('Tutor Nomination');
				$this->email->message($message);

				if($this->email->send())
				{
					$this->load->view('template/header');
					$this->load->view('student/finished');
					$this->load->view('template/footer');
				}
				else
				{
					$data = $this->email->print_debugger();
					$this->load->view('template/header');
					echo "<h3>Seems to be a problem sending an email <br>
					20967489@nwu.ac.za </h3>";
					$this->load->view('template/footer');
				}
				
			}
			else
			{
				$this->load->view('template/header');
				echo "Something is wrong with the link !!<br> Must update this part..";
				$this->load->view('template/footer');
			}
		}
		else
		{
			redirect('home');
		}
		
	}

	public function accept($link = null)
	{	
		if ($link != null)
		{
			$link_id = array('link_id' => $link );
			if(($this->lecturers->check_link($link_id)) === 1 )
			{
				$data['stu'] = $this->lecturers->get_data_vialink($link_id);
				$this->load->view('template/header');
				$this->load->view('lecturer/accept',$data);
				$this->load->view('template/footer');
			}
			else
			{
				$this->load->view('template/header');
				echo "<h1>You have already done this Nomination</h1>";
				$this->load->view('template/footer');
			}
		}
		else
		{
			echo "link is invalid ";
		}
	}

	public function thankyou()
	{
		if(($this->input->post('link',TRUE)) != null)
		{
			$lec = array('campus' => $this->input->post('campus',TRUE),
						'link_id' => $this->input->post('link',TRUE),
						'l_title' => $this->input->post('title',TRUE),
						'staff_no' => $this->input->post('staff_no',TRUE),
						'l_initial' => $this->input->post('initial',TRUE),
						'l_lastname' => $this->input->post('surname',TRUE),
						's_initial' => $this->input->post('s_initial',TRUE),
						's_lastname' => $this->input->post('s_lastname',TRUE),
						'module_name' => $this->input->post('module',TRUE),
						'module_code' => $this->input->post('code',TRUE)
						);
			
			if(($this->lecturers->check_link($lec))=== 1)
			{
				$this->lecturers->accept_application($lec);
                $data = $this->lecturers->get_data_vialink($lec);
				$email_message = $this->load->view('lecturer/email_accept',$data,true); //need to update message
				$estudent =$data->student_email;
				$electurer =$data->lecturere_email;
				
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
				
				$this->email->from('no-reply@tuttie.co.za', 'Tutor Services');
				$this->email->to($estudent);
				$this->email->to($electurer);
				$this->email->subject('Tutor Nomination');
				$this->email->message($email_message);

				if($this->email->send())
				{
					$this->load->view('template/header');
					$this->load->view('student/finished');
					$this->load->view('template/footer');
				}
				else
				{
					$data = $this->email->print_debugger();
					echo "<br>;email not sent";
					echo "email not sent wrong";
				}
				
			}
		}	
	}
	
}
