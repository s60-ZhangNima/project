<?php

namespace App\Http\Controllers\Home;

use App\Model\comments;
use App\Model\icon;
use App\Model\lamp_district;
use App\Model\photo;
use App\Model\states;
use App\Model\story;
use App\Model\users;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function perHome()
    {
        $uid = Auth::user()->id;
        $states = states::where('uid',$uid)->get();
        $story = story::where('uid',$uid)->get();
        $icon = users::where('id',$uid)->get()->toArray();
        if ($icon[0]['icon']){
            $res = $icon[0]['icon'];
        }else{
            $res ='';
        }
//        dump($states->toArray());
//        dd($story->toArray());
        if (empty($states->toArray())){
            $states = '';
        }
        if (empty($story->toArray())){
            $story = '';
        }


        return view('home.per_home',compact('states','story','res'));

    }




    public function perInfo()
    {
        return view('home.per_info');
    }

    public function perState()
    {
        $uid = Auth::user()->id;

        $res = states::where('uid',$uid)->get()->toArray();
       if ($res){
           $states = states::where('uid',$uid)->get();
       }else{
           $states ='';
       }
        return view('home.per_state',compact('states'));
    }



    public function perFocus()
    {
        return view('home.per_focus');
    }

    public function perSettings()
    {
        return view('home.per_settings');
    }

    public function perIcon($name = '')
    {
        return view('home.per_icon',compact('name'));
    }

    public function citys($id)
    {   $result = lamp_district::where('upid',$id)
                                ->get()
                                ->toArray();
        return response()->json($result);
    }

    public function writeState(Request $request)
    {
        $email = Auth::user()->email;
        $user = users::where('email' ,$email)->first();
        $states = new states();
        $states->content = $request->input('content');
        $states->uid = $user->id;
        $states->create_time = time();
        $result = $states->save();
        if($result){
            return redirect('home/per_home');
        }else{
            return back();
        }
    }

    public function writeComment(Request $request)
    {
        $comment = new comments();
        $comment->content = $request->input('content');
        $comment->sid = $request->input('sid');
        $comment->create_time=time();
        $result = $comment->save();
        if($result){
            $id = $request->input('sid');
            return redirect('home/per_comments/'.$id);
        }else{
            return back();
        }
    }

    public function showComment($id)
    {

        $states = states::where('id',$id)->get();
        $comment = comments::where('sid',$id)->orderBy('id','desc')->get();
        if (empty($comment->toArray())){
            $comment = '';
        }
        return view('home.per_comments',compact('comment','states'));
    }

    public function perPraise($id)
    {
            $state = states::find($id);
            if($state->praise  == 0)
            {
                $state->praise = 1;
                $result = $state->save();
            }else{
                $state->praise = 0;
                $result = $state->save();
            }
            $states = states::find($id);

        $praise = $states->praise;

        echo $praise;
    }

    public function writeStory(Request $request)
    {
        $uid = Auth::user()->id;
       $story = new story();
       $story->uid = $uid;
        $story->content = $request->input('content');
        $story->desc = $request->input('desc');
        $story->who = $request->input('who');
        if(empty($request->input('time'))){
            $story->happen_time = date('Y-m-d ',time());
        }else{
            $story->happen_time = $request->input('time');
        }
        $result = $story->save();
        if($result){
            return redirect('home/per_home');
        }else{
            return back();
        }
    }

    public function delStory($id)
    {

        $story = story::find($id);
        $result = $story->delete();
        echo $result;
    }

    public function delComments($id)
    {

        $com = comments::find($id);
        $result = $com->delete();
        echo $result;
    }

    public function perCpraise($id)
    {
        $com = comments::find($id);
        if($com->praise  == 0)
        {
            $com->praise = 1;
            $result = $com->save();
        }else{
            $com->praise = 0;
            $result = $com->save();
        }
        $com = comments::find($id);

        $praise = $com->praise;

        echo $praise;
    }

    public function upIcon(Request $request)
    {
        $uid = Auth::user()->id;
        if($request->hasFile('pic')){
            $iconname = md5(time()).'.jpg';
            $request->file('pic')->move('home/upImg',$iconname);
            $photos = photo::where('name','我的头像')->get()->toArray();
            if ($photos){

                $icons =  new icon();
                $icons->pid = $photos[0]['id'];
                $icons->name =  $iconname;
                $icons->desc = '我的头像';
                $icons->create_time = time();
                $icons->save();
                $id = $icons->id;
                session(['cid'=>$id]);
                $uicon = users::find($uid);
                $uicon->icon = $iconname;
                $uicon->save();
                return redirect('home/per_home');
            } else {
                $pho = new photo();
                $pho->uid = $uid;
                $pho->name = '我的头像';
                $pho->desc = '存放头像';
                $pho->create_time = time();
                $pho->save();

                $id = photo::where('name','我的头像')->get()->toArray();
                $icons =  new icon();
                $icons->pid = $id[0]['id'];
                $icons->name = $iconname;
                $icons->create_time = time();
                $icons->desc = '我的头像';
                $icons->save();
                session(['cid'=>$id]);
                $uicon = users::where('id',$uid);
                $uicon->icon = $iconname;
                $uicon->save();
                return redirect('home/per_home');

            }
        }else{
            return back();
        }
    }


}
