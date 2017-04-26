<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class boardcontroller extends Controller
{
    public function board()
    {
        $result=DB::select('select * from board');
//        dd($result);
        return view('admin.boards')->with('result',$result);
    }
    public function bboard($id)
    {
        $result = DB::select('select * from boardr where gid ='.$id);
//        dd($result);
        return view('admin.bboards')->with('result',$result);
    }
    public function addboard()
    {
      return view('admin.addbboard');
    }
    public function addboards(Request $request)
    {
        $data= $request->all();
//        dd($data);
        $result = DB::table('board')->insert($data);
        return redirect('/admin/adminboard');
    }
    public function delboard($id)
    {
        $result = DB::table('board')->where('id',$id)->delete();
        return back();
    }
    public function delbboard($id)
    {
        $result = DB::table('boardr')->where('id',$id)->delete();
        return back();
    }

}
