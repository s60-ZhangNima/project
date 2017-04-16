<?php

namespace App\Http\Controllers\Home;

use App\Model\comments;
use App\Model\feeling;
use App\Model\focus;
use App\Model\icon;
use App\Model\info;
use App\Model\lamp_district;
use App\Model\like;
use App\Model\photo;
use App\Model\school;
use App\Model\states;
use App\Model\story;
use App\Model\users;
use App\Model\work;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


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
        if ($states->isEmpty()){
            $states = '';
        }
        if ($story->isEmpty()){
            $story = '';
        }


        return view('home.per_home',compact('states','story','res'));

    }




    public function perInfo()
    {
        $school = school::where('uid',Auth::user()->id)->get();
        if ($school->isEmpty()){
            $school = '';
        }
        $info = info::where('uid',Auth::user()->id)->get();
        if ($info->isEmpty()){
            $info = '';
        }
        $work = work::where('uid',Auth::user()->id)->get();
        if ($work->isEmpty()){
            $work = '';
        }
        $feel = feeling::where('uid',Auth::user()->id)->get();
        if ($feel->isEmpty()){
            $feel = '';
        }
        $like = like::where('uid',Auth::user()->id)->get();
        if ($like->isEmpty()){
            $like = '';
        }

        return view('home.per_info',compact('school','feel','work','like','info'));
    }

    public function perState()
    {
        $uid = Auth::user()->id;

        $states = states::where('uid',$uid)->get();
       if ($states->isEmpty()){

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
        $em = users::select('email')->where('id',Auth::user()->id)->get()->toArray();
        $em = $em[0]['email'];
        $em = substr_replace($em,'******',2,6);
        return view('home.per_settings',compact('em'));
    }

    public function perIcon($name = '')
    {
        return view('home.per_icon',compact('name'));
    }

    public function citys($id)
    {  $result = lamp_district::where('upid',$id)
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

    public function writeSchool(Request $request)
    {

        $res = school::where('uid',Auth::user()->id)->get()->toArray();

        if (empty($res)){
            $sch = new school();
            $sch->uid = Auth::user()->id;
            $sch->college = $request->input('college');
            $sch->dept = $request->input('dept');
            $sch->prof = $request->input('prof');
            $sch->class = $request->input('class');
            $sch->stn = $request->input('stn');
            $sch->save();
        } else {
            $id = school::where('uid',Auth::user()->id)->get()->toArray();
            $sch = school::find($id[0]['id']);
            $sch->college = $request->input('college');
            $sch->dept = $request->input('dept');
            $sch->prof = $request->input('prof');
            $sch->class = $request->input('class');
            $sch->stn = $request->input('stn');
            $sch->save();
        }

        return redirect('home/per_info');
    }

    public function writeInfo(Request $request)
    {

        dd($request);
        $res = info::where('uid',Auth::user()->id)->get()->toArray();

        if (empty($res)){
            $inf = new info();
            $inf->uid = Auth::user()->id;
            $inf->realname = $request->input('realname');
            $inf->nickname = $request->input('nickname');
            $inf->sex = $request->input('sex');
            $inf->address = $request->input('address');
            $inf->birthday = $request->input('birthday');
            $inf->address = $request->input('address');
            $inf->save();
        } else {
            $id = info::where('uid',Auth::user()->id)->get()->toArray();
            $inf = info::find($id[0]['id']);
            $inf->realname = $request->input('realname');
            $inf->nickname = $request->input('nickname');
            $inf->sex = $request->input('sex');
            $inf->address = $request->input('address');
            $inf->birthday = $request->input('birthday');
            $inf->address = $request->input('address');
            $inf->save();
        }

        return redirect('home/per_info');
    }

    public function writeLike(Request $request)
    {

        $res = like::where('uid',Auth::user()->id)->get()->toArray();

        if (empty($res)){
            $like = new like();
            $like->uid = Auth::user()->id;
            $like->music = $request->input('music');
            $like->hobby = $request->input('hobby');
            $like->book = $request->input('book');
            $like->movie = $request->input('movie');
            $like->game = $request->input('game');
            $like->animation = $request->input('animation');
            $like->sport = $request->input('sport');
            $like->save();
        } else {
            $id = like::where('uid',Auth::user()->id)->get()->toArray();
            $like = like::find($id[0]['id']);
            $like->music = $request->input('music');
            $like->hobby = $request->input('hobby');
            $like->book = $request->input('book');
            $like->movie = $request->input('movie');
            $like->game = $request->input('game');
            $like->animation = $request->input('animation');
            $like->sport = $request->input('sport');
            $like->save();
        }

        return redirect('home/per_info');
    }

    public function writeFeel(Request $request)
    {

        $res = feeling::where('uid',Auth::user()->id)->get()->toArray();

        if (empty($res)){
            $feel = new feeling();
            $feel->uid = Auth::user()->id;
            $feel->feeling = $request->input('feeling');
            $feel->save();
        } else {
            $id = feeling::where('uid',Auth::user()->id)->get()->toArray();
            $feel = feeling::find($id[0]['id']);
            $feel->feeling = $request->input('feeling');
            $feel->save();
        }

        return redirect('home/per_info');
    }

    public function writeWork(Request $request)
    {

        $res = work::where('uid',Auth::user()->id)->get()->toArray();

        if (empty($res)){
            $work = new work();
            $work->uid = Auth::user()->id;
            $work->company = $request->input('company');
            $work->industry = $request->input('industry');
            $work->pp = $request->input('pp');
            $work->work_time = $request->input('work_time');
            $work->save();
        } else {
            $id = school::where('uid',Auth::user()->id)->get()->toArray();
            $work = work::find($id[0]['id']);
            $work->company = $request->input('company');
            $work->industry = $request->input('industry');
            $work->pp = $request->input('pp');
            $work->work_time = $request->input('work_time');
            $work->save();
        }

        return redirect('home/per_info');
    }

    public  function showFriends()
    {
        $friends  = focus::where('uid',Auth::user()->id)->get()->toArray();
        if(empty($friends)){
           $fri = users::select('icon','name','id')->where('id','<>',Auth::user()->id)->get();
        }else{
            $ids = $friends[0]['frid'];
            $ids = $ids.','.Auth::user()->id;
            $ids = explode(',',$ids);
            $num = [];
            for ($i=0;$i<count($ids);$i++){
                $num[]=intval($ids[$i]);
            }
            $fri = users::select('icon','name','id')->whereNotIn('id',$num)->get();
        }
        return response()->json($fri);

    }

    public function myFriends()
    {
        $friends = focus::where('uid', Auth::user()->id)->get()->toArray();
        $ids = $friends[0]['frid'];
        if (empty($ids)) {
            return 0;
        } else {
           $count = strlen($ids); //判断字段长度
            if ($count > 1) {
                $ids = explode(',',$ids); //将字符串进行分割
                $num = [];
                for ($i=0;$i<count($ids);$i++){
                    $num[]=intval($ids[$i]);
                }
                $fri = users::whereIn('id', $num)->get();
            } else {
                $ids= intval($ids);
                $fri = users::select('icon', 'name', 'id')->where('id', $ids)->get();
            }
            return response()->json($fri);

        }
    }

    public  function addOrdelFriends($id)
    {
       $ids = focus::where('uid',Auth::user()->id)->get();
       if($ids->isEmpty()){
           $friends = new focus();
           $friends->uid = Auth::user()->id;
           $friends->frid = $id ;
           $result = $friends->save();
       } else {
           $has = focus::where('frid','like','%'.$id.'%')->where('uid',Auth::user()->id)->get();
           if ($has->isEmpty()){
               $ids = $ids[0]['frid'];
               $frids = $ids.','.$id;
               $friends = focus::find(Auth::user()->id);
               $friends->frid = $frids;
               $result = $friends->save();
           }else{
               $arr = $has->toArray();
               $arr = $arr[0]['frid'];
               $arr = explode(',',$arr);
               $key = array_search($id,$arr);
               unset($arr[$key]);
               $frids = implode(',',$arr);
               $frid = focus::find(Auth::user()->id);
               $frid->frid =  $frids;
               $result =$frid->save();
           }
       }
       if ($result){
           $res = 1;
       }else{
           $res =0;
       }
        return $res;
    }

    public function showImind()
    {
        $imnd  = focus::where('uid',Auth::user()->id)->get()->toArray();
        $imnds = $imnd[0]['imid'];
        if(empty($imnds)){
            return 0;
        }else{
            $ids = explode(',',$imnds);
            $num = [];
            for ($i=0;$i<count($ids);$i++){
                $num[]=intval($ids[$i]);
            }
            $fri = users::select('icon','name','id')->whereIn('id',$num)
                                                    ->where('id','<>',Auth::user()->id)
                                                    ->get();
        }
        return response()->json($fri);
    }

    public function addOrdelMind($id)
    {
        $ids = focus::where('uid',Auth::user()->id)->get();
        $res = focus::where('imid','like','%'.$id.'%')->get();
        if ($res->isEmpty()){
            $imid = focus::find(Auth::user()->id);
            $arr = $ids[0]['imid'];
            $imid->imid = $arr.','.$id;
            $imid->save();
            $res =  $imid->save();
        } else {
            $arr = focus::where('uid',Auth::user()->id)->get()->toArray();
            $arr = $arr[0]['imid'];
            $arr = explode(',',$arr);
            $key = array_search($id,$arr);
            unset($arr[$key]);
            $imids = implode(',',$arr);
            $imid = focus::find(Auth::user()->id);
            $imid->imid = $imids;
            $imid->save();
            $res =  $imid->save();
        }

        if ($res){
            $result =1;
            return $result;
        } else {
            return 0;
        }
    }

    public function mindMe()
    {
        $res = focus::where('imid','like','%'.Auth::user()->id.'%')
                      ->where('uid','<>',Auth::user()->id)->get();

        if($res->isEmpty()){
            return 0;
        }else{
            foreach ($res as $item){
                $mmids[]= $item['uid'];
            }
            $str = implode(',',$mmids);
            $me = focus::find(Auth::user()->id);
            $me->mmid = $str;
            $me->save();
            $mmid = users::select('icon','name','id')->whereIn('id',$mmids)
                ->where('id','<>',Auth::user()->id)
                ->get();
            return response()->json($mmid);
        }
    }

    public function changePwd(Request $request)
    {

        $opwd = $request->input('opwd');
        $npwd = $request->input('npwd');
        $rpwd = $request->input('repwd');
        $url = "project.dev/home/per_settings";
        if ($npwd != $rpwd){
            return back();
        }

        $res = users::where('id',Auth::user()->id)->select('password')->first();
        if(!Hash::check($opwd, $res->password)){
            return back();
        }
        $result = users::find(Auth::user()->id);
        $result->password = bcrypt($npwd);
        $result->save();
        return redirect('/');

    }

    public function changeEmaile(Request $request)
    {

        $pwd = $request->input('pwd');
        $oemail = $request->input('oemail');
        $nemail = $request->input('nemail');

        $res = users::where('id',Auth::user()->id)->select('password','email')->first();
        if(!Hash::check($pwd, $res->password)){
            return back();
        }
        if ($oemail != $res->email){
            return back();
        }
        $result = users::find(Auth::user()->id);
        $result->email = $nemail;
        $result->save();
        return redirect('/');

    }

}
