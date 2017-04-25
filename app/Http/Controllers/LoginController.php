<?php

namespace App\Http\Controllers;

use App\Image;
use App\Link;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        //轮播图
        $images = Image::all()->toarray();
//        dd($images);

        //友情链接
        $links = Link::all()->toArray();
        return view('home.login',compact('images','links'));
    }
}
