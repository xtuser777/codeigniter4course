<?php namespace App\Controllers;

class Main extends BaseController
{
	public function index()
	{
		return view("main/index");
	}

	public function newCustomer()
	{
		$name = $this->request->getPost("name");
		$email = $this->request->getPost("email");

		$db = db_connect();
		$db->query(
			"INSERT INTO customers (name, email) VALUES (:name:, :email:);", 
			["name" => $name, "email" => $email]);
		$db->close();
		echo "Novo cliente cadastrado com sucesso!";
	}
}
