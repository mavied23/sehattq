<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use App\Models\Dokter;
use App\Models\Pasien;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\StoreTransaksiRequest;
use App\Http\Requests\UpdateTransaksiRequest;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Transaksi::all();
        return view('admin.transaksi.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pasien = Pasien::all();
        $obat = Obat::all();
        $dokter = Dokter::all();
        $data = Transaksi::all();
        return view('admin.transaksi.tambah', compact('pasien', 'obat', 'dokter', 'data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Transaksi::create([
            'id_pasien' => $request->id_pasien,
            'alamat' => $request->alamat,
            'id_obat' => $request->id_obat,
            'harga' => $request->harga,
            'id_dokter' => $request->id_dokter,
            'harga_konsultasi' => $request->harga_konsultasi,
            'pemeriksaan' => $request->pemeriksaan,
            'total' => $request->total,
            $request->except(['_token']),
        ]);


        return redirect('/transaksi');
    }

    public function destroy($id)
    {
        $transaksi = Transaksi::find($id);
        $transaksi->delete();
        Alert::success('Berhasil Menghapus Transaksi', 'success');
        return redirect('/transaksi');
    }
}
