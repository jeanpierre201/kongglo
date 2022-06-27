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
            'link'=> request()->link,
            'pubdate'=> request()->pubdate,
            'media'=> request()->media,
            'decription'=> request()->description
        ];

        $title = $inputs['title'];
        $image = $inputs['image'];
        $media = $inputs['media'];
        $link = $inputs['link'];
        $pubdate = $inputs['pubdate'];
        $description = $inputs['decription'];

        //return dd($title, $image);
        return view('news.index', ['pubdate'=> $pubdate, 'media'=> $media, 'link'=> $link, 'title'=> $title, 'image'=> $image, 'description'=> $description]);
    }

    public function world() {
        return view('news.world');
    }

    public function sport() {
        return view('news.sport');
    }

    public function technology() {
        return view('news.technology');
    }

    public function entertainment() {
        return view('news.entertainment');
    }

    public function science() {
        return view('news.science');
    }

    public function travel() {
        return view('news.travel');
    }

    public function weather() {
        return view('news.weather');
    }

    public function business() {
        return view('news.business');
    }

    public function politics() {
        return view('news.politics');
    }
}
