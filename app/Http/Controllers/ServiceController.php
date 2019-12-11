<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bookkamar;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    public function kamar($id)
    {
        $rs_id = \App\Rumahsakit::where('user_id', $id)->value('id');
        $data = \App\Kamar::where('rumahsakit_id', $rs_id)->get()->all();
        $_id = $id;
        return view('rs.kamar', compact('data', '_id'));
    }
    public function notif($id)
    {
        $data = \App\Bookkamar::findOrFail($id);
        $data->status = "Selesai";
        $data->save();
        return back();
    }
    public function storeKamar(Request $request)
    {
        \Validator::make($request->all(), [
            'nama_kamar'  => 'required|max:50',
            'kelas'  => 'required|max:50',
            'price'  => 'required',
            'keterangan'  => 'required|max:500',
            'dokter'  => 'required|max:50',
            'spesialis'  => 'required|max:50',
            'title'  => 'required|max:50',
            'lama'  => 'required|max:50',
            'e-dok'  => 'required|email|max:50',
            'foto'  => 'required|mimes:jpg,png,jpeg',
        ])->validate();
        $new = new \App\Kamar;
        $new->rumahsakit_id = $request->get('id');
        $new->nama_lengkap = $request->get('dokter');
        $new->spesialsi = $request->get('spesialis');
        $new->title_akademis = $request->get('title');
        $new->lama_pengalaman = $request->get('lama');
        $new->alamat_email = $request->get('e-dok');
        $new->kelas_kamar = $request->get('kelas');
        $new->nama_kamar = $request->get('nama_kamar');
        $new->keterangan_kamar = $request->get('keterangan');
        $new->price = $request->get('price');
        $image = $request->file('foto');

        if ($image) {
            $image_path = $image->store('foto', 'public');
            $new->foto = $image_path;
        }
        $new->save();
        return back();
    }
    public function bookKamar($id)
    {
        $data = \App\Kamar::where('rumahsakit_id', $id)->where('status', 'ready')->get()->all();
        // dd($data);
        return view('persalinan', compact('data'));
    }
    public function pesankamar($id)
    {
        $data = \App\Kamar::findOrFail($id);
        return view('singlekamar', compact('data'));
    }
    public function book(Request $request)
    {
        // dd($request->all());
        $data = \App\Kamar::findOrFail($request->id);
        $data->status = "booked";
        $data->save();
        $new = new \App\Bookkamar;

        $new->kamar_id = $request->get('id');
        $new->status = "On-Order";
        $new->user_id = Auth::user()->id;
        $new->tanggal = $request->get('tanggal');
        $new->keterangan = $request->get('keterangan');
        $new->save();
        return redirect('persalinan');
    }
    public function showKamarByID($id)
    {
        $data = \App\Bookkamar::where('user_id', $id)->get()->all();
        // dd($data);
        return view('mykamar', compact('data'));
    }
    public function kamarbook($id)
    {
        $id_rs = \App\Rumahsakit::where('user_id', $id)->value('id');
        $data = \App\Kamar::where('rumahsakit_id', $id_rs)->where('status', "booked")->get()->all();
        // dd($kamar);
        return view('rs.bookkamar', compact('data'));
    }
    public function showDetail($id)
    {
        $data = \App\Bookkamar::where('kamar_id', $id)->get()->all();
        return view('rs.detailbook', compact('data'));
    }
    public function skl(Request $request)
    {
        \Validator::make($request->all(), [
            'foto'  => 'required|mimes:pdf',
        ])->validate();
        $new = \App\Bookkamar::findOrFail($request->id);
        $kamar = \App\Kamar::findOrFail($new->kamar_id);
        $kamar->status = "ready";
        $kamar->save();

        $image = $request->file('foto');

        if ($image) {
            $image_path = $image->store('pdf', 'public');
            $new->foto = $image_path;
        }
        $new->save();
        return back();
    }
    public function pdf($id)
    {
        $data = \App\Bookkamar::findOrFail($id);
        // dd($data);
        return view('pdf', compact('data'));
    }
    public function showskl()
    {
        $data = DB::table('bookkamar')
            ->whereNotNull('foto')
            ->get()->all();
        return view('admin.skl', compact('data'));
    }
}
