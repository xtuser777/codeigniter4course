<?php namespace App\Controllers;

class Main extends BaseController
{
	public function index()
	{
        $p = \Config\Services::parser();
		$p->setData([
			"title" => "Título",
			"names" => [
				["name" => "joao"],
				["name" => "carla"],
				["name" => "ana"],
			],
			"admin" => false,
			"literal" => "arafafasf",
		]);

		return $p->render("main/index");
	}
}
