@extends('user/layout/main')

@section('title', 'Registrasi | PMI Indramayu')

@section('content')
<div class="container">
    <div class="row mt-4 mb-4 pt-4 pb-4 justify-content-center">
        <div class="col-8 justify-content-center">
            <div class="card shadow-lg">
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-8">
                            <img src="{{ asset('/img/Logo-PMI-im.png') }}" class="img-fluid " width="100%" height="80" class="d-inline-block align-top" alt="" >
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-6">
                            <div class="font-weight-bold float-left">
                                <i class="fas fa-check-circle" style="color: rgb(0, 194, 0)"></i>
                                Registrasi Berhasil
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="font-weight-bold float-right">{{ $registrasi->created_at->format('Y/m/d/H:i')}}</div>
                        </div>
                    </div>
                    <hr>
                    <div class="row mt-4 mb-4">
                        <div class="col text-center">
                            <p>Kode Registrasi : </p>
                            <h1 class="font-weight-bold">{{ $registrasi->kd_registrasi }}</h1>
                        </div>
                    </div>
                    <div class="row font-weight-bold text-center">
                        <div class="col">
                            <p>NIK/SIM : {{ $registrasi->nik }}</p>
                            <p>Nama : {{ $registrasi->nama }}</p>
                            <p>Alamat : {{ $registrasi->alamat }}</p>
                            <p>Tanggal Donor : {{ $registrasi->tanggal_donor->formatLocalized('%A, %d %B %Y') }}</p>
                            <p>Jam Donor : {{ $registrasi->jam_donor }}</p>
                        </div>
                    </div>
                    <hr>
                    <small class="font-italic">*Simpan kode registrasi dan tunjukkan ke admin PMI pada saat anda donor darah</small><br>
                    <small class="font-italic">**Bawa kartu identitas (KTP/SIM)</small>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection