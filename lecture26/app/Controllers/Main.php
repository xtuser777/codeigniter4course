<?php namespace App\Controllers;

class Main extends BaseController
{
	public function index()
	{
        echo "index";
		$this->showSession();
	}

	public function login()
	{
		session()->set([
			"usuario" => "ana",
			"email" => "ana@gmail.com",
		]);

		echo "login";

		$this->showSession();
	}

	public function user()
	{
		if (session()->has("usuario"))
		{
			echo "Usuário logado";
		}
		else
		{
			echo "Usuário não logado";
		}
	}

	public function logout()
	{
		session()->destroy();
		//session()->stop();

		return redirect()->to(site_url("main/index"));
	}

	private function showSession()
	{
		echo "<pre>";
		print_r(session()->get());
	}
}
