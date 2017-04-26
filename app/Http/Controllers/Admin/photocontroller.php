<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class photocontroller extends Controller
{
    public function photo()
    {
        $result=DB::select('select * from photos');
//        dd($result);
        return view('admin.photo')->with('result',$result);
//        return view('admin.photo');
    }
    public function photolist($id)
    {

//        dd($id);
//        $result=DB::select('select * from photolist');
        $result = DB::select('select * from photolist where gid ='.$id);
//        dd($result);
        return view ('admin.photolist')->with('result',$result);
//        return view('admin.photo');
    }
    public function addphoto(Request $request)
    {
        return view ('admin.addphoto');

    }
    public function addphotos(Request $request){
        $data = $request->all();
//        dd($data);
        $result = DB::table('photos')->insert($data);
        return redirect('admin/adminphoto');
//
    }
    public function rephoto($id)
    {
        $result = DB::select('select * from photos where id='.$id);
//        dd($result);
        return view ('admin.rephoto')->with('result',$result);
    }
    public function rephotos(Request $request)
    {
       $name = $request->input('name');
       $desc = $request->input('desc');
       $id = $request->input('id');
//       dd($id);
        $result = DB::table('photos')->where('id',$id)->update(
          [
              'name'=>$name,
              'desc'=>$desc,
          ]
        );
//        dd($result);
        return redirect('admin/adminphoto');
    }

    public function delphoto($id)
    {
        $result = DB::table('photos')->where('id',$id)->delete();
        return redirect('admin/adminphoto');
    }
    public  function  addphotolist($id)
    {
        $result = DB::select('select * from photos where id='.$id);
        return view ('admin.addphotolist')->with('result',$result);
//        return view ('admin.addphotolist');
    }
    public function addphotolists(Request $request)
    {
        $iconname = md5(time()).'.jpg';
        $data=$request->pic->move('home/upImg',$iconname);
        $data=$request->all();
        array_pop($data);
//        $data=$request->all();
        $data=array_merge($data,['pic'=>$iconname]);
//        dd($data);
        $result = DB::table('photolist')->insert($data);
        return redirect('admin/adminphoto');
//        dd($data);
    }
    public function delphotolist($id)
    {
        $result = DB::table('photolist')->where('id',$id)->delete();
        return back();
    }
}
