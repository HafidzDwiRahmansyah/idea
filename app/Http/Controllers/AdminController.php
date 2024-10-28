<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\ValidationException;
use App\Models\Order;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        if (auth()->user()->role == 'admin') {
            $data = auth()->user();
            $adm = User::where('role', 'admin')->count();
            $user = User::where('role', 'user')->count();
            $transaksi = Order::count();
            $pending = Order::count('status', 'Proses');
            return view('admin.dashboard', compact('data', 'adm', 'user', 'transaksi', 'pending'));
        } else {
            return redirect('user/home_page');
        }
    }

    public function admin(Request $request)
    {
        if (auth()->user()->role == 'admin') {
            $admin = User::where('role', 'admin')->get();
            $data = auth()->user();
            return view('admin.admin', compact('admin', 'data'));
        } else {
            return redirect('user/home_page');
        }
    }

    public function user(Request $request)
    {
        if (auth()->user()->role == 'admin') {
            $user = User::where('role', 'user')->get();
            $data = auth()->user();
            return view('admin.user', compact('user', 'data'));
        } else {
            return redirect('user/home_page');
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'username' => 'required|string|max:100',
            'email' => 'required|email|max:200',
            'password' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg|max:2048'
        ]);

        if ($request->NULL) {
            return redirect()->back()->with('gagal', 'Mohon isi data dengan lengkap.');
        } else {
            $file = $request->image->store('image', 'public');

            $admin = new User();

            $admin->username = $request->username;
            $admin->name = $request->name;
            $admin->email = $request->email;
            $admin->role = 'admin';
            $admin->password = $request->password;
            $admin->image = $file;

            $admin->save();

            return redirect('admin/admin')->with('berhasil', 'Tambah admin berhasil');
        }
    }

    public function barang()
    {
        if (auth()->user()->role == 'admin') {
            $barang = Barang::all();
            $data = auth()->user();
            return view('admin.barang', compact('barang', 'data'));
        } else {
            return redirect('user/home_page')->with('error', 'Anda bukan admin');
        }
    }

    public function insert(Request $request)
    {

        $image = $request->img->store('image', 'public');

        $barang = new barang();

        $barang->nama_barang = $request->nama;
        $barang->kategori_barang = $request->kategori;
        $barang->harga_barang = $request->harga;
        $barang->deskripsi_barang = $request->deskripsi;
        $barang->gambar_barang = $image;
        $barang->stok_barang = $request->stok;

        $barang->save();

        return redirect('admin/barang')->with('berhasil', 'Barang berhasil ditambahkan');
    }

    public function transaksi()
    {
        $barang = barang::all();
        $data = auth()->user();
        $transaksi = Order::where('status', 'Proses')->get();
        $dikirim = Order::where('status', 'Dikirim')->get();
        $terima = Order::where('status', 'sampai')->get();
        return view('admin/transaksi', compact('barang', 'data', 'transaksi', 'dikirim', 'terima'));
    }

    public function update($id, Request $request)
    {
        $update = Order::find($id);

        $update->status = $request->status;

        $update->update();

        return redirect('admin/transaksi')->with('berhasil', 'Data berhasil di update');
    }
}
