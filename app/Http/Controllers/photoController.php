<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class photoController extends Controller
{
    public function photo()
    {
        $result= DB::select('select * from photos');
        $img = DB::select('select * from advert');

//
//        dd($result);
        return view('home.photo')->with('result',$result)->with('img',$img);

    }

 //上传照片
    public function upphoto ( $id)
    {
//        dd($id);
        if (empty($id)){
            $id=1;
        }else{
            $result = DB::select('select * from photos where id ='.$id);
            return view('home.per_photo')->with('result',$result);
        }
//        return view('home.per_photo',compact('name'));
    }
    public function upphotos (Request $request)
    {
        $iconname = md5(time()).'.jpg';
        $data=$request->pic->move('home/upImg',$iconname);
//        dd($data);
//        $data=$request->hasFile('pic');

        $data=$request->all();
        array_pop($data);

        $data=array_merge($data,['pic'=>$iconname]);
//        dd($data);
        $result = DB::table('photolist')->insert($data);
        return redirect('home/photo');
    }

    public function per_Photo($name = '')
    {
        $result= DB::select('select * from photos');
        $img = DB::select('select * from advert');
//            dd($img);
//        dd($result);
        return view('home.per_photo')->with('result',$result)->with('img',$img);
//        return view('home.per_photo',compact('name'));
    }

    //创建相册
    public function percreate(Requests\createphotoRequest $request)
    {

        $data=$request->all();

        $result = DB::table('photos')->insert($data);
//        dd($result);
        return redirect('home/photo');

    }
     public function createphoto()
     {
         return view('home.createphoto');
     }

     //相册照片
    public function photolist($id)
    {
//     dd($id);
        $result = DB::select('select * from photolist where gid ='.$id);
        return view('home.photolist')->with('result',$result);
//        return view('home.photolist');
    }


}
