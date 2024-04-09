<?php namespace App\Controllers;

class Main extends BaseController
{
	public function index()
	{
		$brands = [
			"Audi",
			"Mercedes",
			"Ferrari",
			"Porche"
		];

		return view("main/index", [ "brands" => $brands ]);
	}
}
