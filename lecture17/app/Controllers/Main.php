<?php namespace App\Controllers;

class Main extends BaseController
{
	public function index()
	{
        $data = [
			"name" => "Lucas Oliveira",
			"email" => "lucas@mail.com"
		];

		$r = \Config\Services::renderer();

		return $r->setData($data)->render("main/index");
	}
}
