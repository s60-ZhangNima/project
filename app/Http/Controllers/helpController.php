<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class helpController extends Controller
{
    public function help()
    {
        return view('admin.help');
    }
}
