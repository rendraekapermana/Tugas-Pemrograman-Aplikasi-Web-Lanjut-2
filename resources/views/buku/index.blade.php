@extends('layouts.main')

@section('title', 'Daftar Buku')

@section('content')
<h2>Daftar Buku</h2>
<a href="{{ route('buku.create') }}">Tambah Buku</a>

@if(session('success'))
    <p style="color:green">{{ session('success') }}</p>
@endif

<table border="1" cellpadding="5">
    <thead>
        <tr>
            <th>Judul Buku</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($buku as $buku)
        <tr>
            <td>{{ $buku->judul }}</td>
            <td>
                <a href="{{ route('buku.show', $buku->id) }}">Detail</a>
                <a href="{{ route('buku.edit', $buku->id) }}">Edit</a>
                <form action="{{ route('buku.destroy', $buku->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Yakin ingin hapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
