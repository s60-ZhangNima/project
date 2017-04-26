<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class dailycontroller extends Controller
{
    public function board()
    {
        $result=DB::select('select * from daily');
//        dd($result);
        return view('admin.daily')->with('result',$result);
    }
    public function bboard($id)
    {
        $result = DB::select('select * from comment where gid ='.$id);
//        dd($result);
        return view('admin.comment')->with('result',$result);
    }
    public function addboard()
    {
        return view('admin.adddaily');
    }
    public function addboards(Request $request)
    {
        $data= $request->all();
//        dd($data);
        $result = DB::table('daily')->insert($data);
        return redirect('/admin/admindaily');
    }
    public function delboard($id)
    {
        $result = DB::table('daily')->where('id',$id)->delete();
        return back();
    }
    public function delbboard($id)
    {
        $result = DB::table('comment')->where('id',$id)->delete();
        return back();
    }
}
