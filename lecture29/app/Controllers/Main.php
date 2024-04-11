<?php namespace App\Controllers;

class Main extends BaseController
{
	public function index($id)
	{
		$db = db_connect();
		// $data = [
		// 	$id
		// ];
		// $results = $db->query("SELECT * FROM customers WHERE id = ?;", $data);
		$data = [
			"id" => $id
		];
		$results = $db->query("SELECT * FROM customers WHERE id = :id:;", $data);
		$db->close();

		foreach ($results->getResult() as $row)
		{
			echo "<p>$row->name</p>";
		}
	}
}
