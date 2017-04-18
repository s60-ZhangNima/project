<?php

namespace App\Http\Controllers\Admin;

use App\Role;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    //角色列表,分页显示
    public function roleList()
    {
        $roles = Role::Paginate(4);
        return view('admin/rolelist', compact('roles'));
    }

    //新增角色
    public function roleAdd(Request $request)
    {
        return view('admin/roleadd');
    }

    //修改
    public function update(Request $request, $role_id)
    {

        //查询当前的数据
        $role = Role::fandOrFail($role_id);
        return view('admin/roleupdate',compact('role'));
    }
}
