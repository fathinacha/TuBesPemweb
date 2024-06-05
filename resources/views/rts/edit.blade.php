@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0 rounded-lg">
                <div class="card-header bg-primary text-white text-center">
                    <h3 class="fw-bold my-4">{{ __('Edit Data RT') }}</h3>
                </div>

                <div class="card-body">
                    <form action="{{ route('rts.update', $rt->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="nama_rt" class="form-label">{{ __('Nama RT') }}</label>
                            <input type="text" id="nama_rt" name="nama_rt" class="form-control" value="{{ $rt->nama_rt }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="alamat" class="form-label">{{ __('Alamat') }}</label>
                            <input type="text" id="alamat" name="alamat" class="form-control" value="{{ $rt->alamat }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="ketua_rt" class="form-label">{{ __('Ketua RT') }}</label>
                            <input type="text" id="ketua_rt" name="ketua_rt" class="form-control" value="{{ $rt->ketua_rt }}" required>
                        </div>

                        <div class="mb-0 text-center">
                            <button type="submit" class="btn btn-primary w-100">{{ __('Update') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
