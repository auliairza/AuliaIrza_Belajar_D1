<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //halaman home
        return view('pertemuan4/home');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //tambah mahasiswa tombol
        return view('pertemuan4/tambah_mahasiswa');
    }

    public function mahasiswa()
    {
        //tambah mahasiswa tombol
        $npm = [123, 124, 125];
        return view('pertemuan4/mahasiswa', compact('npm'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //detail isinya npm mahasiswa pake array yang nanti disimpan di id
        $mahasiswaData = [
            '123' => ['Nama' => 'Joni', 'Jenis Kelamin' => 'Laki-Laki', 'Tanggal Lahir' => '19-09-2000', 'Alamat' => 'Bogor'],
            '124' => ['Nama' => 'Dewi', 'Jenis Kelamin' => 'Perempuan', 'Tanggal Lahir' => '21-03-1999', 'Alamat' => 'Jakarta'],
            '125' => ['Nama' => 'Budi', 'Jenis Kelamin' => 'Laki-Laki', 'Tanggal Lahir' => '15-07-2001', 'Alamat' => 'Surabaya'],
        ];

        // Check if the ID exists in the sample data
        if (isset($mahasiswaData[$id])) {
            $mahasiswa = $mahasiswaData[$id];
            return view('pertemuan4.detailmahasiswa', ['id' => $id, 'mahasiswa' => $mahasiswa]);
        } else {
            abort(404, 'Mahasiswa tidak ditemukan');
        }
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
