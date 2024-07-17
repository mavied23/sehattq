<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class DokterController extends Controller
{
    public function index()
    {
        $data = Dokter::all();
        $count = Transaksi::count();
        return view('user.dokter.dokter', compact('data', 'count'));
    }
    public function dokters()
    {
        $data = Dokter::all();
        return view('admin.dokter.index', compact('data'));
    }

    public function create()
    {
        return view('admin/dokter/tambah');
    }

    public function store(Request $request)
    {
        $gambar_file = $request->file('gambar');
        $gambar_ekstensi = $gambar_file->extension();
        $nama_gambar = date('ymdhis') . "." . $gambar_ekstensi;
        $gambar_file->move(public_path('img/dokter'), $nama_gambar);

        $register = [
            'nama_dokter' => $request->nama_dokter,
            'spesialis' => $request->spesialis,
            'deskripsi' => $request->deskripsi,
            'harga_konsultasi' => $request->harga_konsultasi,
            'gambar' => $nama_gambar,
        ];

        Dokter::create($register);
        Alert::toast('Berhasil Menambah Dokter', 'success');
        return redirect('/dokters');
        // dd($register);
    }

    public function edit($id)
    {
        $data = Dokter::find($id);
        return view('admin/dokter/edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Dokter::findOrFail($id);
        $data->update($request->all());
        Alert::toast('Berhasil Mengedit Dokter', 'success');
        return redirect('/dokters');
    }

    public function destroy($id)
    {
        $dokter = Dokter::find($id);
        $dokter->delete();

        Alert::success('Berhasil Menghapus Dokter', 'success');
        return redirect('/dokters');
    }
}
