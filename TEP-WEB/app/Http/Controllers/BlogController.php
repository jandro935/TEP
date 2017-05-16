<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog/index');
    }

    public function apiCall()
    {
        $posts = \GuzzleHttp\json_decode(file_get_contents('http://localhost/TEP/TEP-CMS/wp-json/wp/v2/posts'), TRUE);
        return dd($posts);
    }
}
