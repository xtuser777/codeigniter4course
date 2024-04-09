<?php namespace App\Controllers;

use App\Libraries\Store\Sale;

class Main extends BaseController
{
	public function index()
	{
        $s = new Sale();
		$s->product = "Produto 1";
		$s->price = 10000;

		echo $s->product;
		echo "<br/>";
		echo $s->price;
		echo "<br/><br/>";
		echo $s->info();
	}
}
