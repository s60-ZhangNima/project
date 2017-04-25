<?php

namespace App\Http\Controllers\Home;

use App\Model\comments;
use App\Model\exchange;
use App\Model\feeling;
use App\Model\focus;
use App\Model\goods;
use App\Model\icon;
use App\Model\info;
use App\Model\lamp_district;
use App\Model\like;
use App\Model\photo;
use App\Model\quantity;
use App\Model\school;
use App\Model\states;
use App\Model\story;
use App\Model\users;
use App\Model\work;
use App\Tool\SMS\SendTemplateSMS;
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
        $nums = $friends[0]['imid'];
        $arr = explode(',',$nums);
        return view('home/per_focus',compact('fri','arr'));
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

    public function citys()
    {
        $upid = empty($_GET['upid'])?0:$_GET['upid'];
        $result = lamp_district::where('upid',$upid)->get()->toArray();
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

    public function perPraise()
    {       $id = $_GET['praises'];
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

    public function delComments()
    {
        $id = $_GET['id'];
        $com = comments::find($id);
        $result = $com->delete();
        echo $result;
    }

    public function delStates()
    {
        $id = $_GET['id'];
        $res = states::find($id);
        $result = $res->delete();
        if($result){
            return 1;
        }

    }

    public function perCpraise()
    {
        $id = $_GET['id'];
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
                $uicon = users::find($uid);
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


        $res = info::where('uid',Auth::user()->id)->get()->toArray();
        //省
        $prov = lamp_district::select('name')->where('id',$request->input('prov'))->get()->toArray();
        $prov = $prov[0]['name'];
        //市
        $city = lamp_district::select('name')->where('id',$request->input('city'))->get()->toArray();
        $city = $city[0]['name'];
        //城镇
        $area = lamp_district::select('name')->where('id',$request->input('area'))->get()->toArray();
        $area = $area[0]['name'];
        //街道
        $street = lamp_district::select('name')->where('id',$request->input('street'))->get()->toArray();
        $street = $street[0]['name'];
        $address = $prov.'-'.$city.'-'.$area.'-'.$street;
        if (empty($res)){
            $inf = new info();
            $inf->uid = Auth::user()->id;
            $inf->realname = $request->input('realname');
            $inf->nickname = $request->input('nickname');
            $inf->sex = $request->input('sex');
            $inf->address = $request->input('address');
            $inf->birthday = $request->input('birthday');
            $inf->address = $address;
            $inf->save();
        } else {
            $id = info::where('uid',Auth::user()->id)->get()->toArray();
            $inf = info::find($id[0]['id']);
            $inf->realname = $request->input('realname');
            $inf->nickname = $request->input('nickname');
            $inf->sex = $request->input('sex');
            $inf->address = $request->input('address');
            $inf->birthday = $request->input('birthday');
            $inf->address = $address;
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
        dd($fri);
        return view('home/per_focus',compact('fri'));

    }

    public function myFriends()
    {
        $friends = focus::where('uid', Auth::user()->id)->get()->toArray();
        $ids = $friends[0]['frid'];
        if (empty($ids)) {
            $fri = '';
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
        }
        $nums = $friends[0]['imid'];
        $arr = explode(',',$nums);
        return view('home/per_myFri',compact('fri','arr'));

    }

    public  function addOrdelFriends()
    {
        $id = $_GET['id'];
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
            $fri = '';
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
        $nums = $imnd[0]['frid'];
        $arr = explode(',',$nums);
        return view('home/per_Ifocus',compact('fri','arr'));
    }

    public function addOrdelMind()
    {
        $id = $_GET['id'];

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
            $mmid = '';
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
        }
        $friends = focus::where('uid', Auth::user()->id)->get()->toArray();
        $nums = $friends[0]['frid'];
        $arr = explode(',',$nums);

        return view('home/per_FocusMe',compact('mmid','arr'));

    }

    public function changePwd(Request $request)
    {

        $opwd = $request->input('opwd');
        $npwd = $request->input('npwd');
        $rpwd = $request->input('repwd');
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

    public function sendSMS()
    {

        $sms = new SendTemplateSMS();
        $result = $sms->sendSMS('15005732802', array('1234', 5), 1);
        dd($result);
//
//        return $result->toJosn();
    }

    public function showCharacter()
    {
        $quans = quantity::where('uid',Auth::user()->id)->get();
        return  view('home/per_character',compact('quans'));
    }

    public function showStore()
    {
        $goods = goods::all();
        return view('home/per_store',compact('goods'));
    }

    public function descRp($id)
    {
        $goods = goods::where('id',$id)->get();
        $users = users::select('name','icon')->where('id',Auth::user()->id)->get();
        $quans = quantity::select('level','surplus')->where('uid',Auth::user()->id)->get();
        $all = goods::all();
        return view('home/RP_desc',compact('goods','users','quans','all'));
    }

    public function canChange()
    {
        $do = quantity::select('surplus')->where('uid',Auth::user()->id)->get()->toArray();
        $do = $do[0]['surplus'];
        $res = goods::all()->toArray();
        foreach ($res as $va){
            $can[] = $va['quantity'];
        }
        $result ='';
        $change = [];
        for($i = 0;$i<count($can);$i++){
            if($do > $can[$i]){
                if(empty($result)){
                    $result = 'has';
                }
                $change[] =$can[$i];
            }
        }

        if (!empty($change)){
            $goods = goods::whereIn('quantity',$change)->get();
        }else{
            $goods = '';
        }
        $RP_goods = goods::all();
        return view('home/per_change',compact('result','goods','RP_goods'));
    }

    public function getRP()
    {
        $num = rand(30,90);
        $quan = quantity::where('uid',Auth::user()->id)->get()->toArray();
        $first = time();
        $time = date('Y-m-d',$first);
        if ($time == date('Y-m-d',$quan[0]['time'])){
            return 1;
        }else{
            $chr = quantity::find(Auth::user()->id);
            $chr->time = $first;
            $chr->rand_get = $num;
            $chr->surplus += $num;
            $chr->save();
            return $num;
        }
    }

    public function buyGoods()
    {
        $gid = $_GET['gid'];
        $good = goods::select('name','pic','quantity')->where('id',$gid)->get()->toArray();

        $order = new exchange();
        $order->uid = Auth::user()->id;
        $order->gid = $gid;
        $order->user_name = Auth::user()->name;
        $order->count = 1;
        $order->pic = $good[0]['pic'];
        $order->name = $good[0]['name'];
        $order->need_qua = $good[0]['quantity'];
        $order->time = time();
        $res =  $order->save();
        $oid = $order->id;
       if ($res){
           $quan = quantity::find(Auth::user()->id);
           $quan->surplus -= $good[0]['quantity'];
           $quan->save();
           $goods = goods::find($gid);
           $goods->count -= 1;
           $goods->save();
           return 1;
       } else {
           $or = exchange::find($oid);
           $or->delete();
           return 2;
       }
        
    }

    public function exchange()
    {
        $exchange = exchange::where('uid',Auth::user()->id)->get();
        $users = users::select('name','icon')->where('id',Auth::user()->id)->get();
        $quans = quantity::select('level','surplus')->where('uid',Auth::user()->id)->get();


       return view('home/per_exchange',compact('exchange','users','quans'));
    }

    public function delOr($id)
    {

        $or = exchange::find($id);
        $or->delete();
        return back();
    }


}
