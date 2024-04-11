<?php namespace App\Controllers;

class Main extends BaseController
{
	public function index()
	{
        $db = \Config\Database::connect();
		$results = $db->query("SELECT * FROM customers");
		$db->close();

		foreach ($results->getResult() as $row)
		{
			echo "<p>$row->name</p>";
		}

		echo "<hr/>";

		foreach ($results->getResult('array') as $row)
		{
			echo "<p>" . $row['name'] . "</p>";
		}
	}
}
