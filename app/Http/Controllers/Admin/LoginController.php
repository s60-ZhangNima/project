<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AdminloginRequest;
use App\Model\users;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //登录
    public function loginVerify(AdminloginRequest $request)
    {

        $flag = Auth::attempt(['email' => $request->input('email'),'password' => $request->input('password')]);


        $res = users::where('email',$request->input('email'))->get()->toArray();
        if (empty($res)){
            return back();
        }else{
            if(!Hash::check($request->input('password'), $res[0]['password'])){
                return back();
            }
        }


        return redirect('admin/admin');
    }
}
