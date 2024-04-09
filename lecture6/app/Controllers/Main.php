<?php namespace App\Controllers;

class Main extends BaseController
{
	public function index()
	{
		$data["title"] = "Página 1";
		$data["text"] = "Texto";

        echo view("templates/header", $data);
        echo view("page");
        echo view("templates/footer");
	}
}
