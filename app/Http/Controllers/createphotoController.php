<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class createphotoController extends Controller
{
    public function createphoto()
    {
        return view('home.createphoto');
    }
}
