<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class photoController extends Controller
{
    public function photo()
    {
        return view('home.photo');
    }
}
