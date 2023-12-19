@extends('layouts.main')

@section('container')
<section class="py-4 py-md-5 my-5">
    <div class="container py-md-5">
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif  

        @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif  

        <div class="row">
            <div class="col-md-6 text-center"><img class="img-fluid w-100" src="assets/img/illustrations/login.svg"></div>
            <div class="col-md-5 col-xl-4 text-center text-md-start">
                <h2 class="display-6 fw-bold mb-5"><span class="underline pb-1"><strong>Masuk</strong><br></span></h2>
                <form action="/login" method="post" data-bs-theme="light">
                    @csrf
                    <div class="mb-3"><input class="shadow-sm form-control" type="email" name="email" placeholder="Alamat email" required autofocus value="{{ old('email') }}"></div>
                    <div class="mb-3"><input class="shadow-sm form-control" type="password" name="password" placeholder="Kata sandi" required></div>
                    <div class="mb-5"><button class="btn btn-primary shadow" type="submit">Masuk</button></div>
                </form>
                <p class="text-muted"><a href="/forgotten-password">Lupa kata sandi?</a></p>
            </div>
        </div>
    </div>
</section>
@endsection