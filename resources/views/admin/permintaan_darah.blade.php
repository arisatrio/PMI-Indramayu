@extends('admin/layout/main')

@section('title', 'Permintaan- Darah | ADMIN')

@section('container')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Permintaan Darah Baru</h1>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">
                        Tabel Permintaan Darah
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
                            <a class="btn btn-secondary btn-md ml-0" href="{{ url('/admin/permintaan-darah') }}">
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
                                    <th scope="col">Nama Rumah Sakit</th>
                                    <th scope="col">Nama Pasien</th>
                                    <th scope="col">Nama Petugas</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Jenis Darah</th>
                                    <th scope="col">Golongan Darah</th>
                                    <th scope="col">Rhesus</th>
                                    <th scope="col">Jumlah</th>
                                    <th scope="col">File</th>
                                    <th scope="col" style="width:15%">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $no = 1;?>
                                @foreach($permintaan_darah as $p)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $p->nama_rs }}</td>
                                    <td>{{ $p->nama_pasien }}</td>
                                    <td>{{ $p->nama_petugas }}</td>
                                    <td>{{ $p->tgl }}</td>
                                    <td>{{ $p->jenis_darah }}</td>
                                    <td>{{ $p->gol_darah }}</td>
                                    <td>{{ $p->rhesus }}</td>
                                    <td>{{ $p->jumlah }}</td>
                                     <td><img width="150px" src="{{ url('/uploads/file/'.$p->file) }}"></td> 

                                    <td>
                                        <button type="button" class="btn btn-dark btn-sm mr-2" data-toggle="modal" data-target="#exampleModal" title="Lihat" data-toggle="tooltip">
                                            <i class="fa fa-eye fa-sm"></i> 
                                        </button>
                                        <a href="/admin/pengajuan-kta-baru/proses/{{ $p->id }}" class="btn btn-success btn-sm mr-2" title="Proses" data-toggle="tooltip">
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
                                                <h5 class="modal-title" id="exampleModalLabel">Pengajuan Permintaan Darah</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Nama Rumah Sakit</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" readonly placeholder="{{$p->nama_rs}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Nama Pasien</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" readonly placeholder="{{$p->nama_pasien}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Nama Petugas</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" readonly placeholder="{{$p->nama_petugas}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Tanggal</label>
                                                        <div class="col-sm-9">
                                                            <input type="date" class="form-control" readonly placeholder="{{$p->tgl}}">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Jenis Darah</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" readonly  placeholder="{{ $p->jenis_darah }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Golongan Darah</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" readonly  placeholder="{{ $p->gol_darah }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Rhesus</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" readonly  placeholder="{{ $p->rhesus }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Jumlah</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" readonly  placeholder="{{ $p->jumlah }}">
                                                        </div>
                                                    </div>
                                                    
                                                    <!---<div class="form-group row">
                                                        <label class="col-sm-3 col-form-label"></label>
                                                        <div class="col-sm-9 ">
                                                            <img src="{{ asset('img/kta/'. $kartu->kta_foto) }}">
                                                        </div>
                                                    </div>--->
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <a href="/admin/permintaan-darah/proses/{{ $kartu->id }}" class="btn btn-success">Edit</a>
                                                <a href="/admin/permintaan-darah/destroy/{{ $kartu->id }}" class="btn btn-danger">Hapus</a>
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