<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function index()
    {
        return view('admin.auth.login');
    }

    public function loginproses(Request $request)
    {
        Session::flash('error', $request->email);
        $dataLogin = [
            'email' => $request->email,
            'password'  => $request->password,
        ];

        $user = new User;
        $proses = $user::where('email', $request->email)->first();

        if ($proses->is_admin === 0) {
            Session::flash('error', 'Kamu bukan admin');
            Alert::toast('Kamu Bukan Admin', 'error');
            return back();
        } else {
            if (Auth::attempt($dataLogin)) {
                Alert::success('Selamat Datang', 'Admin Sehatqu');
                $request->session()->regenerate();
                return redirect()->intended('/dashboard');
            } else {
                Alert::toast('Email dan Password salah', 'error');
                return back();
            }
        }
    }

    public function logout(Request$request)
    {
        Auth::logout();
        $request()->session()->invalidate();
        $request()->session()->regenerateToken();
        Alert::toast('Kamu berhasil Logout', 'success');
        return redirect('/admin');
    }
}
