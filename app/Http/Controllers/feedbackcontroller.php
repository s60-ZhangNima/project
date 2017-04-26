<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class feedbackcontroller extends Controller
{
    public function feedback()
    {
        return view('home.feedback');
    }
    public function feedbacks(Request $request)
    {
        $data=$request->all();
//        dd($data);
//       array_pop($data);
        $result = DB::select('select name from users where id=8');
        $name=$result[0]->name;
        $date=array_merge($data,['username'=>$name]);
//        dd($date);

        $result = DB::table('feedback')->insert($date);
        return view('home.feedback');
    }
}
