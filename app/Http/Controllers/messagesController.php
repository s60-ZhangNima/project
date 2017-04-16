<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class messagesController extends Controller
{
    public function messages()
    {
        return view('admin.messages');
    }
}
