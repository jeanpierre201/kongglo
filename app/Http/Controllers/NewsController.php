<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class NewsController extends Controller
{
    //Show a New
    public function index()
    {
        $inputs = [
            'title'=> request()->title,
            'image'=> request()->image,
            'decription'=> request()->description
        ];

        $title = $inputs['title'];
        $image = $inputs['image'];
        $description = $inputs['decription'];

        //return dd($title, $image);
        return view('news.index', ['title'=> $title, 'image'=> $image, 'description'=> $description]);
    }
}
