<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->model('students');
	}
	
		
	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('student/application');
		$this->load->view('template/footer');
	}

	public function apply()
	{	
		$stu = array('campus' => $this->input->post('campus',TRUE),
					'link_id' => random_string('alnum',20),
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
					'current_level' => $this->input->post('current_level',TRUE),
					'current_year' => $this->input->post('current_year',TRUE),
					'campus' => $this->input->post('campus',TRUE),
					'faculty' => $this->input->post('faculty',TRUE),
					'module_name' => $this->input->post('module',TRUE),
					'l_email' => $this->input->post('l_email',TRUE),
					'module_code' => $this->input->post('code',TRUE));
			
		if(($this->students->check_application($stu)) === 0)
		{
			
			$this->students->apply($stu);
			$stu['accept'] = base_url('lecturer/accept/'.$stu['link_id'].'');
			$stu['reject'] = base_url('lecturer/reject/'.$stu['link_id'].'');
			$email_message = $this->load->view('template/email_apply',$stu,true); 
			$lecturer_email = $stu['l_email'];
		    $student_email = $stu['student_email'];
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
			
			$this->email->from('no-reply@tuttie.co.za', 'Tutoring service');
			$this->email->to($lecturer_email);
			$this->email->subject('Tutor Nomination');
			$this->email->message($email_message);

			if($this->email->send())
			{
				$this->load->view('template/header');
				$this->load->view('student/finished');
				$this->load->view('template/footer');
				
    			$this->email->clear();
    			$this->email->from('no-reply@tuttie.co.za', 'Tutoring service');
    			$this->email->to($student_email);
    			$this->email->subject('Tutor Nomination');
    			$this->email->message('Thank you for your request<br> Hopefully you will be responded to timeously');
    			$this->email->send();
			}
			else
			{
				$data = $this->email->print_debugger();
				//print_r($data);
				echo "email not sent";
			}
			
		}	
		else
		{
			echo "You have already Applied for this module";
		}
	}
	
	public function reject($link = null)
	{
		if ($link != null)
		{
			$link_id = array('link_id' => $link );
			if(($this->students->check_link($link_id)) === 1 )
			{
				$this->students->reject_application($link_id);
				$data['link_id']= $link_id; 
				$data = $this->students->get_data_vialink($link_id);
				$message = $this->load->view('student/email_reject',$data,true);
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
					echo "<3>Seems to be a problem sending an email <br>
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
			if(($this->students->check_link($link_id)) === 1 )
			{
				$data['stu'] = $this->students->get_data_vialink($link_id);
				$this->load->view('template/header');
				$this->load->view('student/nominated',$data);
				$this->load->view('template/footer');				
			}
			else
			{
				echo "Something is wrong with the link !!<br> Must update this part..";
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
			$stu = array('campus' => $this->input->post('campus',TRUE),
						'link_id' => $this->input->post('link',TRUE),
						'l_title' => $this->input->post('title',TRUE),
						'l_email' => $this->input->post('l_email',TRUE),
						'staff_no' => $this->input->post('staff_no',TRUE),
						'l_initial' => $this->input->post('initial',TRUE),
						'l_lastname' => $this->input->post('surname',TRUE),
						
						's_title' => $this->input->post('title',TRUE),
						's_initial' => $this->input->post('s_initial',TRUE),
						's_lastname' => $this->input->post('s_lastname',TRUE),
						
						'faculty' => $this->input->post('faculty',TRUE),
						
						'current_program' => $this->input->post('degree',TRUE),
						'nationality' => $this->input->post('nationality',TRUE),
						'current_level' => $this->input->post('current_level',TRUE),
						'current_year' => $this->input->post('current_year',TRUE),
						
						'cell_no1' => $this->input->post('phonenumber_1',TRUE),
						'cell_no2' => $this->input->post('phonenumber_2',TRUE),
						'id_passport' => $this->input->post('id_passport',TRUE),
						'student_email' => $this->input->post('s_email',TRUE),
						'memoir' => $this->input->post('cv_desc',TRUE),
						
						'module_name' => $this->input->post('module',TRUE),
						'module_code' => $this->input->post('code',TRUE)
						);
			
			
			if(($this->students->check_link($stu))=== 1) 
			{
				$this->students->accept_nomination($stu);
				$email_message = $this->load->view('student/email_accept',$stu,true);
				$data = $this->students->get_data_vialink($stu);
				$lecturer_email = $data->lecturere_email;
				$student_email = $data->student_email;
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
				$this->email->cc($lecturer_email);
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
	
	
	

		//--------------------------------------------------------------------
}
