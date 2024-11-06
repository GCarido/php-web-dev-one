<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController; //Adding the Base Controller since new folder is used for the directory

class Blog extends BaseController
{
    public function index(): void
    {
        echo "<h2>A list of blog posts</h2>";
        // return view('shop');
    }

    public function createNew()
    {
        return view('blog_form');
    }

    public function saveBlog()
    {
        echo '<pre>';
        print_r($_POST);
        echo '<pre>';
    }
}
