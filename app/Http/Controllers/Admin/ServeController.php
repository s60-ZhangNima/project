<?php

namespace App\Http\Controllers\Admin;

use App\Serve;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class ServeController extends Controller
{
    //列表
    public function ServeList()
    {
        $serves = Serve::paginate(2);
        //dd($serves);
        return view('admin/serve_list',compact('serves'));
    }

    //新增图片
    public function ServeAdd(Request $request)
    {
        //dd($request->hasFile('icon'));
        //判断是否有接收到文件
        if ($request->hasFile('icon')) {

            $iconname = md5(time()).'.jpg';
            $request ->icon->move('img/serve/',$iconname);
            $date=[
                'icon'=>'img/serve/'.$iconname,
            ];
            DB::table('serve')->insert($date);
            $serves = Serve::all();
            //dd($serves);
            return view('admin/serve_List',compact('serves'));
        }else{
            return back();
        }

    }


    public function ServeDelete($serve_id)
    {

//        Image::destroy($image_id);
        $res = Serve::find($serve_id);

        $res->delete();
        return redirect('admin/serve-list');
    }




    //显示修改页面
    public function ServeUpdate($id)
    {
        return view('admin.serve_update')->with('id',$id);
    }

    //修改
    public function ServeUpdates(Request $request,$id)
    {
        if (!$request->hasFile('icon'))
        {
            return back();
        }

        $aa = Serve::find($id);
        $bb = $aa->toArray();
        $cc = $bb['icon'];

        $iconname = md5(time()).'.jpg';
        $request->icon->move("img/serve",$iconname);

        $date='img/serve/'.$iconname.'';

        $aa->icon=$date;

        $result = $aa->save();
        //dd($result);

        if ($result)
        {
            unlink($cc);
        }
        $serves = Serve::paginate(2);
        //dd($serves);
        return view('admin.serve_list',compact('serves'));
    }
}
