<?php namespace App\Controllers;

class Main extends BaseController
{
	public function index()
	{
        $db = \Config\Database::connect();
		$results = $db->query("SELECT * FROM customers")->getResultArray();
		$db->close();

		echo "<pre>";
		print_r($results);
	}
}
