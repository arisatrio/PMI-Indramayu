@extends('admin/layout/main')

@section('title', 'Data Calon Pendonor | Admin PMI')

@section('container')
<div class="container-fluid">
    <div class="row">
        <div class="col mb-4">
            <div class="d-sm-flex">
                <a href="" class="text-muted">
                    <i class="fas fa-edit fa-2x mr-2"></i>
                </a>
                <h3 class="text-gray-800">Data Calon Pendonor</h3>
            </div>
        </div>
        <div class="col-md-12 card shadow">
            <div class="card-body">
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
                        <input type="hidden" value="{{ $mcu->id }}" name="id_registrasi">
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-4 col-form-label">NIK</label>
                            <div class="col-sm-8">
                                <input disabled type="text" class="form-control" id="NIK" name="NIK" value="{{ $mcu->registrasi->nik }}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-4 col-form-label">Nama</label>
                            <div class="col-sm-8">
                                <input disabled type="text" class="form-control" id="nama" name="nama" value="{{ $mcu->registrasi->nama }}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-4 col-form-label">No Kantong Darah</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="no_kantong_darah" name="no_kantong_darah" placeholder="No Kantong Darah" required>
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