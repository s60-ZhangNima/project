<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class photolistController extends Controller
{
    public function photolist()
    {
        return view('home.photolist');
    }
}
