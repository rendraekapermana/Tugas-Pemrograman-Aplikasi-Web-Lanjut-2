@extends('layouts.master')
@section('content')
    <h2>Tambah Mahasiswa</h2>
    <form action="{{ route('mahasiswa.store') }}" method="POST">
        @csrf
        <label>Nama</label>
        <input type="text" name="nama">
        <label>NIM</label>
        <input type="text" name="nim">
        <label>Prodi</label>
        <input type="text" name="prodi">
        <button type="submit">Simpan</button>
    </form>
@endsection