@extends('layouts.main')

@section('title', 'Detail Buku')

@section('content')
<h2>Detail Buku</h2>

<p><strong>Judul:</strong> {{ $buku->judul }}</p>
<p><strong>Pengarang:</strong> {{ $buku->pengarang }}</p>
<p><strong>Tahun Terbit:</strong> {{ $buku->tahun_terbit }}</p>

<a href="{{ route('buku.index') }}">Kembali ke Daftar Buku</a>
@endsection
