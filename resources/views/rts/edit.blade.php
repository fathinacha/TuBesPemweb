@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">Edit Data RT</h1>
    <form action="{{ route('rts.update', $rt->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama_rt" class="form-label">Nama RT:</label>
            <input type="text" class="form-control" id="nama_rt" name="nama_rt" value="{{ $rt->nama_rt }}" required>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat:</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $rt->alamat }}" required>
        </div>
        <div class="mb-3">
            <label for="ketua_rt" class="form-label">Ketua RT:</label>
            <input type="text" class="form-control" id="ketua_rt" name="ketua_rt" value="{{ $rt->ketua_rt }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
