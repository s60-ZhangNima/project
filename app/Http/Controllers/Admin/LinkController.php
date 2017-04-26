<?php

namespace App\Http\Controllers\Admin;

use App\Link;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LinkController extends Controller
{
    //显示友情链接列表
    public function LinkList()
    {
        $links = Link::paginate(1);
        return view('admin/link_list',compact('links'));
    }

    //增加
    public function LinkAdd(Request $request)
    {
        //dd($request->all());
        if ($request->isMethod('post')) {
            $link = new Link();
            $link->url=$request->input('url');
            $link->name=$request->input('name');
//            dd($link->toArray());
            $link->save();

//            $inset = Link::create($request->all());
//            dd(Link::create($request->all()));
            return redirect('admin/link-list');
        }
        return view('admin/link_add');
    }

    //删除
    public function LinkDelete($link_id)
    {
        //dd($link_id);
        Link::destroy($link_id);
        return redirect('admin/link-list');
    }

    //修改
    public function LinkUpdate(Request $request, $link_id)
    {
        if ($request->isMethod('post')){
            $link = Link::findOrFail($link_id);
            //dd($request->all());
            $link -> update($request->all());
            return redirect('admin/link-list');
        }
        //查询当前id数据
        $link = Link::findOrFail($link_id);
        return view('admin.link_update', compact('link'));
    }
}
