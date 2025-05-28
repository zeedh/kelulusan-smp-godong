<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Http\Requests\StoreMahasiswaRequest;
use App\Http\Requests\UpdateMahasiswaRequest;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {

        $title='';

        return view('search', [
            "title" => "Cari Nama atau NIS kamu!" . $title,
            "posts" => Mahasiswa::latest()->filter(request(['search']))->paginate(6)->withQueryString()

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMahasiswaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $post) {
        return view('siswa', [
            "title" => "Data Siswa",
            "post" => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMahasiswaRequest $request, Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        //
    }
}
