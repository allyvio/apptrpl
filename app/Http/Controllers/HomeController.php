<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function kehamilan()
    {
        $data = \App\User::where('role', 'bidan')->get()->all();
        // dd($data);
        return view('kehamilan', compact('data'));
    }
    public function manage()
    {
        return view('admin.master');
    }
}
