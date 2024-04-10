<?php namespace App\Controllers;

class Main extends BaseController
{
	public function index()
	{
        return "index";
	}

	public function show()
	{
		return "show";
	}

	public function customer($id)
	{
		return "Cliente id: $id";
	}
}
