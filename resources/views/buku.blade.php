@extends('layouts.main')

@section('title', 'Daftar Buku')

@section('content')
<table border="1" cellpadding="10">
    <thead>
        <tr>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Tahun</th>
        </tr>
    </thead>
    <tbody>
        <tr></tr>
            <td>Judul Buku 1</td>
            <td>Penulis 1</td>
            <td>2025</td>
        </tr>
        <tr>
            <td>Judul Buku 2</td>
            <td>Penulis 2</td>
            <td>2025</td>
        </tr>
        <tr>
            <td>Judul Buku 3</td>
            <td>Penulis 3</td>
            <td>2025</td>
        </tr>
    </tbody>
</table>

@endsection