<?php namespace App\Controllers;

class Main extends BaseController
{
	public function _remap($method)
	{
		if (method_exists($this, $method))
			return $this->$method();
	}

	public function index()
	{
        return "index";
	}

	private function show()
	{
		return "show";
	}
}
