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

        $images = Image::all();
        //dd($images);
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

    public function ImageDelete($image_id)
    {

        Image::destroy($image_id);
        return redirect('admin/image-list');
    }

}
