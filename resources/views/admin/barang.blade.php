@extends('navbar')

@section('title', 'Data Barang')

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Page Barang</h1>
    </div>
    <div class="row">
        <div class="col-xl-12 col-lg-2">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Data Barang</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="store" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <label class="form-label fw-100" for="nama">Nama </label>
                                <input class="form-control fw-100" type="text" id="nama" name="nama"
                                    placeholder="nama..."><br>
                                <label class="form-label fw-100" for="kategori">Kategori </label>
                                <select class="form-control" aria-label="Default select example" name="kategori">
                                    <option value="chair">Kursi</option>
                                    <option value="sofa">Sofa</option>
                                    <option value="bed">Kasur</option>
                                    <option value="lamp">Lampu</option>
                                </select><br>
                                <label class="form-label fw-100" for="harga">Harga</label>
                                <input class="form-control fw-100" type="harga" id="harga" name="harga"
                                    placeholder="harga..."><br>
                            </div>
                            <div class="col-lg-6">
                                <label class="form-label fw-100" for="deskripsi">Deskripsi </label>
                                <input class="form-control fw-100" type="deskripsi" id="deskripsi" name="deskripsi"
                                    placeholder="deskripsi..."><br>
                                <label class="form-label fw-100" for="stok">Stok</label>
                                <input class="form-control fw-100" type="stok" id="stok" name="stok"
                                    placeholder="stok..."><br>
                                <label class="form-label fw-100" for="image">Gambar</label>
                                <input class="form-control fw-100" type="file" id="image" name="image"
                                    placeholder="jpg or jpeg or png..."><br>
                                </div>
                                <button class="btn btn-primary mx-auto d-block px-5 mt-4" type="submit">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12 col-lg-2">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Data Barang</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Kategori</th>
                                    <th>Deskripsi</th>
                                    <th>Harga</th>
                                    <th>Stok</th>
                                    <th>Image</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($barang as $barangs)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $barangs->nama_barang }}</td>
                                    <td>{{ $barangs->kategori_barang }}</td>
                                    <td>{{ $barangs->deskripsi_barang }}</td>
                                    <td>{{ $barangs->harga_barang }}</td>
                                    <td>{{ $barangs->stok_barang }}</td>
                                    <td><img class="rounded-circle" src="{{ asset('storage/'.$barangs->gambar_barang) }}" alt=""
                                            width="50px" height="50px"></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection