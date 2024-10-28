<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Barang;

class UserController extends Controller
{
    public function index()
    {
        if (auth()->user()->role == 'user') {
            $chair = Barang::where('kategori_barang', 'chair')->get();
            $dsofa = Barang::where('kategori_barang', 'sofa')->get();
            $dbed = Barang::where('kategori_barang', 'bed')->get();
            $dlamp = Barang::where('kategori_barang', 'lamp')->get();
            return view('user.index', compact('chair', 'dsofa', 'dbed', 'dlamp'));
        } else {
            return redirect('login')->with('gagal', 'Mohon login terlebih dahulu');
        }
    }

    public function store(Request $request)
    {
        $file = $request->image->store('image', 'public');

        $user = new User();

        $user->name = $request->nama;
        $user->email = $request->email;
        $user->role = 'user';
        $user->password = $request->password;
        $user->image = $file;
        $user->kode = $request->kode;
        $user->alamat = $request->alamat;

        $user->save();

        return redirect('login')->with('berhasil', 'Registrasi berhasil');
    }
}
