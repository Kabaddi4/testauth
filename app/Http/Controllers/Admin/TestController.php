<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //アクション
    public function home()
    {
        return view('admin.test.home');
    }
}
