<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController; //Adding the Base Controller to include

class Shop extends BaseController
{
    public function index(): void
    {
        echo "This is an Admin Shop";
        // return view('shop');
    }

    public function product($type, $id)
    {
        echo "<h2>ADMIN PRODUCT: The product is: {$type} with an Id of: {$id}</h2>";
        // return view('product');
    }
}
