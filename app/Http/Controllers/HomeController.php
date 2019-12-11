<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


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
    public function artikel()
    {
        return view('admin.artikel');
    }
    public function setting()
    {
        $id = Auth::user()->id;
        $data = \App\User::findOrFail($id);
        // dd($id);
        return view('setting', compact('data'));
    }
    public function artikelupdate($id)
    {
        $data = \App\Artikel::findOrFail($id);
        return view('admin.editartikel', compact('data'));
    }
    public function artikelUp(Request $request)
    {
        \Validator::make($request->all(), [
            'judul'  => 'required|max:50',
            'isi'  => 'required',
            'foto'  => 'mimes:jpg,png,jpeg',
        ])->validate();
        $new = \App\Artikel::findOrFail($request->get('id'));
        $new->judul = $request->get('judul');
        $new->isi = $request->get('isi');
        $image = $request->file('foto');

        if ($image) {
            $image_path = $image->store('avatar', 'public');
            $new->foto = $image_path;
        }
        $new->save();
        return redirect('user/edu');
    }
    public function hapusartikel($id)
    {
        $data = \App\Artikel::findOrFail($id);
        $data->delete();
        return back();
    }
    public function createArtikel(Request $request)
    {
        // dd($request->all());
        \Validator::make($request->all(), [
            'judul'  => 'required|max:50',
            'isi'  => 'required',
            'foto'  => 'required|mimes:jpg,png,jpeg',
        ])->validate();

        $new = new \App\Artikel;
        $new->judul = $request->get('judul');
        $new->isi = $request->get('isi');
        $image = $request->file('foto');

        if ($image) {
            $image_path = $image->store('avatar', 'public');
            $new->foto = $image_path;
        }
        $new->save();
        return back();
    }
    public function showall()
    {
        $data = \App\Artikel::all();
        return view('artikel', compact('data'));
    }
    public function showid($id)
    {
        $data = \App\Artikel::findOrFail($id);
        return view('singleartik', compact('data'));
    }
}
