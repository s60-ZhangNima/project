<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class boardController extends Controller
{
    public function board()
    {

        $result= DB::select('select * from board  order by id desc');
        $data = DB::select('select name from users where id =8 ');
        $replay= DB::select('select * from boardr  order by id desc');
//        dd($replay);
//        $name = DB::select('select name from users where id =8 ');
//        ->with('data',$name)

//        dd($data);
//           $result = DB::select('select * from photos where id ='.$id);

        return view('home.board')->with('result',$result)->with('data',$data)->with('replay',$replay);
//        return view('home.board');
    }




    //发表留言

    public function report(Request $request)
    {
//        $result=date('Y-m-d H:i:s',time());
//        dd($result);
        $data=$request->all();
//        dd($data);
        $result = DB::table('board')->insert($data);
        return redirect('home/board');

    }

    //回复留言
    public function rreport($id)
    {
//        dd($id);
        $result = DB::select('select * from board where id ='.$id);
        return view('home.bboard')->with('result',$result);


    }
    public function reports(Request $request)
    {

        $data = $request->all();
        $result =DB::table('boardr')->insert($data);
        return redirect('home/board');


//        return view('home.board';
    }
    //删除留言
   public function del($id)
   {
       $result = DB::table('boardr')->where('id',$id)->delete();
       $result = DB::table('board')->where('id',$id)->delete();
       return redirect('home/board');
   }
}
