<?php

namespace App\Controllers;

class Blog extends BaseController
{
    public function index()
    {
        $data = [
            'meta_title' => 'Codeigniter 4 Blog',
            'title' => 'This is a Blog Page',
        ];

        $posts = ['Title 1', 'Title 2', 'Title 3'];

        $data['posts'] = $posts;
        
        return view('blog', $data);
    }

    public function post() {

        $data = [
            'meta_title' => 'Codeigniter 4 Post Page',
            'title' => 'This is a blog for post page!!!',
        ];

        return view('single_post', $data);
    }
}
