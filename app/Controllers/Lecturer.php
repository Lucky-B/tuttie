<?php namespace App\Controllers;

class Lecturer extends BaseController
{
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
			echo view('lecturer/application');
			echo view('template/footer');
		}
	}

	public function finished()
	{
		
		if(isset($this->session->step_1))
		{		
			echo view('template/header');
			echo view('lecturer/finished');
			echo view('template/footer');
		}
		else
		{
			return redirect()->to('index'); 
		}
		$this->session->destroy();
	}
}
