<?php namespace App\Controllers;

class Main extends BaseController
{
	public function index()
	{
        $p = \Config\Services::parser();
		$p->setData([
			"frase" => "Esta frase é do parser",
			"title" => "Título"
		]);

		return $p->render("main/index");
	}
}
