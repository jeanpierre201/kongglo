<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    //Show a New
    public function index($inputs)
    {
        //return dd($comments);
        return view('news.index', ['inputs'=> $inputs]);
    }
}
