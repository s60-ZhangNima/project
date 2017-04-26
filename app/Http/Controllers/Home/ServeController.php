<?php

namespace App\Http\Controllers\Home;

use App\Serve;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ServeController extends Controller
{
    //前台首页
    public function Serve()
    {
//      $serves = Serve::all();
        $serves = DB::select('select * from serve ');
//
        return view('home.serve')->with('serves',$serves);
    }
}
