<?php

namespace App\Http\Controllers;

use App\Model\users;
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
        return view('admin.info');
    }

    public function showStaSto($id)
    {
        return view('admin.state_story');

    }

    public function showFriFoc($id)
    {
        return view('admin.friends_focus');

    }

    public function delete($id)
    {
        return 1111;
//        return back();

    }
}
