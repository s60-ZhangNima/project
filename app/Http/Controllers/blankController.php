<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class blankController extends Controller
{
    public function blank()
    {
        return view('admin.blank');
    }
}
