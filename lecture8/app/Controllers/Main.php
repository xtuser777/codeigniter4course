<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Main extends Controller
{
	public function index()
	{
        return "Lucas " . $this->count("Lucas");
	}

	private function count(string $word)
	{
		return strlen($word);
	}

	public function test($name, $secondName)
	{
		return "$name $secondName";
	}
}
