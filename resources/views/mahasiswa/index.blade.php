@extends('layouts.main')
@section('content')
    <h2>Daftar Mahasiswa</h2>
    <a href="{{ route('mahasiswa.create') }}">+ Tambah Mahasiswa</a>
    <ul>
        @foreach($data as $m)
            <li>
                 {{ $m->nim }} - {{ $m->nama }} ({{ $m->prodi }}) - {{ $m->angkatan }}

                <a href="{{ route('mahasiswa.edit', $m->id) }}">Edit</a>
                <a href="{{ route('mahasiswa.detail', $m->id) }}">Detail</a>
                <form action="{{ route('mahasiswa.destroy', $m->id) }}" method="POST" style="display:inline">
                    @csrf @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection