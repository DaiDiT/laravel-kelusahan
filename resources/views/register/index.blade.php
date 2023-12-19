@extends('layouts.main')

@section('container')
<section class="py-4 py-md-5 my-5">
    <div class="container py-md-5">
        <div class="row">
            <div class="col-md-6 text-center"><img class="img-fluid w-100" src="assets/img/illustrations/register.svg"></div>
            <div class="col-md-5 col-xl-4 text-center text-md-start">
                <h2 class="display-6 fw-bold mb-5"><span class="underline pb-1"><strong>Daftar</strong></span></h2>
                <form action="/register" method="post" data-bs-theme="light">
                    @csrf
                    <div class="mb-3"><input class="shadow-sm form-control @error('nama') is-invalid @enderror" type="text" name="nama" placeholder="Nama samaran" required value="{{ old('nama') }}">
                    @error('nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="mb-3"><input class="shadow-sm form-control @error('alamat_email') is-invalid @enderror" type="email" name="alamat_email" placeholder="Alamat email" required value="{{ old('alamat_email') }}">
                    @error('alamat_email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="mb-3"><input class="shadow-sm form-control @error('kata_sandi') is-invalid @enderror" type="password" name="kata_sandi" placeholder="Kata sandi" required>
                    @error('kata_sandi')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="mb-3"><input class="shadow-sm form-control @error('ulangi_kata_sandi') is-invalid @enderror" type="password" name="ulangi_kata_sandi" placeholder="Ulangi kata sandi" required>
                    @error('ulangi_kata_sandi')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="mb-5"><button class="btn btn-primary shadow" type="submit">Buat akun</button></div>
                </form>
                <p class="text-muted">Sudah punya akun? <a href="/login">Masuk&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-arrow-narrow-right">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <line x1="15" y1="16" x2="19" y2="12"></line>
                    <line x1="15" y1="8" x2="19" y2="12"></line>
                </svg></a>&nbsp;</p>
            </div>
        </div>
    </div>
</section>
@endsection