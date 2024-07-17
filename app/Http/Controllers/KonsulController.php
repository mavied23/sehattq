<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class KonsulController extends Controller
{
    public function index()
    {
        $count = Transaksi::count();
        return view('user.konsultasi.konsultasi', compact('count'));
    }
    public function konsultasis()
    {
        $data = Pasien::all();
        return view('admin.konsultasi.index', compact('data'));
    }

    public function create()
    {
        return view('admin/konsultasi/tambah');
    }

    public function store(Request $request)
    {
        $register = [
            'nama_pasien' => $request->nama_pasien,
            'alamat' => $request->alamat,
            'usia' => $request->usia,
            'pemeriksaan' => $request->pemeriksaan,
            'keluhan' => $request->keluhan,
        ];

        Pasien::create($register);
        Alert::success('Jawaban Kamu akan Direkap Admin', 'Ditunggu yaa!!!');
        return redirect('/konsultasi');
    }

    public function edit($id)
    {
        $data = Pasien::find($id);
        return view('admin/konsultasi/edit', compact('data'));
    }

    public function show($id)
    {
        $data = Pasien::find($id);
        return view('admin/konsultasi/show', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Pasien::findOrFail($id);
        $data->update($request->all());

        return redirect('/konsultasis');
    }

    public function destroy($id)
    {
        $konsultasis = Pasien::find($id);
        $konsultasis->delete();
        Alert::success('Berhasil Menghapus Konsultasi', 'Terima Kasih');
        return redirect('/konsultasis');
    }
}
