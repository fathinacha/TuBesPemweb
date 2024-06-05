@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">Edit Data Warga</h1>
    <form action="{{ route('wargas.update', $warga->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama" class="form-label">Nama:</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $warga->nama }}" required>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat:</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $warga->alamat }}" required>
        </div>
        <div class="mb-3">
            <label for="no_telp" class="form-label">Nomor Telepon:</label>
            <input type="text" class="form-control" id="no_telp" name="no_telp" value="{{ $warga->no_telp }}">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="text" class="form-control" id="email" name="email" value="{{ $warga->email }}">
        </div>
        <div class="mb-3">
            <label for="id_rt" class="form-label">RT:</label>
            <select class="form-control" id="id_rt" name="id_rt" required>
                @foreach($rts as $rt)
                    <option value="{{ $rt->id }}" {{ $warga->id_rt == $rt->id ? 'selected' : '' }}>{{ $rt->nama_rt }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
