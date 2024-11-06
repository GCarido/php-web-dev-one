<?php

namespace App\Controllers;

class Shop extends BaseController
{
    public function index(): string
    {
        return view('shop');
    }

    public function product($type = "laptop", $id = "Dell")
    {
        echo "<h2>The product is: {$type} with an Id of: {$id}</h2>";
        // return view('product');
    }
}
