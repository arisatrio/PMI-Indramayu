@extends('admin/layout/main')

@section('title', ' Addpendonor | Admin PMI')

@section('container')
<div class="container-fluid">
    <div class="row">
        <div class="col mb-4">
            <div class="d-sm-flex">
                <a href="" class="text-muted">
                    <i class="fas fa-newspaper fa-2x mr-2">Info Pendonor</i>
                </a>
                <h3 class="text-gray-800"></h3>
            </div>
        </div>
        <div class="col-sm-12 card shadow">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-2">
                        <button class="btn btn-success mb-4" onclick="goBack()"><i class="fa fa-arrow-left mr-2"></i>Kembali</button>
                    </div>
                </div>
                <form action="{{ route('admin.pendonor-proses') }}"  method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="row">
                    <div class="col-md-8">
                        <input type="text" class="form-control mb-3 @error('nama_pendonor') is-invalid @enderror" id="nama_pendonor" name="nama_pendonor" placeholder="Masukkan Nama Pendonor">
                        @error('nama_pendonor')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8">
                        <input type="text" class="form-control mb-3 @error('alamat') is-invalid @enderror" id="alamat" name="alamat" placeholder="Masukkan Alamat">
                        @error('alamat')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8">
                        <input type="text" class="form-control mb-3 @error('notelp') is-invalid @enderror" id="notelp" name="notelp" placeholder="Masukkan No-Telepon">
                        @error('notelp')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <select class="form-control" name="goldar" id="goldar" required>
                                                <option value="{{ old('goldar') }}" selected disabled>--Golongan Darah--</option>
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
                                </div>

                             <div class="row">
                    <div class="col-md-8">
                        <input type="date" class="form-control mb-3 @error('tgl_kembalidonor') is-invalid @enderror" id="tgl_kembalidonor" name="tgl_kembalidonor" placeholder="Masukkan Tanggal Kembali Donor">
                        @error('tgl_kembalidonor')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>    

                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <select class="form-control" name="status" required id="status">
                                                <option value="{{ old('status') }}" selected disabled>--Status--</option>
                                                <option value="Lolos">Lolos</option>
                                                <option value="Tidak Lolos">Tidak Lolos</option>
                                            </select>
                                        </div>
                                    </div>

                
                
                <div class="row float-right">
                    <div class="col-md-2">
                        <input type="submit"  value="Add" class="btn btn-primary">
                    </div>
                </div>
                </form>
                

                <hr>
            </div>
        </div>
    </div>
</div>
@endsection