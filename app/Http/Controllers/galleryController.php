<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class galleryController extends Controller
{
    public function gallery()
    {
        return view('admin.gallery');
    }
}
