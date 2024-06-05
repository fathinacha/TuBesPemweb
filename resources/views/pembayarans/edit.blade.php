@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0 rounded-lg">
                <div class="card-header bg-primary text-white text-center">
                    <h3 class="fw-bold my-4">{{ __('Edit Pembayaran') }}</h3>
                </div>

                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li><strong>{{ $error }}</strong></li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('pembayarans.update', $pembayaran->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <div class="mb-3">
                            <label for="warga_id" class="form-label">{{ __('Warga') }}</label>
                            <select id="warga_id" name="warga_id" class="form-select" required>
                                @foreach($wargas as $warga)
                                    <option value="{{ $warga->id }}" {{ $warga->id == $pembayaran->warga_id ? 'selected' : '' }}>
                                        {{ $warga->nama }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="jumlah" class="form-label">{{ __('Jumlah') }}</label>
                            <input type="number" id="jumlah" name="jumlah" class="form-control" value="{{ $pembayaran->jumlah }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="tanggal" class="form-label">{{ __('Tanggal') }}</label>
                            <input type="date" id="tanggal" name="tanggal" class="form-control" value="{{ $pembayaran->tanggal }}" required>
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
