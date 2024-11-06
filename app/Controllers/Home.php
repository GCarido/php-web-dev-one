<?php

namespace App\Controllers;

use App\Controllers\Admin\Shop as AdminShop;   // Avoiding conflicts with namespaces

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    function validation() {
        $shop = new Shop();

        echo $shop->product('laptop', 24) . '<br>';

        $adminShop = new AdminShop();

        echo $adminShop->product('smartphone', 'SAMSUNG');
    }
    
}
