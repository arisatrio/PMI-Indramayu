@extends('admin/layout/main')

@section('title', 'Status Donor | Admin PMI')

@section('container')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 card shadow">
            <div class="card-body">
                <div class="row mb-2">
                    <h1 class="font-weight-bold">Data Calon Pendonor</h1>
                </div>
                <div class="row">
                    <a class="btn btn-success mb-4 mr-2" href="{{ route('admin.pendonor') }}"><i class="fa fa-arrow-left mr-2"></i>Kembali</a>
                    <form method="POST" action="{{ route('admin.pendonor-hapus', $pendonor->id) }}">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger mr-2">Hapus</button>
                    </form>
                </div>
                <div class="container">
                    <form action="{{ route('admin.pendonor-update', $pendonor->id) }}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-4 col-form-label">NIK</label>
                            <div class="col-sm-8">
                                <input disabled type="text" class="form-control" id="nik" name="nik" value="{{ $pendonor->registrasi->nik }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-4 col-form-label">Nama</label>
                            <div class="col-sm-8">
                                <input disabled type="text" class="form-control" id="nama" name="nama" value="{{ $pendonor->registrasi->nama }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-4 col-form-label">Tempat Lahir</label>
                            <div class="col-sm-8">
                                <input disabled type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="{{ $pendonor->registrasi->tempat_lahir }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-8">
                                <input disabled type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{ $pendonor->registrasi->tanggal_lahir->format('d/m/Y') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-8">
                                <input disabled type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="{{ $pendonor->registrasi->jenis_kelamin }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-4 col-form-label">No Hp</label>
                            <div class="col-sm-8">
                                <input disabled type="text" class="form-control" id="nohp" name="nohp" value="{{ $pendonor->registrasi->nohp }}">
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-4 col-form-label">Berat Badan</label>
                            <div class="col-sm-8">
                                <input disabled type="text" class="form-control" id="bb" name="bb" value="{{ $pendonor->mcu->bb }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-4 col-form-label">Golongan Darah</label>
                            <div class="col-sm-8">
                                <input disabled type="text" class="form-control" id="goldar" name="goldar" value="{{ $pendonor->mcu->goldar }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-4 col-form-label">HB</label>
                            <div class="col-sm-8">
                                <input disabled type="text" class="form-control" id="nilai_hb" name="nilai_hb" value="{{ $pendonor->mcu->nilai_hb }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-4 col-form-label">Tekanan Darah</label>
                            <div class="col-sm-8">
                                <input disabled type="text" class="form-control" id="tekanan_darah" name="tekanan_darah" value="{{ $pendonor->mcu->tekanan_darah }}">
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-4 col-form-label">Tanggal Donor</label>
                            <div class="col-sm-8">
                                <input disabled type="text" class="form-control" id="tgl_mcu" name="tgl_mcu" value="{{ $pendonor->mcu->created_at->format('d/m/Y H:i') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-4 col-form-label">No Kantong Darah</label>
                            <div class="col-sm-8">
                                <input disabled type="text" class="form-control" id="no_kantong_darah" name="no_kantong_darah" value="{{ $pendonor->no_kantong_darah }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-4 col-form-label">Status Donor</label>
                            <div class="col-sm-8">
                                <select class="form-control" name="status_donor" id="status_donor">
                                    <option selected value="{{ $pendonor->status_donor }}">{{ $pendonor->status_donor }}</option>
                                    <option value="CEK LAB">CEK LAB</option>
                                    <option value="BERHASIL">BERHASIL</option>
                                    <option value="BLOK">BLOK</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mt-5 float-right">
                            <div class="d-sm-flex">
                                <button class="btn btn-success">SIMPAN</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection