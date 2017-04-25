<?php

namespace App\Http\Controllers\Admin;

use App\Image;
use App\Model\comments;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class ImageController extends Controller
{
    //显示轮播图图片
    public function ImageList()
    {

        $images = Image::paginate(2);
        ///dd($images);
        return view('admin/image_List',compact('images'));
    }

    //新增图片
    public function ImageAdd(Request $request)
    {
        //判断数据库数量
        $count= count(Image::all()->toArray());
        if ($count > 3){
            return back();
        }
        //判断是否有接收到文件
        if ($request->hasFile('icon')) {

                $iconname = md5(time()).'.jpg';
                $request ->icon->move('img/lunbo/',$iconname);
                $date=[
                    'icon'=>'img/lunbo/'.$iconname,
                ];
                DB::table('images')->insert($date);
                $images = Image::all();
                return view('admin/image_List',compact('images'));

        }else{
            return back();
        }

    }

    public function ImageUpdate($id)
    {
        return view('admin.image_update')->with('id',$id);
    }


    public function Update(Request $request,$id)
    {
        if (!$request->hasFile('icon'))
        {
            return back();
        }

        $aa = Image::find($id);
        $bb = $aa->toArray();
        $cc = $bb['icon'];
       // dd($request->hasFile('icon'));

        $iconname = md5(time()).'.jpg';

        $request->icon->move("img/lunbo",$iconname);

        $date='img/lunbo/'.$iconname.'';

        $aa->icon=$date;

        $result = $aa->save();

        if ($result)
        {
            unlink($cc);
        }
        $images = Image::all();
        //dd($images);
        return view('admin/image_List',compact('images'));

    }


    public function ImageDelete($image_id)
    {
        //dd($image_id);
//        Image::destroy($image_id);
        $res = Image::find($image_id);
        $res->delete();
        return redirect('admin/image-list');
    }

}
