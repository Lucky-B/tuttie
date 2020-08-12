<?php namespace App\Controllers;

class Home extends BaseController
{
	function __construct()
    {
        $this->helpers = array_merge($this->helpers, ['url']);
    }
	
	public function index()
	{
		echo view('template/header');
		echo view('template/index');
		//echo view('template/application_open');
		//echo view('template/application_closed');
		echo view('template/footer');
	}
		//--------------------------------------------------------------------
}
