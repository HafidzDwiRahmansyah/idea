@extends('..index')

@section('title', 'Histori Belanja')

@section('content')
<nav class="navbar navbar-expand-lg bg-none navbar-light mb-3">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link me-2 fw-100" href="/user/home_page">Home</a>
                <a class="nav-link me-2 fw-100" href="#">About Us</a>
                <a class="nav-link me-2 fw-100" href="#">Shop Store</a>
                <a class="nav-link me-2 fw-100" href="/user/histori/">Histori</a>
            </div>
            <div class="navbar-nav ms-5">
                <a class="nav-link fw-100" href="/login"><i class="bi bi-person-fill fs-3"></i></a>
            </div>
        </div>
    </div>
</nav>
<section class="histori">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <table class="table">
                    <thead>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Subtotal</th>
                        <th>Status</th>
                    </thead>
                    <tbody>
                        @foreach ($histori as $item)
                        <tr>
                            <td>{{ $item->nama_brg }}</td>
                            <td>Rp. {{ number_format($item->harga) }}</td>
                            <td>{{ $item->jumlah }}</td>
                            <td>Rp. {{ number_format($item->total) }}</td>
                            <td>{{ $item->status }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection