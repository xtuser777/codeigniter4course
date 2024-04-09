<?php namespace App\Controllers;

class Main extends BaseController
{
	public function index()
	{
		$data = [
			"name1" => "Lucas",
			"name2" => "Oliveira"
		];

		return view("main/index", $data, [ "cache" => 60 ]);
	}
}
