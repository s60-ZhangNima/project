<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\UserRegisterRequest;
use App\Model\users;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    //显示注册表单
    public function register()
    {
        return view('home.register');
    }


    //保存用户信息
    public function store(UserRegisterRequest $request)
    {

        $confirmed_code = str_random(10);
        $data = [
            'icon'=>'men_main.jpg',
            'confirmed_code' =>$confirmed_code,
        ];
        $user = User::create(array_merge($request->all(), $data ));
        //发送邮件
        $view = 'home.emailConfirmed';
        $subject = '请验证邮箱';
        $this->sendEmail($user,$view,$subject, $data);
        return redirect('/');
    }

    public function sendEmail($user, $view, $subject, $data)
    {

        Mail::send($view, $data, function ($m) use ($subject,$user) {
            $m->to($user->email)->subject($subject);
        });
    }

    public function emailConfirm($code)
    {
        //dd($code);
        //查询与之匹配的这个用户
        $user = User::where('confirmed_code', $code)->first();
        //dd($user);
        if (is_null($user)) {
            return redirect('/');
        }
        $user->confirmed_code = str_random(10);
        $user->is_confirmed = 1;
        $user->save();

        return redirect('/');


    }


    //处理登录
    public function singin(UserLoginRequest $request)
    {
        //dd($request->all());
        Auth::attempt(['email' => $request->input('email'),'password' => $request->input('password')]);
        //dd($flag);

        //邮箱判断
        $result = User::where('email',$request->input('email'))->get()->toArray();
            if ($result[0]['is_confirmed'] == 0) {
                return back();
            }
        $res = users::where('email',$request->input('email'))->get()->toArray();
        if(!Hash::check($request->input('password'), $res[0]['password'])){
            return back();
        }

        return redirect('/index');

    }



}
