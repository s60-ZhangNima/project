<?php

namespace App\Http\Controllers;

use App\Model\comments;
use App\Model\feeling;
use App\Model\info;
use App\Model\like;
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
        $all = users::select('email','id')->orderBy('id','asc')->get();
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
        return view('admin.state_story',compact('states','stories'));

    }

    public function showFriFoc($id)
    {
        return view('admin.friends_focus');

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
            $id = info::where('uid',$request->input('uid'))->get()->toArray();
            $inf = info::find($id[0]['id']);
            $inf->realname = $request->input('realname');
            $inf->nickname = $request->input('nickname');
            $inf->sex = $request->input('sex');
            $inf->address = $request->input('address');
            $inf->birthday = $request->input('birthday');
            $inf->address = $request->input('address');
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
        return view('admin.comments',compact('comments','states'));
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
}
