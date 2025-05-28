@extends('layouts.main')

@section('container')

<style>
    .page-item.active .page-link {
        background-color:rgb(43, 104, 8);
        border-color:rgb(43, 104, 8);
        color: #fff;
    }

    .page-link {
        color:rgb(25, 49, 12);
    }

    .page-link:hover {
        background-color:rgb(43, 104, 8);
        color: white;
    }
</style>


    <h1 class="mb-4 text-center">{{ $title }}</h1>

    <div class="row justify-content-center mb-4 pt-4">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-body">
                    <form action="/search  " method="GET" class="d-flex">
                        @if (request('name'))
                            <input type="hidden" name="name" value="{{ request('name') }}">
                        @endif
                        <input type="text" class="form-control me-2" name="search" placeholder="Cari berdasarkan Nama atau NIM" value="{{old('search'), request('search') }}">
                        <button class="btn btn-success text-white" type="submit">Cari</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @if (request('search'))
        @if ($posts->count())
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 justify-content-center pt-5">
                @foreach ($posts as $post)
                    <div class="col">
                        <div class="card h-100 shadow-sm border-0">
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->name }}</h5>
                                <p class="card-text mb-2">
                                    <strong>NIS:</strong> {{ $post->nim }} <br>
                                    <small class="text-muted">Uploaded {{ $post->created_at->diffForHumans() }}</small>
                                </p>
                                <a href="/search/{{ $post->name }}" class="btn btn-outline-success btn-sm">Cek Kelulusan</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="d-flex justify-content-center mt-4">
                {{ $posts->links() }}
            </div>
        @else
            <p class="text-center fs-5 mt-4">🙁 Siswa tidak ditemukan.</p>
        @endif
    @endif

@endsection


