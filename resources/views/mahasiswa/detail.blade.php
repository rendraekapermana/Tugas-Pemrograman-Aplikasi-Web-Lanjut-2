@extends('layouts.main')
@section('content')

<h2>Detail Mahasiswa</h2>

            <label>Nama</label>
            <input disabled type="text" name="nama" value="{{ $data->nama }}">
            <label>NIM</label>
            <input disabled type="text" name="nim" value="{{ $data->nim }}">
            <label>Prodi</label>
            <input disabled type="text" name="prodi" value="{{ $data->prodi }}">
            <label>Angkatan</label>
            <input disabled type="number" name="angkatan" value="{{ $data->angkatan }}">


@endsection