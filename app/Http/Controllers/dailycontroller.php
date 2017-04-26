<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class dailycontroller extends Controller
{
    public function daily()
    {

        $result= DB::select('select * from daily  order by id desc');
        $data = DB::select('select name from users where id =8 ');
        $replay= DB::select('select * from comment  order by id desc');
//        dd($replay);
//        $name = DB::select('select name from users where id =8 ');
//        ->with('data',$name)

//        dd($data);
//           $result = DB::select('select * from photos where id ='.$id);

        return view('home.daily')->with('result',$result)->with('data',$data)->with('replay',$replay);
//        return view('home.board');
    }
    public function mydaily()
    {

        $result= DB::select('select * from daily  order by id desc');
        $data = DB::select('select name from users where id =8 ');
        $replay= DB::select('select * from comment  order by id desc');
//        dd($replay);
//        $name = DB::select('select name from users where id =8 ');
//        ->with('data',$name)

//        dd($data);
//           $result = DB::select('select * from photos where id ='.$id);

        return view('home.mydaily')->with('result',$result)->with('data',$data)->with('replay',$replay);
//        return view('home.board');
    }




    //发表留言

    public function report(Request $request)
    {
        $iconname = md5(time()).'.jpg';
        $data=$request->img->move('home/upImg',$iconname);
//        dd($data);
//        $data=$request->hasFile('pic');
         $id= $request->uid;
        $data=$request->all();
        array_pop($data);

        $data=array_merge($data,['img'=>$iconname]);
//        $result=date('Y-m-d H:i:s',time());
//        dd($result);
//        $data=$request->all();
//        dd($data);
        $result = DB::table('daily')->insert($data);
        $grade = DB::select('select grades from grade where uid='.$id);
//        dd($grade);
//        $grade +=1;

        $gra = $grade[0]->grades +=1;
        $grade=[
            'grades'=>$gra,
            'uid'=>$id,
        ];
        DB::table('grade')->where('uid',$id)->update($grade);
        return redirect('home/mydaily');

    }

    //回复留言
    public function rreport($id)
    {
        $result = DB::select('select * from daily where id ='.$id);
        return view('home.comment')->with('result',$result);


    }
    public function reports(Request $request)
    {

        $data = $request->all();
        $result =DB::table('comment')->insert($data);
        return redirect('home/mydaily');


//        return view('home.board';
    }
    //删除留言
    public function del($id)
    {
        $result = DB::table('comment')->where('id',$id)->delete();
        $result = DB::table('daily')->where('id',$id)->delete();
        return back();
    }
}
