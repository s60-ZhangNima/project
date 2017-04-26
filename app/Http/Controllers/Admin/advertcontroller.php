<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class advertcontroller extends Controller
{
    public function advert()
    {
        $result=DB::select('select * from advert');
//        dd($result);
        return view('admin.advert')->with('result',$result);
    }
    public function addadvert()
    {
//        return view('admin.addbboard');
        return view('admin.addadvert');
    }
    public function addadverts(Request $request)
    {
        $iconname = md5(time()).'.jpg';
        $data=$request->img->move('home/upImg',$iconname);
//        dd($data);
//        $data=$request->hasFile('pic');
//        $id= $request->uid;
        $data=$request->all();

        array_pop($data);

        $data=array_merge($data,['img'=>$iconname]);
//            dd($data);
//        $result=date('Y-m-d H:i:s',time());
//        dd($result);
//        $data=$request->all();
//        dd($data);
        $result = DB::table('advert')->insert($data);
//        dd($request->all());
        return redirect('/admin/adminadvert');
    }
    public function readvert($id)
    {
//        dd($id);
        $result = DB::select('select * from advert where id='.$id);
//        dd($result);
        return view ('admin.readvert')->with('result',$result);
    }
    public function readverts(Request $request)
    {
        $iconname = md5(time()).'.jpg';
        $data=$request->img->move('home/upImg',$iconname);
        $data=$request->all();

        array_pop($data);

        $data=array_merge($data,['img'=>$iconname]);
//        dd($data);
        $img=$data['img'];
        $id=$data['id'];
        $result = DB::table('advert')->where('id',$id)->update(
            [
                'img'=>$img,
            ]
        );

//        $result = DB::table('advert')->insert($data);
//        dd($request->all());
        return redirect('/admin/adminadvert');
    }
    public function deladvert($id)
    {
        $result = DB::table('advert')->where('id',$id)->delete();
        return redirect('/admin/adminadvert');
    }
}
