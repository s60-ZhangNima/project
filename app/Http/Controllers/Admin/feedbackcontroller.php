<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class feedbackcontroller extends Controller
{
    public function feedback()
    {
        $result=DB::select('select * from feedback');
//        dd($result);
        return view('admin.feedback')->with('result',$result);
//        return view('admin.feedback');
    }
    public function delfeedback($id)
    {
        $result = DB::table('feedback')->where('id',$id)->delete();
        return back();
    }
}
