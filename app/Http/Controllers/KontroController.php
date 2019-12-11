<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KontroController extends Controller
{
    public function pick($id)
    {
        $data = \App\User::findOrFail($id);
        return view('bookbidan', compact('data'));
    }
    public function storeBook(Request $request)
    {
        \Validator::make($request->all(), [
            'keterangan'  => 'required|max:255',
            'kehamilan-ke'  => 'required|numeric',
        ])->validate();
        // dd($request->all());

        $new = new \App\Bookbidan;
        $new->user_id = Auth::user()->id;
        $new->bidan_id = $request->get('id');
        $new->kehamilan = $request->get('kehamilan-ke');
        $new->keterangan = $request->get('keterangan');

        $new->save();
        return redirect('kehamilan');
    }
    public function show($id)
    {
        $data = \App\Bookbidan::where('user_id', $id)->get()->all();
        return view('mycontrol', compact('data'));
    }
    public function showrs()
    {
        $data = \App\Rumahsakit::all();
        return view('rslist', compact('data'));
    }
    public function showDetail($id)
    {
        $data = \App\Cek::where('bookbidan_id', $id)->get()->all();
        $bookbidan = \App\Bookbidan::findOrFail($id)->value('bidan_id');
        $name_officer = \App\User::findOrFail($bookbidan)->value('name');
        // dd($name_officer);
        return view('singlecontrol', compact('data', 'name_officer'));
    }
    public function kontrolBidan($id)
    {
        $data = \App\Bookbidan::where('bidan_id', $id)->get()->all();
        return view('bidan.kontrol', compact('data'));
    }
    public function cek($id)
    {
        $data = \App\Cek::where('bookbidan_id', $id)->get()->all();
        $id_book = $id;
        // dd($id_book);
        return view('bidan.cek', compact('data', 'id_book'));
    }
    public function cekStore(Request $request)
    {
        \Validator::make($request->all(), [
            'keterangan'  => 'required|max:255',
            'foto'  => 'required|max:1024|',
        ])->validate();
        // dd($request->all());
        $new = new \App\Cek;
        $new->bookbidan_id = $request->get('id');
        $new->keterangan = $request->get('keterangan');
        $image = $request->file('foto');

        if ($image) {
            $image_path = $image->store('foto', 'public');
            $new->foto = $image_path;
        }
        $new->save();
        return back();
    }
}
