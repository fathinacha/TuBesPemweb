@extends('layouts.app')

@section('content')
<!-- START FORM -->
<!-- resources/views/rts/create.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Buat RT Baru</title>
</head>
<body>
    <h1>Buat RT Baru</h1>
    <form action="{{ route('rts.store') }}" method="POST">
        @csrf
        <label for="nama_rt">Nama RT:</label>
        <input type="text" id="nama_rt" name="nama_rt" required>

        <label for="alamat">Alamat:</label>
        <input type="text" id="alamat" name="alamat" required>

        <label for="ketua_rt">Ketua RT:</label>
        <input type="text" id="ketua_rt" name="ketua_rt" required>

        <button type="submit">Submit</button>
    </form>
</body>
</html>

<!-- AKHIR FORM -->
@endsection