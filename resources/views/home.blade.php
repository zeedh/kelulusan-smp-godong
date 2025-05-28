@extends('layouts.main')

@section('container')
<div class="container d-flex flex-column justify-content-center align-items-center text-center" style="min-height: 80vh;">
    <div>
        <h1 class="display-4 fw-bold mb-3">Selamat Datang di Portal Kelulusan</h1>
        <h1 class="display-4 fw-bold mb-3">SMP Negeri 1 Godong </h1>
        <p class="lead mb-4"></p>
        <a href="/search" class="btn btn-success btn-lg text-white shadow-sm px-4 py-2">
            Cek Kelulusan Sekarang!
        </a>
    </div>
</div>
@endsection
