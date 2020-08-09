<?php namespace App\Controllers;

class Student extends BaseController
{
	public function index()
	{
		echo view('template/header');
		echo view('student/application_part1');
		echo view('student/application_part2');
		echo view('template/footer');
	}
	
	public function requestnomination()
	{
		echo view('template/header');
		echo view('student/application_part1');
		echo view('student/application_part2');
		echo view('template/footer');
	}
	
		//--------------------------------------------------------------------

}
