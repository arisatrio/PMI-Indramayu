@extends('admin/layout/main')

@section('title', 'Info MCU | Admin PMI')

@section('container')
<div class="container-fluid">
    <div class="row">
        <div class="col mb-4">
            <div class="d-sm-flex">
                <a href="{{ url('/mcu') }}"" class="text-muted">
                    <i class="fas fa-newspaper fa-2x mr-2"></i>
                </a>
                <h3 class="text-gray-800">MCU</h3>
            </div>
        </div>
        <div class="col-sm-12 card shadow">
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col-sm-2">
                        <a href="{{ route('admin.mcu-tambah-mcu') }}" class="btn btn-danger">
                            <i class="fas fa-pen mr-2"></i>
                            Tambah Mcu
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        @if($mcu != null)
                        <table class="table table-bordered table-hover">
                            <thead class="table-active">
                                <tr>
                                <th scope="col" style="width:10%">No</th>
                                <th scope="col">ID MCU</th>
                                <th scope="col">Nama Petugas HB</th>
                                <th scope="col">Nama Petugas Paraf</th>
                                <th scope="col">ID Pendonor</th>
                                <th scope="col">Nilai HB</th>
                                <th scope="col">HT</th>
                                <th scope="col">Tekanan Darah</th>
                                <th scope="col">Berat Badan</th>
                                <th scope="col">No-Kantong Darah</th>
                                <th scope="col">Donor Ke</th>
                                <th scope="col">Golongan Darah</th>
                                <th scope="col">Tanggal Donor</th>
                                <th scope="col">Status</th>    
                                <th scope="col" >Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;?>
                                @foreach($mcu as $p)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $p->id_mcu }}</td>
                                    <td>{{ $p->nama_petugas_hb }}</td>
                                    <td>{{ $p->nama_petugas_paraf }}</td>
                                    <td>{{ $p->id_pendonor}}</td>
                                    <td>{{ $p->nilai_hb }}</td>
                                    <td>{{ $p->ht }}</td>
                                    <td>{{ $p->tekanan_darah }}</td>
                                    <td>{{ $p->bb}}</td>
                                    <td>{{ $p->no_kantongdarah}}</td>
                                    <td>{{ $p->donorke}}</td>
                                    <td>{{ $p->goldar }}</td>
                                    <td>{{ $p->tgl_donor }}</td>
                                    <td>{{ $p->status }}</td>

                                    <td>
                                        <a href="{{ route('admin.mcu-edit-mcu', $p->id_mcu) }}" class="btn btn-success btn-sm mr-2" title="Edit" data-toggle="tooltip">
                                            <i class="fa fa-edit" aria-hidden="true"></i>
                                        </a>
                                        
                                        <a href="{{ route('admin.mcu-destroy', $p->id_mcu) }}" class="btn btn-danger btn-sm mr-2" title="Hapus" data-toggle="tooltip">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @endif
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
</div>
@endsection