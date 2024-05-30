@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Riwayat Pembayaran per Warga per Bulan</h1>
    <a href="{{ route('pembayarans.create') }}" class="btn btn-primary">Tambah Pembayaran</a>
    <table class="table">
        <thead>
            <tr>
                <th>Warga</th>
                <th>Jumlah</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pembayarans as $pembayaran)
            <tr>
                <td>{{ $pembayaran->warga->nama }}</td>
                <td>{{ $pembayaran->jumlah }}</td>
                <td>{{ $pembayaran->tanggal }}</td>
                <td>
                    <a href="{{ route('pembayarans.edit', $pembayaran->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('pembayarans.destroy', $pembayaran->id) }}" method="POST" style="display:inline;">
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
