<?php namespace App\Libraries;

class Components
{
    public function customer($customer)
    {
        return view("customer", $customer);
    }
}