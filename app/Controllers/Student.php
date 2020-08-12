<?php namespace App\Controllers;

class Student extends BaseController
{
	protected $session;

    function __construct()
    {
		$this->helpers = array_merge($this->helpers, ['url']);
		$this->session = \Config\Services::session();
        $this->session->start();
    }

	public function index()
	{
		if($this->session)
		{
			$process = ['step_1' => 'Done'];
			$this->session->set($process);
			echo view('template/header');
			echo view('student/application_part1');
			echo view('template/footer');
		}
	}

	public function laststep()
	{
		if($this->session->step_1)
		{
			$process = ['step_2' => 'Done'];
			$this->session->set($process);
			echo session_id();
			echo session('step_2');
			echo view('template/header');
			echo view('student/application_part2');
			echo view('template/footer');
		}
		else
		{
			return redirect()->to('index'); 
		}
	}


	public function finished()
	{
		if(($this->session->step_2)== 'Done')
		{
			$process = ['step_2' => 'Done'];
			$this->session->set($process);
			echo session_id();
			echo session('step_2');
			echo view('template/header');
			echo view('student/finished');
			echo view('template/footer');
			
		}
		else
		{
			$this->session->destroy();
			return redirect()->to('index');
		}
	}

		//--------------------------------------------------------------------
}
