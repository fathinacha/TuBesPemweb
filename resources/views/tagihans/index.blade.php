@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Riwayat Tagihan Warga per Bulan</h1>
    <a href="{{ route('tagihans.create') }}" class="btn btn-primary">Tambah Tagihan</a>
    <table class="table">
        <thead>
            <tr>
                <th>Warga</th>
                <th>Bulan</th>
                <th>Tahun</th>
                <th>Jumlah</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tagihans as $tagihan)
            <tr>
                <td>{{ $tagihan->warga->nama }}</td>
                <td>{{ $tagihan->bulan }}</td>
                <td>{{ $tagihan->tahun }}</td>
                <td>{{ $tagihan->jumlah }}</td>
                <td>
                    <a href="{{ route('tagihans.edit', $tagihan->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('tagihans.destroy', $tagihan->id) }}" method="POST" style="display:inline;">
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
