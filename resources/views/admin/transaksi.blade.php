@extends('navbar')

@section('title', 'Data Transaksi')

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Page Transaksi</h1>
    </div>
    <div class="row">
        <div class="col-xl-12 col-lg-2">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Data Transaksi</h6>
                </div>
                <div class="card-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane"
                                aria-selected="true">Proses</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                data-bs-target="#profile-tab-pane" type="button" role="tab"
                                aria-controls="profile-tab-pane" aria-selected="false">Dikirim</button>
                        </li>
                        <li class="nav-item" role="terima">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                data-bs-target="#terima-tab-pane" type="button" role="tab"
                                aria-controls="terima-tab-pane" aria-selected="false">Sampai</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                data-bs-target="#contact-tab-pane" type="button" role="tab"
                                aria-controls="contact-tab-pane" aria-selected="false">Sukses</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="disabled-tab" data-bs-toggle="tab"
                                data-bs-target="#disabled-tab-pane" type="button" role="tab"
                                aria-controls="disabled-tab-pane" aria-selected="false">Batal</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
                            aria-labelledby="home-tab" tabindex="0">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Pembeli</th>
                                            <th>Nama Barang</th>
                                            <th>Tanggal</th>
                                            <th>Alamat</th>
                                            <th>Harga</th>
                                            <th>Jumlah</th>
                                            <th>Total</th>
                                            <th>Bukti</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($transaksi as $order)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $order->id_user }}</td>
                                            <td>{{ $order->nama_brg }}</td>
                                            <td>{{ $order->tanggal }}</td>
                                            <td>{{ $order->alamat }}</td>
                                            <td>Rp.{{ number_format($order->harga) }}</td>
                                            <td>{{ $order->jumlah }}</td>
                                            <td>Rp.{{ number_format($order->total) }}</td>
                                            <td><img class="rounded-circle" src="{{ asset('storage/'.$order->bukti) }}"
                                                    alt="" width="50px" height="50px"></td>
                                            <td>{{ $order->status }}</td>
                                            <td><button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#id{{ $order->id }}">Update</button></td>
                                        </tr>
                                        <div class="modal fade" id="id{{ $order->id }}" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title fs-5" id="exampleModalLabel">Update
                                                            Transaksi
                                                        </h4>
                                                        <button type="button" class="btn btn-close"
                                                            data-bs-dismiss="modal" aria-label="Close">X</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="/update/transaksi/{{ $order->id }}" method="post">
                                                            @csrf
                                                            <label class="form-label" for="name">Nama Barang</label>
                                                            <input class="form-control" type="text" name="nama_brg"
                                                                id="name" value="{{ $order->nama_brg }}" readonly><br>
                                                            Update status transaksi menjadi
                                                            <select class="form-control"
                                                                aria-label="Default select example" name="status">
                                                                <option value="Proses">Proses</option>
                                                                <option value="Dikirim">Kirim</option>
                                                                <option value="sampai">Telah Sampai</option>
                                                            </select>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Batal</button>
                                                        <button type="submit" class="btn btn-primary">Update</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="terima-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
                            tabindex="0">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Pembeli</th>
                                            <th>Nama Barang</th>
                                            <th>Tanggal</th>
                                            <th>Alamat</th>
                                            <th>Harga</th>
                                            <th>Jumlah</th>
                                            <th>Total</th>
                                            <th>Bukti</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($terima as $order)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $order->id_user }}</td>
                                            <td>{{ $order->nama_brg }}</td>
                                            <td>{{ $order->tanggal }}</td>
                                            <td>{{ $order->alamat }}</td>
                                            <td>Rp.{{ number_format($order->harga) }}</td>
                                            <td>{{ $order->jumlah }}</td>
                                            <td>Rp.{{ number_format($order->total) }}</td>
                                            <td><img class="rounded-circle" src="{{ asset('storage/'.$order->bukti) }}"
                                                    alt="" width="50px" height="50px"></td>
                                            <td>{{ $order->status }}</td>
                                            <td><button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#id{{ $order->id }}">Update</button></td>
                                        </tr>
                                        <div class="modal fade" id="id{{ $order->id }}" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title fs-5" id="exampleModalLabel">Update
                                                            Transaksi
                                                        </h4>
                                                        <button type="button" class="btn btn-close"
                                                            data-bs-dismiss="modal" aria-label="Close">X</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="/update/transaksi/{{ $order->id }}" method="post">
                                                            @csrf
                                                            <label class="form-label" for="name">Nama Barang</label>
                                                            <input class="form-control" type="text" name="nama_brg"
                                                                id="name" value="{{ $order->nama_brg }}" readonly><br>
                                                            Update status transaksi menjadi
                                                            <select class="form-control"
                                                                aria-label="Default select example" name="status">
                                                                <option value="Proses">Proses</option>
                                                                <option value="Dikirim">Kirim</option>
                                                                <option value="sampai">Telah Sampai</option>
                                                            </select>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Batal</button>
                                                        <button type="submit" class="btn btn-primary">Update</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
                            tabindex="0">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Pembeli</th>
                                            <th>Nama Barang</th>
                                            <th>Tanggal</th>
                                            <th>Alamat</th>
                                            <th>Harga</th>
                                            <th>Jumlah</th>
                                            <th>Total</th>
                                            <th>Bukti</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($dikirim as $order)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $order->id_user }}</td>
                                            <td>{{ $order->nama_brg }}</td>
                                            <td>{{ $order->tanggal }}</td>
                                            <td>{{ $order->alamat }}</td>
                                            <td>Rp.{{ number_format($order->harga) }}</td>
                                            <td>{{ $order->jumlah }}</td>
                                            <td>Rp.{{ number_format($order->total) }}</td>
                                            <td><img class="rounded-circle" src="{{ asset('storage/'.$order->bukti) }}"
                                                    alt="" width="50px" height="50px"></td>
                                            <td>{{ $order->status }}</td>
                                            <td><button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#id{{ $order->id }}">Update</button></td>
                                        </tr>
                                        <div class="modal fade" id="id{{ $order->id }}" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title fs-5" id="exampleModalLabel">Update
                                                            Transaksi
                                                        </h4>
                                                        <button type="button" class="btn btn-close"
                                                            data-bs-dismiss="modal" aria-label="Close">X</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="/update/transaksi/{{ $order->id }}" method="post">
                                                            @csrf
                                                            <label class="form-label" for="name">Nama Barang</label>
                                                            <input class="form-control" type="text" name="nama_brg"
                                                                id="name" value="{{ $order->nama_brg }}" readonly><br>
                                                            Update status transaksi menjadi
                                                            <select class="form-control"
                                                                aria-label="Default select example" name="status">
                                                                <option value="Proses">Proses</option>
                                                                <option value="Dikirim">Kirim</option>
                                                                <option value="sampai">Telah Sampai</option>
                                                            </select>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Batal</button>
                                                        <button type="submit" class="btn btn-primary">Update</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab"
                            tabindex="0">Belum ada Sukses ...</div>
                        <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab"
                            tabindex="0">Belum ada pembatalan ...</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam neque deserunt facilis animi aliquam? Repudiandae quas sint repellat.</p>
</div>

@endsection