<?php namespace App\Controllers;

class Main extends BaseController
{
	public function index()
	{
		$customers = [
			[
				"name" => "teste 1",
				"email" => "teste1@mail.com"
			],
			[
				"name" => "teste 2",
				"email" => "teste2@mail.com"
			],
		];

		return view("main/index", [ "customers" => $customers ]);
	}
}
