@extends('admin/layout/main')

@section('title', 'Pengajuan KTA Baru | ADMIN DKC')

@section('container')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Pengajuan KTA Baru</h1>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">
                        Tabel Pengajuan KTA Baru
                    </h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <form action="/admin/pengajuan-kta-baru/cari" method="GET">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Cari..." aria-label="Search" aria-describedby="basic-addon2" name="cari">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-4">
                            <a class="btn btn-secondary btn-md ml-0" href="{{ url('/admin/pengajuan-kta-baru') }}">
                                <i class="fas fa-times fa-sm"></i>
                            </a>
                        </div>
                        <div class="col-md-4 float-right">
                            <a href="{{ url('/admin/riwayat-pengajuan-kta-baru') }}" class="btn btn-primary btn-md mr-2 float-right">
                                <i class="fas fa-table"></i>
                                Riwayat Pengajuan
                            </a>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <table class="table table-bordered table-hover">
                            <thead class="table-active">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Kwarran</th>
                                    <th scope="col">No. Urut</th>
                                    <th scope="col">No. Telepon</th>
                                    <th scope="col" style="width:15%">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $no = 1;?>
                                @foreach($kta as $kartu)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $kartu->nama }}</td>
                                    <td>{{ $kartu->kwarran }}</td>
                                    <td>{{ $kartu->no_urut }}</td>
                                    
                                    <td>{{ $kartu->notelp }}</td>
                                    <td>
                                        <button type="button" class="btn btn-dark btn-sm mr-2" data-toggle="modal" data-target="#exampleModal" title="Lihat" data-toggle="tooltip">
                                            <i class="fa fa-eye fa-sm"></i> 
                                        </button>
                                        <a href="/admin/pengajuan-kta-baru/proses/{{ $kartu->id }}" class="btn btn-success btn-sm mr-2" title="Proses" data-toggle="tooltip">
                                            <i class="fa fa-check fa-sm"></i>
                                        </a>
                                        <a href="/admin/pengajuan-kta-baru/tolak/{{ $kartu->id }}" class="btn btn-danger btn-sm mr-2" title="Tolak" data-toggle="tooltip">
                                            <i class="fa fa-times fa-sm"></i>
                                        </a>
                                    </td>
                                </tr>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Pengajuan KTA Baru</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">No. Kwarran</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" readonly placeholder="{{$kartu->no_kwarran}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">No. Gudep</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" readonly placeholder="{{$kartu->no_gudep}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">No. Urut</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" readonly placeholder="{{$kartu->no_urut}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Nama</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" readonly placeholder="{{$kartu->nama}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">TTL</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" readonly  placeholder="{{ $kartu->ttl }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" readonly  placeholder="{{ $kartu->jenkel }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Gol. Darah</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" readonly  placeholder="{{ $kartu->goldar }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Agama</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" readonly  placeholder="{{ $kartu->agama }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">No. Telepon</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" readonly  placeholder="{{ $kartu->notelp }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Jabatan</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" readonly  placeholder="{{ $kartu->jabatan }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Pangkalan</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" readonly  placeholder="{{ $kartu->pangkalan }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Kwarran</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" readonly  placeholder="{{ $kartu->kwarran }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label"></label>
                                                        <div class="col-sm-9 ">
                                                            <img src="{{ asset('img/kta/'. $kartu->kta_foto) }}">
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <a href="/admin/pengajuan-kta-baru/proses/{{ $kartu->id }}" class="btn btn-success">Proses</a>
                                                <a href="/admin/pengajuan-kta-baru/tolak/{{ $kartu->id }}" class="btn btn-danger">Tolak</a>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
</div>


@endsection