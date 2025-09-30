@extends('layouts.main')
@section('content')
    <h2>Tambah Mahasiswa</h2>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form action="{{ route('mahasiswa.store') }}" method="POST">
        @csrf
        <label>Nama</label>
        <input type="text" name="nama">
        <label>NIM</label>
        <input type="text" name="nim">
        <label>Prodi</label>
        <input type="text" name="prodi">
        <label>Angkatan</label>
        <input type="number" name="angkatan">
        <button type="submit">Simpan</button>
    </form>
@endsection