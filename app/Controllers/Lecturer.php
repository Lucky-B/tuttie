<?php namespace App\Controllers;

class Lecturer extends BaseController
{
	public function index()
	{
		echo view('template/header');
		echo view('lecturer/application');
		echo view('template/footer');
	}

	public function finished()
	{
		echo "Done";
	}
}
