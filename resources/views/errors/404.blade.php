@extends('layouts.tertiary')

@section('container')
    <section class="py-4 py-md-5">
        <div class="container">
            <div class="row row-cols-1 d-flex justify-content-center align-items-center">
                <div class="col-md-10 text-center"><img class="img-fluid w-75" src="{{ asset('assets/img/illustrations/404.svg') }}"></div>
                <div class="col text-center">
                    <h2 class="display-3 fw-bold mb-4">Halaman tidak ditemukan</h2>
                </div>
            </div>
        </div>
    </section>
@endsection