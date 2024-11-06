<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController; //Adding the Base Controller since new folder is used for the directory

class Users extends BaseController
{
    public function index(): void
    {
        echo "This is the User Area";
        // return view('shop');
    }

    public function getAllUsers()
    {
        echo "<h2>Shopw all users</h2>";
        // return view('product');
    }
}
