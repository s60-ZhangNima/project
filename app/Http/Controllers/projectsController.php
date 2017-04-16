<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class projectsController extends Controller
{
    public function projects()
    {
        return view('admin.projects');
    }
}
