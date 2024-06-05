@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0 rounded-lg">
                <div class="card-header bg-primary text-white text-center">
                    <h3 class="fw-bold my-4">{{ __('Tambah Tagihan Baru') }}</h3>
                </div>

                <div class="card-body">
                    <form action="{{ route('tagihans.store') }}" method="POST">
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
                            <label for="bulan" class="form-label">{{ __('Bulan') }}</label>
                            <select class="form-control" name="bulan" id="bulan" required>
                                <option value="Januari">Januari</option>
                                <option value="Februari">Februari</option>
                                <option value="Maret">Maret</option>
                                <option value="April">April</option>
                                <option value="Mei">Mei</option>
                                <option value="Juni">Juni</option>
                                <option value="Juli">Juli</option>
                                <option value="Agustus">Agustus</option>
                                <option value="September">September</option>
                                <option value="Oktober">Oktober</option>
                                <option value="November">November</option>
                                <option value="Desember">Desember</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="tahun" class="form-label">{{ __('Tahun') }}</label>
                            <input type="number" class="form-control" name="tahun" id="tahun" required>
                        </div>

                        <div class="mb-3">
                            <label for="jumlah" class="form-label">{{ __('Jumlah') }}</label>
                            <input type="number" class="form-control" name="jumlah" id="jumlah" required>
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
