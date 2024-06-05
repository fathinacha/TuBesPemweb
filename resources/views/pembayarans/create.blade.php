@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0 rounded-lg">
                <div class="card-header bg-primary text-white text-center">
                    <h3 class="fw-bold my-4">{{ __('Tambah Pembayaran Baru') }}</h3>
                </div>

                <div class="card-body">
                    <form action="{{ route('pembayarans.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="warga" class="form-label">{{ __('Warga') }}</label>
                            <select class="form-control" name="warga_id" id="warga" required>
                                @foreach($wargas as $warga)
                                    <option value="{{ $warga->id }}">{{ $warga->nama }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="jumlah" class="form-label">{{ __('Jumlah') }}</label>
                            <input type="number" class="form-control" name="jumlah" id="jumlah" required>
                        </div>

                        <div class="mb-3">
                            <label for="tanggal" class="form-label">{{ __('Tanggal') }}</label>
                            <input type="date" class="form-control" name="tanggal" id="tanggal" required>
                        </div>

                        <div class="mb-0 text-center">
                            <button type="submit" class="btn btn-primary w-100">{{ __('Submit') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
