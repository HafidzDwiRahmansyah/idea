@extends('..index')

@section('title', 'Konfirmasi Pesanan')

@section('content')
<div class="section konfirmasi">
    <div class="container">
        <form action="/order" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <label class="form-label fw-100" for="nama">Nama</label>
                    <input class="form-control border-bottom rounded-0 fw-100" type="text" name="nama" id="nama" value="{{ auth()->user()->name }}"
                        readonly>
                    <input class="form-control" type="text" name="id_brg" id="id_brg" value="{{ $data->id }}"
                        hidden>
                    <br>
                    <label class="form-label fw-100" for="nama_barang">Nama barang</label>
                    <input class="form-control border-bottom rounded-0 fw-100" type="text" name="namaBrg" id="namaBrg"
                        value="{{ $data->nama_barang }}" readonly> <br>
                    <label class="form-label fw-100" for="harga">Harga</label>
                    <input class="form-control border-bottom rounded-0 fw-100" type="number" name="harga" id="harga" oninput="hitungTotalBayar()"
                        value="{{ $data->harga_barang }}" readonly>
                    <br>
                    <label class="form-label fw-100" for="jml">Jumlah</label>
                    <input class="form-control border-bottom rounded-0 fw-100" type="number" name="jml" id="jml" value="{{ $jml }}" oninput="hitungTotalBayar()" readonly> <br>
                </div>
                <div class="col-lg-6">
                    <label class="form-label fw-100" for="tanggal">Tanggal</label>
                    <input class="form-control border-bottom rounded-0 fw-100" type="text" name="date" id="date" value="{{ date('l j F Y') }}"
                        readonly><br>
                    <label class="form-label fw-100" for="alamat">Alamat</label>
                    <input class="form-control border-bottom rounded-0 fw-100" type="text" name="alamat" id="alamat"><br>
                    <label class="form-label fw-100" for="total">Total</label>
                    <input class="form-control border-bottom rounded-0 fw-100" type="number" name="total" id="total" value="{{ $total }}" readonly> <br>
                    <label class="form-label fw-100" for="img">Bukti Pembayaran</label>
                    <input class="form-control border-bottom rounded-0 fw-100" type="file" name="img" id="img" placeholder="bukti pembayaran"> <br>
                    <button class="btn btn-primary fw-100" type="submit">Beli Sekarang</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    // let harga = $('#harga').val();
    // let jml = $('#jml').val();
    // $('#total').val(harga * jml);

    function hitungTotalBayar() {
        // Mendapatkan nilai dari input
        var harga = document.getElementById('harga').value;
        var jumlah = document.getElementById('jml').value;

        // Melakukan perhitungan
        var totalBayar = harga * jumlah;

        // Menampilkan hasil di input totalbayar
        document.getElementById('total').value = totalBayar;
    }
</script>
@endsection