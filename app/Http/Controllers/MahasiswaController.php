<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;


class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Mahasiswa::all();
        return view('mahasiswa.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        $request->validate([
            'nama' => 'required',
            'nim' => 'required|unique:mahasiswa,nim',
            'prodi' => 'required',

            'angkatan' => 'required|numeric',

        ]);

        Mahasiswa::create($request->all());

        return redirect()->route('mahasiswa.index')
            ->with('success', 'Mahasiswa berhasil ditambahkan');

    }

    /**
     * PENAMBAHAN: Fungsi untuk menampilkan detail mahasiswa.
     */
    public function show($id)
    {
        $mhs = Mahasiswa::findOrFail($id);
        // Anda perlu membuat view 'mahasiswa.show' untuk ini
        return view('mahasiswa.show', compact('mhs'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $mhs = Mahasiswa::findOrFail($id);
        return view('mahasiswa.edit', compact('mhs'));
    }

    /**
     * Show the detail for specified student.
     */
    public function detail($id) {
        $data = Mahasiswa::findOrFail($id);
        return view('mahasiswa.detail', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $mhs = Mahasiswa::findOrFail($id);

        // PENAMBAHAN: Validasi untuk proses update
        $request->validate([
            'nama' => 'required',
            'nim' => 'required|unique:mahasiswa,nim,' . $mhs->id,
            'prodi' => 'required',
            'angkatan' => 'required|numeric',
        ]);

        $mhs->update($request->all());

        return redirect()->route('mahasiswa.index')
            ->with('success', 'Data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $mhs = Mahasiswa::findOrFail($id);
        $mhs->delete();

        return redirect()->route('mahasiswa.index')
            ->with('success', 'Data berhasil dihapus');
    }
}