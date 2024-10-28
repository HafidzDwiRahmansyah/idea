@extends('..index')

@section('title', 'Page furniture')

@section('content')
<section class="show">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <img src="{{ asset('storage/'.$data->gambar_barang) }}" alt="" width="100%" height="auto">
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-4">
                <form action="/user/show/konfirmasi/{{ $data->id }}" method="post">
                    @csrf
                    <h1 class="fw-200 pt-4"><b>{{ $data->nama_barang }}</b></h1>
                    <p class="fw-100">{{ $data->deskripsi_barang }}</p>
                    <h3 class="fw-100">Rp. {{ number_format($data->harga_barang) }}</h3>
                    <div class="row my-4">
                        <div class="col-lg-6">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <button class="btn btn-outline-secondary" type="button"
                                        onclick="decrement()">-</button>
                                </div>
                                <input type="text" class="form-control text-center" name="total" id="numberInput" value="0">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button"
                                        onclick="increment()">+</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary ms-2 mt-3 rounded-5 px-3 py-2 fw-100" type="submit">Beli Sekarang</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        function decrement() {
    var inputElement = document.getElementById('numberInput');
    var currentValue = parseInt(inputElement.value);

    if (currentValue > 0) {
      inputElement.value = currentValue - 1;
    }
  }

  // Fungsi untuk menambah nilai input
  function increment() {
    var inputElement = document.getElementById('numberInput');
    var currentValue = parseInt(inputElement.value);
    
    inputElement.value = currentValue + 1;
  }
    </script>
</section>
@endsection