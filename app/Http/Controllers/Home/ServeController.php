<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServeController extends Controller
{
    //前台首页
    public function Serve()
    {
        return view('home.serve');
    }
}
