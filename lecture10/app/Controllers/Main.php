<?php namespace App\Controllers;

class Main extends BaseController
{
	protected $helpers = ['date', 'math'];

	public function index()
	{
		echo now() . "<br/>";

		echo add(1, 2);
	}
}
