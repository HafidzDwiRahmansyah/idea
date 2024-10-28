@extends('index')

@section('title', 'Login')
    
@section('content')
<section class="login">
    <div class="row g-0">
        <div class="col-lg-5">
            <div class="card border-0 rounded-0" style="position: fixed;">
                <img class="object-fit" src="/assets/img/loguser.jpg" alt="" width="155%" height="585px">
            </div>
        </div>
        <div class="col-lg-7">
            <div class="container">
                <div class="row mt-5 justify-content-center">
                    <h3 class="text-center pt-3 fw-100">Ide Furniture</h3>
                    <p class="text-center pb-5 fw-100">Selamat datang di admin IDEA Furniture</p>
                    <div class="col-lg-8">
                        <div class="card border-0 rounded-0">
                            <div class="container">
                                <form action="authentication" method="post">
                                    @csrf
                                    <label class="form-label fw-100" for="email">Email </label>
                                    <input class="form-control border-bottom rounded-0 fw-100" type="email" id="email"
                                        name="email" placeholder="example@gmail.com"><br>
                                    <label class="form-label fw-100" for="password">Password </label>
                                    <input class="form-control fw-100 border-bottom rounded-0" type="password"
                                        id="password" name="password" placeholder="password..."><br>
                                    <button class="btn btn-primary mx-auto d-block px-5 mt-3" type="submit"><span
                                            style="font-size: 14px;">Masuk Akun</span></button>
                                </form>
                                <div class="line">
                                    <div class="row mt-4 justify-content-center">
                                        <div class="col-lg-5">
                                            <hr>
                                        </div>
                                        <div class="col-lg-1">
                                            <p>or</p>
                                        </div>
                                        <div class="col-lg-5">
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                                <div class="account">
                                    <div class="container">
                                        <div class="card border-0">
                                            <p class="fw-100 text-center">Belum punya akun ? <a class="text-decoration-none" href="register">Register</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection