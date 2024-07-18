<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use App\Models\Dokter;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $count = Transaksi::count();
        return view('user.home.halaman', compact('count'));
    }

    public function dashboard()
    {
        $obat = Obat::count();
        $dokter = Dokter::count();
        return view('admin.dashboard.index', compact('obat', 'dokter'));
    }
    public function awal()
    {
        return view('awal');
    }
    public function kebijakan()
    {
        return view('kebijakan');
    }
    public function pesan()
    {
        $dokter = Dokter::all();
        $transaksi = Transaksi::all();
        $count = Transaksi::count();
        return view('user.konsultasi.pesan', compact('count', 'dokter', 'transaksi'));
    }
}
