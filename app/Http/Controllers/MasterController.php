<?php

namespace App\Http\Controllers;

use App\Link;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    //
    public function Master()
    {
        //友情链接
        $links = Link::all()->toArray();
        return view('layouts.master',compact('links'));
    }
}
