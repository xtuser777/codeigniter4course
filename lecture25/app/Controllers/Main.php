<?php namespace App\Controllers;

class Main extends BaseController
{
	public function index()
	{
        session()->set("level", "1");

		$data = [
			"username" => "lucas",
			"email" => "lucas@mail.com",
		];

		session()->set($data);

		$this->showSession();

		session()->remove("level");

		$this->showSession();
	}

	private function showSession()
	{
		echo "<pre>";
		print_r(session()->get());
	}
}
