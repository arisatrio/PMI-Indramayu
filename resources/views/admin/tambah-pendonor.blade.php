@extends('admin/layout/main')

@section('title', ' tambah-pendonor | Admin PMI')

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
			@if(count($errors) > 0)
			<div class="alert alert-danger">
			@foreach ($errors->all() as $error)
			{{ $error }}
			@endforeach
			</div>
			@endif
	<form action="{{ route('admin.pendonor-proses') }}" method="POST" class="table table-striped table-hover table-sm table-bordered">
 	@csrf

 	<div class="row">
         <div class="col-md-8">
			<lable for="nama_pendonor" class="col-sm-2 col-form-label">Nama Pendonor</lable>
 			<input type="text" class="form-control mb-3 @error('nama_pendonor') is-invalid @enderror" id="nama_pendonor" name="nama_pendonor" placeholder="Masukkan Nama Pendonor"><br>
		</div>
	</div>

		<div class="form-group row">
			<lable for="alamat" class="col-sm-2 col-form-label">Alamat</lable>
			<input type="text" class="form-control mb-3 @error('alamat') is-invalid @enderror" id="alamat" name="alamat" placeholder="Masukkan Alamat"><br>
		</div>

		<div class="form-group row">
			<lable for="notelp" class="col-sm-2 col-form-label">No-telepon</lable>
 			<input type="text" class="form-control mb-3 @error('notelp') is-invalid @enderror" id="notelp" name="notelp" placeholder="Masukkan No-Telepon"><br>
		</div>

		<div class="form-group row">
			<lable for="gol_darah" class="col-sm-2 col-form-label">Golongan Darah</lable>
 			<select class="form-control" name="gol_darah" id="gol_darah" required id="gol_darah">
            <option value="{{ old('gol_darah') }}" selected disabled>--Golongan Darah--</option>
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

 		<div class="form-group row">
		<lable for="tgl_kembalidonor" class="col-sm-2 col-form-label">Tanggal Donor Kembali</lable>
 			<input type="date" class="form-control mb-3 @error('tgl_kembalidonor') is-invalid @enderror" id="tgl_kembalidonor" name="tgl_kembalidonor" placeholder="Masukkan Tanggal Kembali Donor"><br>
 		</div>

 		<div class="form-group row">
			<lable for="status" class="col-sm-2 col-form-label">Status</lable>
 			<select class="form-control" name="status" required id="status">
             <option value="{{ old('status') }}" selected disabled>--Status--</option>
                                				<option value="Lolos">Lolos</option>
                                                <option value="Tidak Lolos">Tidak Lolos</option>
          </select>
 		</div>

		<input type="submit"  value="Add" class="btn btn-primary">
	</form>
</br>
</br>
</br>
@stop