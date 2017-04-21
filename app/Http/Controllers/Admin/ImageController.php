<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ImageController extends Controller
{
    //
    public function ImageList()
    {
        return view('admin/imageList');
    }
}
