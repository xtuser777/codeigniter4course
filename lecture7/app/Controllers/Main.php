<?php namespace App\Controllers;

class Main extends BaseController
{
	public function index()
	{
		echo "index";
		echo $this->execute();
	}

	public function test()
	{
		echo "teste";
	}

	public function execute()
	{
		echo "execute main";
	}
}
