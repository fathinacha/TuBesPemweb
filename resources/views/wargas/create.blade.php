@extends('layouts.app')

@section('content')
<!-- START FORM -->
<!DOCTYPE html>
<html>
<head>
    <title>Data Warga Baru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body class="bg-light">
    <div class="container">
        <h1 class="text-center mb-4">Data Warga Baru</h1>
        <form action="{{ route('wargas.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat:</label>
                <input type="text" class="form-control" id="alamat" name="alamat" required>
            </div>
            <div class="mb-3">
                <label for="no_telp" class="form-label">Nomor Telepon:</label>
                <input type="text" class="form-control" id="no_telp" name="no_telp">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="text" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="id_rt" class="form-label">RT:</label>
                <select class="form-control" id="id_rt" name="id_rt" required>
                    @foreach($rts as $rt)
                        <option value="{{ $rt->id }}">{{ $rt->nama_rt }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary" name="submit">SIMPAN</button>
            </div>
        </form>
    </div>
</body>
</html>
<!-- AKHIR FORM -->
@endsection
