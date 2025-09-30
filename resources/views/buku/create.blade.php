@extends('layouts.main')

@section('content')
<h1>Tambah Buku</h1>

@if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('buku.store') }}" method="POST">
    @csrf
    <label>Judul:</label>
    <input type="text" name="judul" value="{{ old('judul') }}"><br>
    <label>Pengarang:</label>
    <input type="text" name="pengarang" value="{{ old('pengarang') }}"><br>
    <label>Tahun Terbit:</label>
    <input type="text" name="tahun_terbit" value="{{ old('tahun_terbit') }}"><br>
    <button type="submit">Simpan</button>
</form>
@endsection
