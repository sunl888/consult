<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * 首页
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){

        return view('index');
    }

    /**
     * 后台管理
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function admin(){

        return view('admin.index');
    }
}
