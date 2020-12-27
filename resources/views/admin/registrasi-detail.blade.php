@extends('admin/layout/main')

@section('title', 'Detail Registrasi | Admin PMI')

@section('container')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 card shadow">
            <div class="card-body">
                <div class="row mb-2">
                    <h1 class="font-weight-bold">Data Registrasi Donor</h1>
                </div>
                <div class="row">
                    <a class="btn btn-success mb-4" href="{{ route('admin.registrasi') }}"><i class="fa fa-arrow-left mr-2"></i>Kembali</a>
                </div>
                <div class="container">
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-4 col-form-label">Kode Registrasi</label>
                        <div class="col-sm-8">
                            <input disabled type="text" class="form-control" id="kd_registrasi" name="kd_registrasi" placeholder="Kode Registrasi" value="{{ $registrasi->kd_registrasi }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-4 col-form-label">NIK/SIM</label>
                        <div class="col-sm-8">
                            <input disabled type="text" class="form-control" id="nik" name="nik" placeholder="NIK/SIM" value="{{ $registrasi->nik }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-4 col-form-label">Nama</label>
                        <div class="col-sm-8">
                            <input disabled disabled type="text" class="form-control" id="nama" name="nama" placeholder="Nama" value="{{ $registrasi->nama }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-4 col-form-label">Alamat</label>
                        <div class="col-sm-8">
                            <input disabled type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" value="{{ $registrasi->alamat }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-4 col-form-label">Kelurahan</label>
                        <div class="col-sm-8">
                            <input disabled type="text" class="form-control" id="kelurahan" name="kelurahan" placeholder="Kelurahan" value="{{ $registrasi->kelurahan->name }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-4 col-form-label">Kecamatan</label>
                        <div class="col-sm-8">
                            <input disabled type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="Kecamatan" value="{{ $registrasi->kecamatan->name }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-8">
                            <input disabled type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" placeholder="jenis_kelamin" value="{{ $registrasi->jenis_kelamin }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-4 col-form-label">Tempat Lahir</label>
                        <div class="col-sm-8">
                            <input disabled type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat lahir" value="{{ $registrasi->tempat_lahir }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-8">
                            <input disabled type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal lahir" value="{{ $registrasi->tanggal_lahir->format('d/m/Y') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-4 col-form-label">Pekerjaan</label>
                        <div class="col-sm-8">
                            <input disabled type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Pekerjaan" value="{{ $registrasi->pekerjaan }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-4 col-form-label">Status</label>
                        <div class="col-sm-8">
                            <input disabled type="text" class="form-control" id="status" name="status" placeholder="Status" value="{{ $registrasi->status }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-4 col-form-label">No. Hp</label>
                        <div class="col-sm-8">
                            <input disabled type="text" class="form-control" id="nohp" name="nohp" placeholder="No. Hp" value="{{ $registrasi->nohp }}">
                        </div>
                    </div>
                    <hr>
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-4 col-form-label">Rencana Donor</label>
                        <div class="col-sm-8">
                            <input disabled type="text" class="form-control" id="tanggal_donor" name="tanggal_donor" placeholder="No. Hp" value="{{ $registrasi->tanggal_donor->formatLocalized('%A, %d %B %Y') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-4 col-form-label">Jam Donor</label>
                        <div class="col-sm-8">
                            <input disabled type="text" class="form-control" id="jam_donor" name="jam_donor" placeholder="No. Hp" value="{{ $registrasi->jam_donor }}">
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col">
                            <a href="{{ route('admin.mcu-proses', $registrasi->id) }}" class="btn btn-success float-right">PROSES MCU</a>
                            <form method="POST" action="{{ route('admin.registrasi-hapus', $registrasi->id) }}">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger float-right mr-2">TOLAK</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection