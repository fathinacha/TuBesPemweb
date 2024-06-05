@extends('layouts.app')

@section('content')
<!-- START FORM -->
<form action='{{ url('rts') }}' method='post'>
    @csrf
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="mb-3 row">
            <label for="id" class="col-sm-2 col-form-label">ID</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name='id' id="id" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama RT</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nama' id="nama" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='alamat' id="alamat" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="ketua" class="col-sm-2 col-form-label">Ketua RT</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='ketua' id="ketua' required>
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-primary" name="submit">SIMPAN</button>
            </div>
        </div>
    </div>
</form>
<!-- END FORM -->
@endsection