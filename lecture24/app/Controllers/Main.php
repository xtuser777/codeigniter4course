<?php namespace App\Controllers;

class Main extends BaseController
{
	public function index()
	{
        session()->set("username", "lucas");
        session()->set("email", "lucas@mail.com");

		echo "<pre>";
		print_r(session()->get());
	}

	public function info()
	{
		echo "Usuário: " . session()->get("username") . "<br/>";
		echo "E-mail: " . session()->get("email");
	}
}
