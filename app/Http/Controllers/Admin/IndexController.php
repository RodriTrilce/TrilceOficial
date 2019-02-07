<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\AdminPageModel;
use Auth;

class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
/*
        dd(Auth::user()->roles);

        die;
*/
        return view('admin.index')->with([
            'page'      => 'index',
            'pages'     => AdminPageModel::all()
        ]);
    }
}

