@extends('admin/layout/main')

@section('title', 'Edit-mcu | Admin PMI')

@section('container')
<div class="container-fluid">
    <div class="row">
        <div class="col mb-4">
            <div class="d-sm-flex">
                <a href="" class="text-muted">
                    <i class="fas fa-newspaper fa-2x mr-2"></i>
                </a>
                <h3 class="text-gray-800">Info MCU</h3>
            </div>
        </div>

        <div class="col-sm-12 card shadow">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-2">
                        <button class="btn btn-success mb-4" onclick="goBack()"><i class="fa fa-arrow-left mr-2"></i>Kembali</button>
                    </div>
                </div>

        <form method="POST" action="{{ route('admin.mcu-update', $mcu->id_mcu) }}" enctype="multipart/form-data">
                {{ csrf_field() }}



               <div class="row">
         <div class="col-md-8">
            <lable for="nama_petugas_hb" class="col-sm-2 col-form-label">Nama Petugas HB</lable>
            <input type="text" class="form-control mb-3 @error('nama_petugas_hb') is-invalid @enderror" id="nama_petugas_hb" name="nama_petugas_hb" value="$mcu->nama_petugas_hb" required="required"><br>
        </div>
    </div>

        <div class="form-group row">
            <lable for="nama_petugas_paraf" class="col-sm-2 col-form-label">Nama Petugas Paraf</lable>
            <input type="text" class="form-control mb-3 @error('nama_petugas_paraf') is-invalid @enderror" id="nama_petugas_paraf" name="nama_petugas_paraf" value="$mcu->nama_petugas_paraf" required="required"><br>
        </div>

        <div class="form-group row">
                <label for="id_muthowwif" class="col-sm-2 col-form-label">Nama Pendonor</label>
                        <select name="id_pendonor" id="id_pendonor" class="form-control">
                            <option value="">== Pilih Pendonor ==</option>
                            @foreach ($pendonor as $p)
                            <option value="{{ $p->id_pendonor }}">{{ $p->id_pendonor }}-{{ $p->nama_pendonor }}</option>
                            @endforeach
                        </select>
            </div>

        <div class="form-group row">
            <lable for="nilai_hb" class="col-sm-2 col-form-label">Nilai HB</lable>
            <input type="text" class="form-control mb-3 @error('nilai_hb') is-invalid @enderror" id="nilai_hb" name="nilai_hb" value="$mcu->nilai_hb" required="required"><br>
        </div>

        <div class="form-group row">
            <lable for="ht" class="col-sm-2 col-form-label">HT</lable>
            <input type="text" class="form-control mb-3 @error('ht') is-invalid @enderror" id="ht" name="ht" value="$mcu->ht" required="required"><br>
        </div>

        <div class="form-group row">
            <lable for="tekanan_darah" class="col-sm-2 col-form-label">Tekanan Darah</lable>
            <input type="text" class="form-control mb-3 @error('tekanan_darah') is-invalid @enderror" id="tekanan_darah" name="tekanan_darah" value="$mcu->tekanan_darah" required="required"><br>
        </div>

        <div class="form-group row">
            <lable for="bb" class="col-sm-2 col-form-label">Berat Badan</lable>
            <input type="text" class="form-control mb-3 @error('bb') is-invalid @enderror" id="bb" name="bb" value="$mcu->bb" required="required"><br>
        </div>

        <div class="form-group row">
            <lable for="no_kantongdarah" class="col-sm-2 col-form-label">No-Kantong Darah</lable>
            <input type="text" class="form-control mb-3 @error('no_kantongdarah') is-invalid @enderror" id="no_kantongdarah" name="no_kantongdarah" value="$mcu->no_kantongdarah" required="required"><br>
        </div>

        <div class="form-group row">
            <lable for="donorke" class="col-sm-2 col-form-label">Donor Ke-</lable>
            <input type="text" class="form-control mb-3 @error('donorke') is-invalid @enderror" id="donorke" name="donorke" value="$mcu->donorke" required="required"><br>
        </div>

        <div class="form-group row">
            <lable for="goldar" class="col-sm-2 col-form-label">Golongan Darah</lable>
            <select class="form-control" name="goldar" id="goldar" required id="gol_darah">
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

        <div class="form-group row">
        <lable for="tgl_donor" class="col-sm-2 col-form-label">Tanggal Donor </lable>
            <input type="date" class="form-control mb-3 @error('tgl_donor') is-invalid @enderror" id="tgl_donor" name="tgl_donor" value="$mcu->tgl_donor" required="required"><br>
        </div>

        <div class="form-group row">
            <lable for="status" class="col-sm-2 col-form-label">Status</lable>
            <select class="form-control" name="status" required id="status">
             <option value="{{ old('status') }}" selected disabled>--Status--</option>
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