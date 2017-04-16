<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class filesController extends Controller
{
    public function files()
    {
        return view('admin.files');
    }
}
