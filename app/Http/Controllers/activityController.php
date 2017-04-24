<?php

namespace App\Http\Controllers;

use App\Model\comments;
use App\Model\exchange;
use App\Model\feeling;
use App\Model\focus;
use App\Model\goods;
use App\Model\info;
use App\Model\lamp_district;
use App\Model\like;
use App\Model\quantity;
use App\Model\school;
use App\Model\states;
use App\Model\story;
use App\Model\users;
use App\Model\work;
use Illuminate\Http\Request;

use App\Http\Requests;

class activityController extends Controller
{
    public function activity()
    {
        $all = users::select('email','id','prohibit')->orderBy('id','asc')->get();
        return view('admin.activity',compact('all'));
    }

    public function showInfo($id)
    {
        $res= users::find($id);
        $info = info::where('uid',$id)->get();
        $work = work::where('uid',$id)->get();
        $like = like::where('uid',$id)->get();
        $school = school::where('uid',$id)->get();
        $feeling = feeling::where('uid',$id)->get();

        return view('admin.info',compact('res','info','work','like','school','feeling','id'));
    }

    public function showStaSto($id)
    {
        $states = states::where('uid',$id)->get();
        $stories = story::where('uid',$id)->get();
        return view('admin.state_story',compact('states','stories','id'));

    }

    public function showFriFoc($id)
    {
        $friends  = focus::where('uid',$id)->get()->toArray();
        if(empty($friends)){
            $fri = users::select('icon','name','id')->where('id','<>',$id)->orderBy('id','asc')->get();
        }else{
            $ids = $friends[0]['frid'];
            $ids = $ids.','.$id;
            $ids = explode(',',$ids);
            $num = [];
            for ($i=0;$i<count($ids);$i++){
                $num[]=intval($ids[$i]);
            }
            $fri = users::select('icon','name','id')->whereNotIn('id',$num)->orderBy('id','asc')->get();
        }
        $ids = explode(',',$friends[0]['imid']);
        $nums = [];
        for ($i=0;$i<count($ids);$i++){
            $nums[]=intval($ids[$i]);
        }
        return view('admin.addFri',compact('fri','id','nums'));

    }

    public function delete($id)
    {
        $user = users::find($id);
        $user->delete();
        return redirect('admin/activity');

    }

    public function writeSchool(Request $request)
    {
            $id = school::where('uid',$request->input('uid'))->get()->toArray();
            $sch = school::find($id[0]['id']);
            $sch->college = $request->input('college');
            $sch->dept = $request->input('dept');
            $sch->prof = $request->input('prof');
            $sch->class = $request->input('class');
            $sch->stn = $request->input('stn');
            $sch->save();
        return redirect('admin/info/'.$request->input('uid'));

    }

    public function writeInfo(Request $request)
    {
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
            $id = info::where('uid',$request->input('uid'))->get()->toArray();
            $inf = info::find($id[0]['id']);
            $inf->realname = $request->input('realname');
            $inf->nickname = $request->input('nickname');
            $inf->sex = $request->input('sex');
            $inf->address = $address;
            $inf->birthday = $request->input('birthday');
            $inf->save();
        return redirect('admin/info/'.$request->input('uid'));
    }

    public function writeLike(Request $request)
    {
            $id = like::where('uid',$request->input('uid'))->get()->toArray();
            $like = like::find($id[0]['id']);
            $like->music = $request->input('music');
            $like->hobby = $request->input('hobby');
            $like->book = $request->input('book');
            $like->movie = $request->input('movie');
            $like->game = $request->input('game');
            $like->animation = $request->input('animation');
            $like->sport = $request->input('sport');
            $like->save();

        return redirect('admin/info/'.$request->input('uid'));

    }

    public function writeFeel(Request $request)
    {
            $id = feeling::where('uid',$request->input('uid'))->get()->toArray();
            $feel = feeling::find($id[0]['id']);
            $feel->feeling = $request->input('feeling');
            $feel->save();
        return redirect('admin/info/'.$request->input('uid'));
    }

    public function writeWork(Request $request)
    {
            $id = school::where('uid',$request->input('uid'))->get()->toArray();
            $work = work::find($id[0]['id']);
            $work->company = $request->input('company');
            $work->industry = $request->input('industry');
            $work->pp = $request->input('pp');
            $work->work_time = $request->input('work_time');
            $work->save();
        return redirect('admin/info/'.$request->input('uid'));

    }

    public function delStates()
    {   $id = $_GET['id'];
        $res = states::find($id);
        $result = $res->delete();
        if ($result){
            return 1;
        }else {
            return 0;
        }

    }

    public function editStates(Request $request)
    {
        $state = states::find($request->input('id'));
        $state->content = $request->input('content');
        $state->save();
        return redirect('admin/state_story/'.$request->input('uid'));

    }

    public function editStory(Request $request)
    {
        $story = story::find($request->input('id'));
        $story->happen_time = $request->input('time');
        $story->desc = $request->input('desc');
        $story->who = $request->input('who');
        $story->content = $request->input('content');
        $story->save();
        return redirect('admin/state_story/'.$request->input('uid'));

    }

    public function delStory()
    {
        $id = $_GET['id'];
        $res = story::find($id);
        $result = $res->delete();
        if ($result){
            return 1;
        }else {
            return 0;
        }

    }

    public function showComments($id)
    {
        $comments = comments::where('sid',$id)->get();
        $states = states::where('id',$id)->get();
        return view('admin.comments',compact('comments','states','id'));
    }

    public function delComments()
    {
        $id = $_GET['id'];
        $com = comments::find($id);
        $result = $com->delete();
        if ($result){
            return 1;
        }else {
            return 0;
        }

    }

    public function editComments(Request $request)
    {
        $com = comments::find($request->input('id'));
        $com->content = $request->input('content');
        $com->save();
        return redirect('admin/showComments/'.$request->input('sid'));

    }

    public function count()
    {
        $sid = $_GET['sid'];
        $count = comments::where('sid',$sid)->get();
        $count = count($count);
        return $count;
    }

    public function showIfocus($id)
    {
        $imnd  = focus::where('uid',$id)->get()->toArray();
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
                ->where('id','<>',$id)
                ->get();
        }

        $arr = $imnd[0]['frid'];
        $arr = explode(',',$arr);
        return view('admin/iFocus',compact('fri','id','arr'));
    }

    public function showFocusMe($id)
    {
        $res = focus::where('imid','like','%'.$id.'%')
            ->where('uid','<>',$id)->get();

        if($res->isEmpty()){
            $mmid = '';
        }else{
            foreach ($res as $item){
                $mmids[]= $item['uid'];
            }
            $str = implode(',',$mmids);
            $me = focus::find($id);
            $me->mmid = $str;
            $me->save();
            $mmid = users::select('icon','name','id')->whereIn('id',$mmids)
                ->where('id','<>',$id)
                ->get();
        }
        $ids = focus::where('uid',$id)->get()->toArray();
        $arr = $ids[0]['frid'];
        $arr = explode(',',$arr);
        return view('admin/focusMe',compact('mmid','id','arr'));

    }

    public function showMyfri($id)
    {


        $friends = focus::where('uid', $id)->get()->toArray();
        $ids = $friends[0]['frid'];
        $imnds = $friends[0]['imid'];

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
                //获取我已关注的人的id数组`
            $ids = explode(',',$imnds);
            $nums = [];
            for ($i=0;$i<count($ids);$i++){
                $nums[]=intval($ids[$i]);
            }
        return view('admin.friends_focus',compact('fri','id','nums'));

    }

    public function delOrAddFri($id,$fid)
    {
        $ids = focus::where('uid',$id)->get();
        if($ids->isEmpty()){
            $friends = new focus();
            $friends->uid = $id;
            $friends->frid = $fid ;
             $friends->save();
        } else {
            $has = focus::where('frid','like','%'.$fid.'%')->where('uid',$id)->get();
            if ($has->isEmpty()){
                $ids = $ids[0]['frid'];
                $frids = $ids.','.$fid;
                $friends = focus::find($id);
                $friends->frid = $frids;
                $friends->save();
            }else{
                $arr = $has->toArray();
                $arr = $arr[0]['frid'];
                $arr = explode(',',$arr);
                $key = array_search($fid,$arr);
                unset($arr[$key]);
                $frids = implode(',',$arr);
                $frid = focus::find($id);
                $frid->frid =  $frids;
                $frid->save();
            }
        }
        return back();
    }

    public function delOrAddMind($id,$mid)
    {
        $ids = focus::where('uid',$id)->get();
        $res = focus::where('imid','like','%'.$mid.'%')->get();
        if ($res->isEmpty()){
            $imid = focus::find($id);
            $arr = $ids[0]['imid'];
            $imid->imid = $arr.','.$mid;
            $imid->save();
            $res =  $imid->save();
        } else {
            $arr = focus::where('uid',$id)->get()->toArray();
            $arr = $arr[0]['imid'];
            $arr = explode(',',$arr);
            $key = array_search($mid,$arr);
            unset($arr[$key]);
            $imids = implode(',',$arr);
            $imid = focus::find($id);
            $imid->imid = $imids;
            $imid->save();
            $res =  $imid->save();
        }

        return back();
    }

    public function delFeel($id)
    {
        $res = feeling::find($id);
        $res->delete();
        return back();
    }

    public function delBaseInfo($id)
    {
        $res = info::find($id);
        $res->delete();
        return back();
    }

    public function delLike($id)
    {
        $res =like::find($id);
        $res->delete();
        return back();
    }

    public function delWork($id)
    {
        $res = work::find($id);
        $res->delete();
        return back();
    }

    public function delSchool($id)
    {
        $res = school::find($id);
        $res->delete();
        return back();
    }

    public function myApp($id)
    {
        return view('admin.app');
    }

    public function showQuantity()
    {
        $goods = goods::all();
        return view('admin.quantity',compact('goods'));
    }

    public function showAddRp()
    {

        return view('admin.RP');
    }

    public function addGoods(Request $request)
    {
      if($request->hasFile('pic')){
          $picName = md5(time()).'.jpg';
          $request->pic->move('home/upImg',$picName);
          $goods = new goods;
          $goods->name = $request->input('name');
          $goods->quantity = $request->input('quantity');
          $goods->count = $request->input('count');
          $goods->desc = $request->input('desc');
          $goods->conversion = $request->input('conversion');
          $goods->pic = $picName;
          $goods->save();
      }else{
          return back();
      }
        return redirect('admin/quantity');
    }

    public function deleteGoods($id)
    {
        $res = goods::find($id);
        $res->delete();
        return back();
    }

    public function showeditGoods($id)
    {
        $goods = goods::where('id',$id)->get();
        return view('admin/editGoods',compact('goods'));
    }

    public function editGoods(Request $request)
    {
        if(!$request->has('pic')){
            $goods = goods::find($request->input('id'));
            $goods->name = $request->input('name');
            $goods->desc = $request->input('desc');
            $goods->quantity = $request->input('quantity');
            $goods->count = $request->input('count');
            $goods->conversion = $request->input('conversion');
            $goods->save();
        }else{
            $picName = md5(time()).'.jpg';
            $request->pic->move('home/upImg',$picName);
            $goods = goods::find($request->input('id'));
            $goods->name = $request->input('name');
            $goods->desc = $request->input('desc');
            $goods->quantity = $request->input('quantity');
            $goods->count = $request->input('count');
            $goods->conversion = $request->input('conversion');
            $goods->icon = $picName;
            $goods->save();
        }
        return redirect('admin/quantity');
    }

    public function exchange()
    {
        $exchange = exchange::all();
        return view('admin/exchange',compact('exchange'));
    }

    public function exchangeDel($id)
    {
        $del = exchange::find($id);
        $del->delete();
        return back();
    }

    public function addUsers()
    {
        return view('admin/usersAdd');
    }

    public function showFeel($uid)
    {
        return view('admin/addFeel',compact('uid'));
    }

    public function showBase($uid)
    {
        return view('admin/showBase',compact('uid'));
    }

    public function showLike($uid)
    {
        return view('admin/showLike',compact('uid'));
    }

    public function showWork($uid)
    {
        return view('admin/showWork',compact('uid'));
    }

    public function showSchool($uid)
    {
        return view('admin/showSchool',compact('uid'));
    }

    public function addFeel(Request $request)
    {
        $feel = new feeling();
        $feel->uid = $request->input('uid');
        $feel->feeling = $request->input('feeling');
        $feel->save();
        return redirect('admin/info/'.$request->input('uid'));
    }

    public function  addWork(Request $request)
    {
        $work = new work();
        $work->uid = $request->input('uid');
        $work->company = $request->input('company');
        $work->industry = $request->input('industry');
        $work->pp = $request->input('pp');
        $work->work_time = $request->input('work_time');
        $work->save();
        return redirect('admin/info/'.$request->input('uid'));
    }

    public function  addLike(Request $request)
    {
        $like = new like();
        $like->uid = $request->input('uid');
        $like->music = $request->input('music');
        $like->hobby = $request->input('hobby');
        $like->book = $request->input('book');
        $like->movie = $request->input('movie');
        $like->game = $request->input('game');
        $like->animation = $request->input('animation');
        $like->sport = $request->input('sport');
        $like->save();
        return redirect('admin/info/'.$request->input('uid'));
    }

    public function  addSchool(Request $request)
    {
        $school = new school();
        $school->uid = $request->input('uid');
        $school->college = $request->input('college');
        $school->dept = $request->input('dept');
        $school->prof = $request->input('prof');
        $school->class = $request->input('class');
        $school->stn = $request->input('stn');
        $school->save();
        return redirect('admin/info/'.$request->input('uid'));
    }

    public function  addBase(Request $request)
    {

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
        $school = new info();
        $school->uid = $request->input('uid');
        $school->realname = $request->input('realname');
        $school->nickname = $request->input('nickname');
        $school->sex = $request->input('sex');
        $school->birthday = $request->input('birthday');
        $school->address = $address;
        $school->save();
        return redirect('admin/info/'.$request->input('uid'));
    }

    public function doAdd(Request $request)
    {
        if ($request->hasFile('pic')){
           $picname = md5(time()).'.jpg';
            $request->file('pic')->move('home/upImg',$picname);

        } else {
            $picname = 'men_main.jpg';
        }
        $user = new users();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->icon = $picname;
        $user->is_confirmed = 1;
        $user->confirmed_code = str_random(10);
        $user->save();
        return redirect('admin/activity');
    }

    public function showState($uid)
    {
        return view('admin/showState',compact('uid'));
    }

    public function showStory($uid)
    {
        return view('admin/showStory',compact('uid'));
    }

    public function addState(Request $request)
    {
        $state = new states();
        $state->content = $request->input('content');
        $state->uid = $request->input('uid');
        $state->create_time = time();
        $state->save();
        return redirect('admin/state_story/'.$request->input('uid'));
    }

    public function addStory(Request $request)
    {
        $story = new story();
        $story->content = $request->input('content');
        $story->uid = $request->input('uid');
        $story->happen_time = time();
        $story->desc = $request->input('desc');
        $story->who = $request->input('who');
        $story->save();
        return redirect('admin/state_story/'.$request->input('uid'));
    }

    public function showCom($sid)
    {
        return view('admin/showCom',compact('sid'));
    }

    public function user_quan()
    {
        $quan = quantity::all();
        return view('admin/user_quan',compact('quan'));
    }

    public function RP_del($id)
    {
        $res= quantity::find($id);
        $res->surplus = 0 ;
        $res->rand_get = 0 ;
        $res->save();
        return back();
    }

    public function canProhibit($id)
    {
        $user = users::find($id);
        $user->prohibit = 0;
        $user->save();
        return back();
    }

    public function prohibit($id)
    {
        $user = users::find($id);
        $user->prohibit = 1;
        $user->save();
        return back();
    }

}
