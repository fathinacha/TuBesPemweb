@extends('layouts.app')

@section('content')
<!-- START FORM -->
<form action='' method='post'>
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <div class="mb-3 row">
                <label for="warga" class="col-sm-2 col-form-label">Warga</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='warga' id="warga">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='jumlah' id="jumlah">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name='tanggal' id="tanggal">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="aksi" class="col-sm-2 col-form-label">Aksi</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='aksi' id="aksi">
                    <button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
            </div>
        </div>
    </form>
        <!-- AKHIR FORM -->