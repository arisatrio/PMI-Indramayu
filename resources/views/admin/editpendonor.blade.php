@extends('admin/layout/main')

@section('title', 'Edit-Pendonor | Admin PMI')

@section('container')
<div class="container-fluid">
    <div class="row">
        <div class="col mb-4">
            <div class="d-sm-flex">
                <a href="" class="text-muted">
                    <i class="fas fa-newspaper fa-2x mr-2"></i>
                </a>
                <h3 class="text-gray-800">Info Pendonor</h3>
            </div>
        </div>

        <div class="col-sm-12 card shadow">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-2">
                        <button class="btn btn-success mb-4" onclick="goBack()"><i class="fa fa-arrow-left mr-2"></i>Kembali</button>
                    </div>
                </div>

        <form method="POST" action="{{ route('admin.pendonor-update', $pendonor->id_pendonor) }}" enctype="multipart/form-data">
                {{ csrf_field() }}



                <div class="row">
                    <div class="col-md-8">
                 <lable for="nama_pendonor" class="col-sm-2 col-form-label">Nama Pendonor</lable>
                 <input type="text" class="form-control mb-3 @error('nama_pendonor') is-invalid @enderror" id="nama_pendonor" name="nama_pendonor" required="required" value="{{ $pendonor->nama_pendonor }}"><br>
                </div>    
            </div>


                <div class="row">
                    <div class="col-md-8">
                 <lable for="alamat" class="col-sm-2 col-form-label">Alamat</lable>
                <input type="text" class="form-control mb-3 @error('alamat') is-invalid @enderror" id="alamat" name="alamat" required="required" value="{{ $pendonor->alamat }}"><br>
                    </div>
                </div>

                
                <div class="row">
                    <div class="col-md-8">
                <lable for="notelp" class="col-sm-2 col-form-label">No-Telepon</lable>
            <input type="text" class="form-control mb-3 @error('notelp') is-invalid @enderror" id="notelp" name="notelp" required="required" value="{{ $pendonor->notelp }}"><br>
                    </div>
                </div>
                
            <div class="row">
            <lable for="gol_darah" class="col-sm-2 col-form-label">Golongan Darah</lable>
        <select class="form-control" name="gol_darah" id="gol_darah" required="required" id="gol_darah">
        <option value="{{ $pendonor->gol_darah }}" selected disabled>--Golongan Darah--</option>
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
                


                <div class="row">
                    <lable for="tgl_kembalidonor" class="col-sm-2 col-form-label">Tanggal</lable>
                <input type="date" class="form-control mb-3 @error('tgl_kembalidonor') is-invalid @enderror" id="tgl_kembalidonor" name="tgl_kembalidonor" required="required" value="{{ $pendonor->tgl_kembalidonor }}"><br>
                    </div>
                


                <div class="row">
                    <lable for="status" class="col-sm-2 col-form-label">Status</lable>
                <select class="form-control" name="status" required id="status">
             <option value="{{ $pendonor->status }}" selected disabled>--Status--</option>
                                                <option value="Lolos">Lolos</option>
                                                <option value="Tidak Lolos">Tidak Lolos</option>
                </select>
                    </div>
                
                        
                
                        <button class="btn btn-md btn-primary mt-4" type="submit">
                           <input type="submit"  value="Simpan" class="btn btn-primary">
                        </button>
                    </div>
                </div>
                </form>
                

                <hr>
            </div>
        </div>
    </div>
</div>
@endsection