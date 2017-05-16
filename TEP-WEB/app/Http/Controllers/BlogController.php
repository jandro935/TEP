<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Index Blog View.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('blog/index');
    }

    // Example Function
    public function apiCall()
    {
        $posts = \GuzzleHttp\json_decode(file_get_contents('http://localhost/TEP/TEP-CMS/wp-json/wp/v2/posts'), TRUE);
        return dd($posts);
    }
}
