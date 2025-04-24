<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function dangky()  {
        return view('dangky');
    }
    public function dangnhap()  {
        return view('dangnhap');
    }
    public function doipass()  {
        return view('doipass');
    }
}
