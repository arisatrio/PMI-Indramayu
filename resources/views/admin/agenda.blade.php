@extends('admin/layout/main')

@section('title', 'Agenda | Admin PMI')

@section('container')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 card shadow">
            <div class="card-body">
                <div class="row mb-4">
                    <div class="d-flex">
                        <h1 class="font-weight-bold">Agenda</h1>
                    </div>
                    <div class="col">
                        <a href="{{ route('admin.agenda-tambah') }}" class="btn btn-success float-right mt-3">Tambah</a>
                    </div>
                </div>
                @if (session('messages'))
                    <div class="alert alert-success alert-dismissible">
                        {{ session('messages') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class="row">
                    <div class=" col-md-2 nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted" href="{{ route('admin.agenda') }}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Pengajuan Agenda
                        </a>
                        <div class="bg-danger" style="height: 2px; width: 120%;"></div>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('admin.agenda') }}">Pengajuan Agenda</a>
                            <a class="dropdown-item" href="{{ route('admin.agenda-jadwal') }}">Agenda</a>
                        </div>
                    </div>
                    @if($jml != 0)
                    <div class="col-md-8 ml-3">
                        <div class="alert alert-danger">Terdapat {{ $jml }} Pengajuan Agenda yang perlu ditinjau</div>
                    </div>
                    @endif
                </div>

                <hr>
                <div class="row">
                    <div class="col-md-12">
                        @if($agenda != null)
                        <table class="table table-bordered table-hover">
                            <thead class="table-active">
                                <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Institusi</th>
                                <th scope="col">Nama Kegiatan</th>
                                <th scope="col">Tanggal Kegiatan</th>
                                <th scope="col">Waktu</th>
                                <th scope="col" style="width:5%">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;?>
                                @foreach($agenda as $data)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $data->nama_institusi }}</td>
                                    <td>{{ $data->nama_kegiatan }}</td>
                                    <td>{{ $data->tgl_kegiatan->formatLocalized('%A, %d %B %Y') }}</td>
                                    <td>{{ $data->jam_mulai }} - {{ $data->jam_selesai}}</td>
                                    <td>
                                        <a href="{{ route('admin.agenda-detail', $data->id) }}" class="btn btn-outline-secondary btn-sm ml-2" title="Lihat" data-toggle="tooltip">
                                            Lihat
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