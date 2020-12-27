@extends('admin/layout/main')

@section('title', 'Detail MCU | Admin PMI')

@section('container')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 card shadow">
            <div class="card-body">
                <div class="row mb-2">
                    <h1 class="font-weight-bold">Data Calon Pendonor</h1>
                </div>
                <div class="row">
                    <a class="btn btn-success mb-4" href="{{ route('admin.registrasi') }}"><i class="fa fa-arrow-left mr-2"></i>Kembali</a>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card-body">
                            <div class="container">
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-4 col-form-label">Kode Registrasi</label>
                                    <div class="col-sm-8">
                                        <input disabled type="text" class="form-control" id="kd_registrasi" name="kd_registrasi" placeholder="Kode Registrasi" value="{{ $mcu->registrasi->kd_registrasi }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-4 col-form-label">NIK/SIM</label>
                                    <div class="col-sm-8">
                                        <input disabled type="text" class="form-control" id="nik" name="nik" placeholder="NIK/SIM" value="{{ $mcu->registrasi->nik }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-4 col-form-label">Nama</label>
                                    <div class="col-sm-8">
                                        <input disabled disabled type="text" class="form-control" id="nama" name="nama" placeholder="Nama" value="{{ $mcu->registrasi->nama }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-4 col-form-label">Alamat</label>
                                    <div class="col-sm-8">
                                        <input disabled type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" value="{{ $mcu->registrasi->alamat }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-4 col-form-label">Kelurahan</label>
                                    <div class="col-sm-8">
                                        <input disabled type="text" class="form-control" id="kelurahan" name="kelurahan" placeholder="Kelurahan" value="{{ $mcu->registrasi->kelurahan->name }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-4 col-form-label">Kecamatan</label>
                                    <div class="col-sm-8">
                                        <input disabled type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="Kecamatan" value="{{ $mcu->registrasi->kecamatan->name }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-8">
                                        <input disabled type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" placeholder="jenis_kelamin" value="{{ $mcu->registrasi->jenis_kelamin }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-4 col-form-label">Tempat Lahir</label>
                                    <div class="col-sm-8">
                                        <input disabled type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat lahir" value="{{ $mcu->registrasi->tempat_lahir }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-8">
                                        <input disabled type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal lahir" value="{{ $mcu->registrasi->tanggal_lahir->format('d/m/Y') }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-4 col-form-label">Pekerjaan</label>
                                    <div class="col-sm-8">
                                        <input disabled type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Pekerjaan" value="{{ $mcu->registrasi->pekerjaan }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-4 col-form-label">Status</label>
                                    <div class="col-sm-8">
                                        <input disabled type="text" class="form-control" id="status" name="status" placeholder="Status" value="{{ $mcu->registrasi->status }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-4 col-form-label">No. Hp</label>
                                    <div class="col-sm-8">
                                        <input disabled type="text" class="form-control" id="nohp" name="nohp" placeholder="No. Hp" value="{{ $mcu->registrasi->nohp }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="card-body">
                            <div class="container">
                                <form action=" " method="POST">
                                    <div class="form-group row">
                                        <label for="colFormLabel" class="col-sm-4 col-form-label">Nama Petugas HB</label>
                                        <div class="col-sm-8">
                                            <input disabled type="text" class="form-control" id="nama_petugas_hb" name="nama_petugas_hb" placeholder="Nama Petugas HB" value="{{ $mcu->nama_petugas_hb }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="colFormLabel" class="col-sm-4 col-form-label">Nama Petugas Paraf</label>
                                        <div class="col-sm-8">
                                            <input disabled type="text" class="form-control" id="nama_petugas_paraf" name="nama_petugas_paraf" placeholder="Nama Petugas Paraf" value="{{ $mcu->nama_petugas_paraf }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="colFormLabel" class="col-sm-4 col-form-label">Tanggal MCU</label>
                                        <div class="col-sm-8">
                                            <input disabled type="text" class="form-control" id="kd_registrasi" name="kd_registrasi" value="{{ $mcu->created_at->format('Y/m/d H:i') }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="colFormLabel" class="col-sm-4 col-form-label">Lokasi MCU</label>
                                        <div class="col-sm-8">
                                            <input disabled type="text" class="form-control" id="kd_registrasi" name="kd_registrasi" value="{{ $mcu->lokasi_mcu }}">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group row">
                                        <label for="colFormLabel" class="col-sm-4 col-form-label">Berat Badan</label>
                                        <div class="col-sm-8">
                                            <input disabled type="text" class="form-control" id="bb" name="bb" value="{{ $mcu->bb }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="colFormLabel" class="col-sm-4 col-form-label">Golongan Darah</label>
                                        <div class="col-sm-8">
                                            <input disabled type="text" class="form-control" id="goldar" name="goldar" value="{{ $mcu->goldar }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="colFormLabel" class="col-sm-4 col-form-label">Nilai HB</label>
                                        <div class="col-sm-8">
                                            <input disabled type="text" class="form-control" id="nilai_hb" name="nilai_hb" value="{{ $mcu->nilai_hb }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="colFormLabel" class="col-sm-4 col-form-label">HT</label>
                                        <div class="col-sm-8">
                                            <input disabled type="text" class="form-control" id="ht" name="ht" value="{{ $mcu->ht }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="colFormLabel" class="col-sm-4 col-form-label">Tekanan Darah</label>
                                        <div class="col-sm-8">
                                            <input disabled type="text" class="form-control" id="tekanan_darah" name="tekanan_darah" value="{{ $mcu->tekanan_darah }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="colFormLabel" class="col-sm-4 col-form-label">Status MCU</label>
                                        <div class="col-sm-8">
                                            <input disabled type="text" class="form-control" id="status_mcu" name="status_mcu" value="{{ $mcu->status_mcu }}">
                                        </div>
                                    </div>
                                    <div class="row mt-5">
                                        <div class="col">
                                            @if($mcu->status_mcu === "LOLOS")
                                                <a href="{{ route('admin.pendonor-proses', $mcu->id) }}" class="btn btn-success float-right">PROSES DONOR</a>
                                            @endif
                                </form>
                                            <form method="POST" action="">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger mr-2 float-right">Hapus</button>
                                            </form>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection