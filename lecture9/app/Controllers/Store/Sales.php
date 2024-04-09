<?php namespace App\Controllers\Store;

use CodeIgniter\Controller;

class Sales extends Controller
{
    public function index()
    {
        return "Vendas";
    }

    public function sale($value)
    {
        return $value;
    }
}