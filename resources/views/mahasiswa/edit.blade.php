@extends('layouts.main')
@section('content')
    <h2>Edit Mahasiswa</h2>
    <form action="{{ route('mahasiswa.update', $mhs->id) }}" method="POST">
        @csrf @method('PUT')
        <label>Nama</label>
        <input type="text" name="nama" value="{{ $mhs->nama }}">
        <label>NIM</label>
        <input type="text" name="nim" value="{{ $mhs->nim }}">
        <label>Prodi</label>
        <input type="text" name="prodi" value="{{ $mhs->prodi }}">
        <label>Angkatan</label>
        <input type="number" name="angkatan" value="{{ $mhs->angkatan }}">
        <button type="submit">Update</button>
    </form>
@endsection