<?php

namespace App\Http\Controllers\home;

use App\Apply;
use App\Model\icon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ApplyController extends Controller
{

    //前台页面
    public function Apply()
    {
        $applys = Apply::paginate(6);
        return view('home.apply',compact('applys'));
    }


    //后台列表页
    public function ApplyList()
    {
        $applys = Apply::paginate(3);
        //dd($applys);
        return view('admin/apply_list',compact('applys'));
    }


    //跳转到新增页面
    public function ApplyAdd(Request $request)
    {
        //判断,如果没有数据传输就跳转到新增页面
        if ($request->isMethod('post')){
            $iconname = md5(time()).'.jpg';
            $request ->icon->move('apply/img/',$iconname);
            $date=[
                'name'=>$request->name,
                'icon'=>'apply/img/'.$iconname,
                'game'=>'apply/'.$request->game.'/index.html'
            ];
           //dd($date);
            DB::table('apply')->insert($date);
            $applys = Apply::all();
            return redirect('/admin/apply-list');
        }
        return view('admin.apply_add');
    }

    //修改
    public function ApplyUpdate(Request $request, $apply_id)
    {
        //  dd($apply_id);
          $game = $request->input('game');
          $name = $request->input('name');
          $iconname = $request->input('icon');

        if ($request->isMethod('post')){
            //查出原图地址
            $aa = Apply::find($apply_id)->toArray()['icon'];
            //给新图重命名
            $iconname = md5(time()).'.jpg';
            $request->icon->move('apply/img/',$iconname);
            $date = [
                'name'=>$name,
                'icon'=>'apply/img/'.$iconname,
                'game'=>$game,
            ];
        //    dd($date);
            $retu = DB::table('apply')->where('id',$apply_id)->update($date);

            if ($retu == 1)
            {
                unlink($aa);
            }
            return redirect('admin/apply-list');
        }
        //查询当前id数据
        $apply = Apply::findOrFail($apply_id);
//        dd($apply);
        return view('admin.apply_update', compact('apply'));
    }


    //删除
    public function ApplyDelete($apply_id)
    {
        $aa = Apply::find($apply_id)->toArray()['icon'];
        $retu = Apply::destroy($apply_id);
        if ($retu == 1)
        {
            unlink($aa);
        }
        return redirect('admin/apply-list');
    }
}
