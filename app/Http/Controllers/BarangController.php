<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use DateTimeInterface;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class BarangController extends Controller
{
    public function index()
    {
        $chair = Barang::where('kategori_barang', 'chair')->get();
        $dsofa = Barang::where('kategori_barang', 'sofa')->get();
        $dbed = Barang::where('kategori_barang', 'bed')->get();
        $dlamp = Barang::where('kategori_barang', 'lamp')->get();
        return view('index_ui', compact('chair', 'dsofa', 'dbed', 'dlamp'));
    }

    public function show($id, Request $request)
    {
        $data = Barang::find($id);
        return view('user/show', compact('data'));
    }

    public function beli($id, Request $request)
    {
        $data = Barang::find($id);
        $jml = $request->total;
        $total = $jml*$data->harga_barang;
        return view('user/konfirmasi', compact('data', 'total', 'jml'));
    }

    public function order(Request $request)
    {
        $file = $request->img->store('image', 'public');

        if ($file == null) {
            $status = "Menunggu Konfirmasi Pembayaran";
        } elseif ($file !== null) {
            $status = "Proses";
        }

        $order = new Order();

        $order->id_user = auth()->user()->id;
        $order->nama_brg = $request->namaBrg;
        $order->harga = $request->harga;
        $order->jumlah = $request->jml;
        $order->tanggal = $request->date;
        $order->alamat = $request->alamat;
        $order->bukti = $file;
        $order->total = $request->total;
        $order->status = $status;


        $brg = $request->id_brg;
        $barang = Barang::find($brg);
        $barang->stok_barang -= $request->jml;

        $barang->save();

        $order->save();

        return redirect('user/home_page')->with('berhasil', 'Pesanan berhasil dibuat');
    }

    public function histori()
    {
        $id_user = auth()->user()->id;
        $histori = Order::where('id_user', $id_user)->get();
        return view('user/histori', compact('histori'));
    }
}
