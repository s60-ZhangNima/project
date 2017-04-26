<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class weathercontroller extends Controller
{
    public function weather()
    {
        return view('home.weather');
    }
}
