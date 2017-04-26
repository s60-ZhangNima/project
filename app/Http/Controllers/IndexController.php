<?php

namespace App\Http\Controllers;

use App\Model\focus;
use App\Model\quantity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    //
    public function index()
    {
        $quan = quantity::where('uid',Auth::user()->id)->get();
        $fei = focus::where('uid',Auth::user()->id)->get()->toArray();
        if (empty($fei[0]['frid'])){
            $res = '';
        }else{
            $res = explode(',',$fei[0]['frid']);
            array_push($res,Auth::user()->id);

        }
        $sel = DB::table('users')->select('icon','name',"content",'create_time')
            ->join('states','users.id','states.uid')
            ->whereIn('uid',$res)
            ->get();
        $us=DB::select('select * from users where id ='.Auth::user()->id);
//        dd($us);
        $grade=DB::select('select * from grade where uid ='.Auth::user()->id);
//        dd($grade);
        $advert=DB::select('select * from advert');
//        dd($advert);
        return view('home.index',compact('quan','sel','us','grade','advert'));
    }
}
