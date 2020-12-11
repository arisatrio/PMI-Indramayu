@extends('admin/layout/main')

@section('title', 'Info Pendonor | Admin PMI')

@section('container')
<div class="container-fluid">
    <div class="row">
        <div class="col mb-4">
            <div class="d-sm-flex">
                <a href="{{ url('/pendonor') }}"" class="text-muted">
                    <i class="fas fa-newspaper fa-2x mr-2"></i>
                </a>
                <h3 class="text-gray-800">Pendonor</h3>
            </div>
        </div>
        <div class="col-sm-12 card shadow">
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col-sm-2">
                        <a href="{{ route('admin.pendonor-addpendonor') }}" class="btn btn-danger">
                            <i class="fas fa-pen mr-2"></i>
                            Tambah Pendonor
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        @if($pendonor != null)
                        <table class="table table-bordered table-hover">
                            <thead class="table-active">
                                <tr>
                                <th scope="col" style="width:10%">No</th>
                                <th scope="col">ID Pendonor</th>
                                <th scope="col">Nama Pendonor</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">No-Telepon</th>
                                <th scope="col">Golongan Darah</th>
                                <th scope="col">Tanggal Kembali Donor</th>
                                <th scope="col">Status</th>
                                
                                <th scope="col" style="width:15%">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;?>
                                @foreach($pendonor as $p)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $p->id_pendonor }}</td>
                                    <td>{{ $p->nama_pendonor }}</td>
                                    <td>{{ $p->alamat }}</td>
                                    <td>{{ $p->notelp}}</td>
                                    <td>{{ $p->gol_darah }}</td>
                                    <td>{{ $p->tgl_kembalidonor }}</td>
                                    <td>{{ $p->status }}</td>

                                    <td>
                                        <a href="{{ route('admin.pendonor-editpendonor', $p->id_pendonor) }}" class="btn btn-success btn-sm mr-2" title="Edit" data-toggle="tooltip">
                                            <i class="fa fa-edit" aria-hidden="true"></i>
                                        </a>
                                        
                                        <a href="{{ route('admin.pendonor-destroy', $p->id_pendonor) }}" class="btn btn-danger btn-sm mr-2" title="Hapus" data-toggle="tooltip">
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