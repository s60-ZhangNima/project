<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class boardController extends Controller
{
    public function board()
    {
        return view('home.board');
    }
}
