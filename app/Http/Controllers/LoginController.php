<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {

        $images = Image::all()->toarray();
//        dd($images);

        return view('home.login',compact('images'));
    }
}
