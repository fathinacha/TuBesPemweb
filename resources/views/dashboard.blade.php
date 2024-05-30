@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col">
            <h1 class="text-center">Dashboard Iuran Warga</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">Manajemen RT dan Lingkungan</h5>
                    <a href="{{ route('rts.index') }}" class="btn btn-primary">Kelola</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">Manajemen Warga</h5>
                    <a href="{{ route('wargas.index') }}" class="btn btn-primary">Kelola</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">Riwayat Tagihan Warga per Bulan</h5>
                    <a href="{{ route('tagihans.index') }}" class="btn btn-primary">Lihat</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">Riwayat Pembayaran per Warga per Bulan</h5>
                    <a href="{{ route('pembayarans.index') }}" class="btn btn-primary">Lihat</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
