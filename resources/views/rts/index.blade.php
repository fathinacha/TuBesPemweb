@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Manajemen RT</h1>
    <a href="{{ route('rts.create') }}" class="btn btn-primary">Tambah RT</a>
    <table class="table">
        <thead>
            <tr>
                <th>Nama RT</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rts as $rt)
            <tr>
                <td>{{ $rt->nama }}</td>
                <td>
                    <a href="{{ route('rts.edit', $rt->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('rts.destroy', $rt->id) }}" method="POST" style="display:inline;">
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
