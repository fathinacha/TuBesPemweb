@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Manajemen Warga</h1>
    <a href="{{ route('wargas.create') }}" class="btn btn-primary">Tambah Warga</a>
    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No Telp</th>
                <th>Email</th>
                <th>RT</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($wargas as $warga)
            <tr>
                <td>{{ $warga->nama }}</td>
                <td>{{ $warga->alamat }}</td>
                <td>{{ $warga->no_telp }}</td>
                <td>{{ $warga->email }}</td>
                <td>{{ $warga->rt->nama }}</td>
                <td>
                    <a href="{{ route('wargas.edit', $warga->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('wargas.destroy', $warga->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
