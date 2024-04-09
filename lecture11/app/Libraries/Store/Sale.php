<?php namespace App\Libraries\Store;

class Sale
{
    public $product;
    public $price;

    public function info()
    {
        return "Produto: $this->product | Preço: $this->price";
    }
}