@extends('layouts.app')

@section('content')
<!-- START FORM -->
<!-- resources/views/rts/create.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Data RT Baru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body class="bg-light">
    <div class="container">
        <h1 class="text-center mb-4">Buat RT Baru</h1>
        <form action="{{ route('rts.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama_rt" class="form-label">Nama RT:</label>
                <input type="text" class="form-control" id="nama_rt" name="nama_rt" required>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat:</label>
                <input type="text" class="form-control" id="alamat" name="alamat" required>
            </div>
            <div class="mb-3">
                <label for="ketua_rt" class="form-label">Ketua RT:</label>
                <input type="text" class="form-control" id="ketua_rt" name="ketua_rt" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
<!-- AKHIR FORM -->
@endsection
