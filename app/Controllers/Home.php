<?php namespace App\Controllers;

class Home extends BaseController
{
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
