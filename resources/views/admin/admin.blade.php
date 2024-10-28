@extends('navbar')

@section('title', 'Data Admin')

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Page Admin</h1>
    </div>
    <div class="row">
        <div class="col-xl-12 col-lg-2">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Data Admin</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                            aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Dropdown Header:</div>
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="store" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <label class="form-label fw-100" for="username">Username </label>
                                <input class="form-control fw-100" type="text" id="username" name="username"
                                    placeholder="username..."><br>
                                <label class="form-label fw-100" for="name">Nama </label>
                                <input class="form-control fw-100" type="name" id="name" name="name"
                                    placeholder="name..."><br>
                                <label class="form-label fw-100" for="email">Email </label>
                                <input class="form-control fw-100" type="email" id="email" name="email"
                                    placeholder="email..."><br>
                            </div>
                            <div class="col-lg-6">
                                <label class="form-label fw-100" for="password">Password </label>
                                <input class="form-control fw-100" type="password" id="password" name="password"
                                    placeholder="password..."><br>
                                <label class="form-label fw-100" for="image">Image </label>
                                <input class="form-control fw-100" type="file" id="image" name="image"
                                    placeholder="jpg or jpeg or png..."><br>
                                <button class="btn btn-primary mx-auto px-5 mt-4" type="submit">Tambah</button>
                            </div>
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
                    <h6 class="m-0 font-weight-bold text-primary">Data Admin</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Username</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Image</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($admin as $admins)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $admins->username }}</td>
                                    <td>{{ $admins->name }}</td>
                                    <td>{{ $admins->email }}</td>
                                    <td><img class="rounded-circle" src="{{ asset('storage/'.$admins->image) }}" alt=""
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