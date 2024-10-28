<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{

    public function index()
    {
        return view('login');
    }   

    public function register()
    {
        return view('register');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login')->with('logout', 'Berhasil logout');
    }

    public function auth(Request $request)
    {

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            if (auth()->user()->role == 'admin') {
                return redirect('admin/dashboard')->with('berhasillogin', 'Login admin berhasil');
            } elseif(auth()->user()->role == 'user') {
                return redirect('user/home_page')->with('berhasillogin', "Login berhasil");
            }else{
                return redirect('login')->with('gagal', 'Mohon login terlebih dahulu');
            }
        }
        return back()->with('gagal', 'Data yang dimasukan tidak ada');
    }
}
