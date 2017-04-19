<?php

namespace App\Http\Controllers\Admin;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function userList()
    {

        $users = User::all();
        foreach ($users as $user) {
            $perms = array();
            //dd($user->perms);


            foreach ($user->perms as $perm) {

                $perms[] = $perm->display_name;
//                dump($perm->display_name);
            }
            $user->perms = implode(',', $perms);
            dd($users);
        }
        return view('admin/userlist', compact('users'));

    }

    public function useradd(Request $request)
    {
        $confirmed_code = str_random('10');
//        dd($confirmed_code);
        if ($request->isMethod('post')){
            User::create(array_merge($request->all(),['icon'=>'image/aa.gif','confirmed_code'=>$confirmed_code]));
            return redirect('admin/user-list');
        }
        return view('admin/useradd');
    }


    public function userupdate(Request $request, $user_id)
    {
//        Role::
        if ($request->isMethod('post')){
            $user = User::findOrFail($user_id);
            $user -> update($request->all());
            return redirect('admin/user-list');
        }
//        查询当前id数据
        $user = User::findOrFail($user_id);
        return view('admin/userupdate', compact('user'));
    }

    public function userdelete($user_id)
    {
        User::destroy($user_id);
        return redirect('admin/user-list');
    }

    public function allotrole(Request $request, $user_id)
    {
        if ($request->isMethod('post')){
            //获取当前用户的角色

            $user = User::find($user_id);

//dd($request->input('permission_id'));
            DB::table('role_user')->where('user_id', $user_id)->delete();
            foreach($request->input('role_id') as $role_id){

                $result =  DB::table('role_user')->insert([
                    'role_id'=>$role_id,
                    'user_id' => $user_id,
                ]);
            }

            return redirect('admin/user-list');
        }
         $roles = Role::all();


        return view('admin/allotrole', compact('roles','user_id'));
    }

}
