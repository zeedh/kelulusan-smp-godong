@extends('layouts.main')

@section('container')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            {{-- Card untuk Detail Mahasiswa --}}
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h3 class="card-title mb-4 text-center">{{ $post->name }}</h3>

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>NIS:</strong> {{ $post->nim }}</li>
                        <li class="list-group-item"><strong>Program Studi:</strong> {{ $post->prodi }}</li>
                        <li class="list-group-item"><strong>Mitra:</strong> {{ $post->mitra }}</li>
                        <li class="list-group-item"><strong>Posisi:</strong> {{ $post->posisi }}</li>
                        <li class="list-group-item"><strong>Status:</strong> {{ $post->status }}</li>
                        <li class="list-group-item"><strong>Email:</strong> <a href="mailto:{{ $post->email }}">{{ $post->email }}</a></li>
                        <li class="list-group-item"><strong>No. Telepon:</strong> <a href="tel:{{ $post->no_telp }}">{{ $post->no_telp }}</a></li>
                    </ul>

                    <div class="mt-4 text-center">
                        <a href="/search" class="btn btn-outline-secondary">← Kembali ke pencarian</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
