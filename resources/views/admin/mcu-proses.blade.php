@extends('admin/layout/main')

@section('title', 'Medical Checkup | Admin PMI')

@section('container')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 card shadow">
            <div class="card-body">
                <div class="row mb-2">
                    <h1>Data Medical Checkup</h1>
                </div>
                <div class="row mb-4">
                    <a class="btn btn-success mb-4" href=""><i class="fa fa-arrow-left mr-2"></i>Kembali</a>
                </div>
                <div class="container">
                    <form action="{{ route('admin.mcu-store') }}" method="POST">
                        @csrf
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <input type="hidden" value="{{ $registrasi->id }}" name="id_registrasi">
                        {{-- {{ $registrasi->id }} --}}
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-4 col-form-label">Nama Petugas HB</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="nama_petugas_hb" name="nama_petugas_hb" placeholder="Nama Petugas HB" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-4 col-form-label">Nama Petugas Paraf</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="nama_petugas_paraf" name="nama_petugas_paraf" placeholder="Nama Petugas Paraf" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-4 col-form-label">Tanggal MCU</label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" id="tgl_mcu" name="tgl_mcu" placeholder="Tanggal MCU" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-4 col-form-label">Lokasi MCU</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="lokasi_mcu" name="lokasi_mcu" placeholder="Lokasi MCU" required>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-4 col-form-label">Kode Registrasi</label>
                            <div class="col-sm-8">
                                <input disabled type="text" class="form-control" id="kd_registrasi" name="kd_registrasi" value="{{ $registrasi->kd_registrasi }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-4 col-form-label">NIK/SIM</label>
                            <div class="col-sm-8">
                                <input disabled type="text" class="form-control" id="nik" name="nik" value="{{ $registrasi->nik }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-4 col-form-label">Nama</label>
                            <div class="col-sm-8">
                                <input disabled type="text" class="form-control" id="nama" name="nama" value="{{ $registrasi->nama }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-4 col-form-label">Berat Badan</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="bb" name="bb" placeholder="Berat Badan" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="golda" class="col-sm-4 col-form-label">Golongan Darah</label>
                            <div class="col-sm-8">
                                <select class="form-control" name="goldar" id="goldar" required>
                                    <option selected disabled>--Golongan Darah--</option>
                                        <option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-4 col-form-label">Nilai HB</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="nilai_hb" name="nilai_hb" placeholder="Nilai HB" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-4 col-form-label">HT</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="ht" name="ht" placeholder="HT" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-4 col-form-label">Tekanan Darah</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="tekanan_darah" name="tekanan_darah" placeholder="Tekanan Darah" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-4 col-form-label">Status MCU</label>
                            <div class="col-sm-8">
                                <select class="form-control" name="status_mcu" required>
                                    <option selected disabled>--Status MCU--</option>
                                    <option value="LOLOS">LOLOS</option>
                                    <option value="TIDAK LOLOS">TIDAK LOLOS</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col">
                                <button type="submit" class="btn btn-success float-right">SIMPAN</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection