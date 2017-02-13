<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class per_photoController extends Controller
{
    public function per_photo()
    {
        return view('home.per_photo');
    }
}
