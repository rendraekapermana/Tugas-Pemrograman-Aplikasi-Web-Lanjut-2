@extends('layouts.main')

@section('content')
<h1>Edit Buku</h1>

@if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('buku.update', $buku->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label>Judul:</label>
    <input type="text" name="judul" value="{{ old('judul', $buku->judul) }}"><br>
    <label>Pengarang:</label>
    <input type="text" name="pengarang" value="{{ old('pengarang', $buku->pengarang) }}"><br>
    <label>Tahun Terbit:</label>
    <input type="text" name="tahun_terbit" value="{{ old('tahun_terbit', $buku->tahun_terbit) }}"><br>
    <button type="submit">Update</button>
</form>
@endsection
