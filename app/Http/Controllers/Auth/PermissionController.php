<?php

namespace App\Http\Controllers\Auth;


use App\Permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PermissionController extends Controller
{

    //显示权限列表
    public function activity()
    {
        //查询所有的权限,分页显示
        $activitys = Permission::paginate(4);
        return view('admin.activity', compact('activitys'));
    }

    public function permissionadd(Request $request)
    {
        if ($request->isMethod('post')){
            //添加权限操作
            $permission = Permission::create($request->all());
            return redirect('admin/activity');
        }
        return view('admin.profile');
    }

    public function permissionupdate(Request $request, $permission_id)
    {
        //修改用户信息
        if($request->isMethod('post')){
            $alters = Permission::findOrFail($permission_id);
            $alters -> update($request->all());
            return redirect('admin/activity');
        }
        //查询当前权限信息
        $alters = Permission::findOrFail($permission_id);
        //dd($alters);
        return view('admin/alter', compact('alters'));
    }

    public function permissiondelete($permission_id)
    {
        //删除信息
        Permission::destroy([$permission_id]);
        return redirect('admin/activity');
    }

}