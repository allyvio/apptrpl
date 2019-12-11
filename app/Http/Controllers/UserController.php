<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $data = \App\User::all();
        return view('admin.user', compact('data'));
    }
    public function showBidan()
    {
        $pivot = DB::table('users')->where('role', 'bidan')->get();

        return view('admin.bidan', compact('pivot'));
    }
    public function storebumil(Request $request)
    {
        \Validator::make($request->all(), [
            'name'  => 'required|max:50',
            'email'  => 'required|email|unique:users',
            'phone'  => 'required|max:13',
            'password'  => 'required|min:6',
            'address'  => 'required|min:6',
        ])->validate();
        $new = new \App\User;
        $new->name = $request->get('name');
        $new->email = $request->get('email');
        $new->hp = $request->get('phone');
        $new->remember_token = str_random(60);
        $new->password = bcrypt($request->get('password'));
        $new->kota = $request->get('address');
        $new->role = 'bumil';
        $new->status = 'aktif';
        $new->save();
        return redirect('/');
    }
    public function createBidan(Request $request)
    {
        // dd($request->all());
        \Validator::make($request->all(), [
            'nama'  => 'required|max:50',
            'email'  => 'required|email|unique:users',
            'hp'  => 'required|max:13',
            'password'  => 'required|min:6',
        ])->validate();
        $new = new \App\User;
        $new->name = $request->get('nama');
        $new->email = $request->get('email');
        $new->hp = $request->get('hp');
        $new->remember_token = str_random(60);
        $new->password = bcrypt($request->get('password'));
        $new->kota = $request->get('kota');
        $new->role = 'bidan';
        $new->status = 'aktif';
        $new->save();
        return redirect('/user/bidan');
    }
    public function menubidan()
    {
        return view('bidan.index');
    }
    public function settingBidan($id)
    {
        $data = \App\User::findOrFail($id);
        return view('bidan.setting', compact('data'));
    }
    public function showRs()
    {
        return view('admin.rs');
    }
    public function createRs(Request $request)
    {
        // dd($request->all());
        \Validator::make($request->all(), [
            'nama'  => 'required|max:50|regex:/^[a-zA-Z]+$/u',
            'email'  => 'required|email|unique:users',
            'hp'  => 'required|max:13',
            'password'  => 'required|min:6',
            'jam'  => 'required',
            'kota'  => 'required|max:13',
            'alamat'  => 'required|max:13',
            'foto'  => 'required|mimes:jpg,png,jpeg',
        ])->validate();
        $new = new \App\User;

        // dd($request->all());
        $new->name = $request->get('nama');
        $new->email = $request->get('email');
        $new->hp = $request->get('hp');
        $new->remember_token = str_random(60);
        $new->password = bcrypt($request->get('password'));
        $new->kota = $request->get('kota');
        $new->role = 'rs';
        $new->status = 'aktif';

        $new->save();
        $_new = new \App\Rumahsakit;
        $_new->user_id = $new->id;
        $_new->alamat = $request->get('alamat');
        $_new->jam_buka = $request->get('jam');
        $image = $request->file('foto');

        if ($image) {
            $image_path = $image->store('avatar', 'public');
            $_new->foto = $image_path;
        }
        $_new->save();
        return back();
    }
    public function menurs()
    {
        return view('rs.index');
    }
    public function userUpdate(Request $request)
    {
        \Validator::make($request->all(), [
            'name'  => 'required|max:50',
            'kota'  => 'required|max:50',
        ])->validate();
        // dd($request->all());
        $update = \App\User::findOrFail($request->id);
        $update->name = $request->get('name');
        $update->kota = $request->get('kota');
        $update->save();
        return back();
    }
    public function passwordUpdate(Request $request)
    {
        \Validator::make($request->all(), [
            'password'  => 'required|min:5',
        ])->validate();
        dd(bcrypt($request->get('name')));
        $update = \App\User::findOrFail($request->id);
        $update->password = bcrypt($request->get('name'));
        $update->save();
        return back();
    }
}
