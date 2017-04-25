<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApplyController extends Controller
{
    //
    public function Apply()
    {
        return view('home.apply');
    }

}
