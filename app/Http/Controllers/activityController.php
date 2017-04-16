<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class activityController extends Controller
{
    public function activity()
    {
        return view('admin.activity');
    }
}
