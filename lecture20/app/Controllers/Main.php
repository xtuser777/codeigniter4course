<?php namespace App\Controllers;

class Main extends BaseController
{
	public function index()
	{
        $table = new \CodeIgniter\View\Table();
		$template = [
			"table_open" => "<table class=\"table table-striped\">",
		];
		$table->setTemplate($template);
		$data = [
			["NAME", "COLOR", "SIZE"],
			["Fred", "blue", "small"],
			["Mary", "red", "large"],
			["John", "gray", "medium"],
		];

		return view("main/index", ["table" => $table->generate($data)]);
	}
}
