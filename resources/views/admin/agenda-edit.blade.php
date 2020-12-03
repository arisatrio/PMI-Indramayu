@extends('admin/layout/main')

@section('title', 'Detail Agenda | Admin PMI')

@section('container')
<div class="container-fluid">
    <div class="row">
        <div class="col mb-4">
            <div class="d-sm-flex">
                <a href="" class="text-muted">
                    <i class="fas fa-calendar-alt fa-2x mr-2"></i>
                </a>
                <h3 class="text-gray-800">Agenda</h3>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <a class="btn btn-success mb-4" href="{{ route('admin.agenda') }}"><i class="fa fa-arrow-left mr-2"></i>Kembali</a>
                            <form method="POST" action="{{ route('admin.agenda-hapus', $agenda->id) }}">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger mb-4 ml-2"><i class="fa fa-trash mr-2"></i>Hapus</button>
                            </form>
                        </div>
                        
                        <div class="row">
                            <table class="table table-bordered table-hover">
                                <tr>
                                    <th scope="col">Nama Institusi</th>
                                    <td>{{ $agenda->nama_institusi }}</td>
                                </tr>
                                <tr>
                                    <th scope="col">Alamat Institusi</th>
                                    <td>{{ $agenda->alamat_institusi }}</td>
                                </tr>
                                <tr>
                                    <th scope="col">Nama kegiatan</th>
                                    <td>{{ $agenda->nama_kegiatan }}</td>
                                </tr>
                                <tr>
                                    <th scope="col">Tanggal kegiatan</th>
                                    <td>{{ $agenda->tgl_kegiatan->formatLocalized('%A, %d %B %Y') }}</td>
                                </tr>
                                <tr>
                                    <th scope="col">Waktu</th>
                                    <td>{{ $agenda->jam_mulai }} - {{ $agenda->jam_selesai }}</td>
                                </tr>
                                <tr>
                                    <th scope="col">Alamat kegiatan</th>
                                    <td>{{ $agenda->alamat_kegiatan }}</td>
                                </tr>
                                <tr>
                                    <th scope="col">Kecamatan</th>
                                    <td>{{ $agenda->kecamatan->name }}</td>
                                </tr>
                                <tr>
                                    <th scope="col">Kelurahan</th>
                                    <td>{{ $agenda->kelurahan->name }}</td>
                                </tr>
                                <tr>
                                    <th scope="col">Nama Koordinator</th>
                                    <td>{{ $agenda->nama_koordinator }}</td>
                                </tr>
                                <tr>
                                    <th scope="col">No. Telepon Koordinator</th>
                                    <td>{{ $agenda->notlp_koordinator }}</td>
                                </tr>
                                <tr>
                                    <th scope="col">Perkiraan Jumlah Pendonor</th>
                                    <td>{{ $agenda->jml_pendonor }}</td>
                                </tr>
                                <tr>
                                    <th scope="col">Surat</th>
                                    <td><a href="{{ asset('img/agenda/surat/'. $agenda->surat) }}" target="_blank">Download</a></td>
                                </tr>
                            </table>
                        </div>
                        <div class="row justify-content-center mb-4">
                            <div class="col-6">
                                <img src="{{ asset('img/agenda/poster/'. $agenda->poster) }}" alt="..." class="img-thumbnail"> 
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col">
                                <a href="{{ route('admin.agenda-setuju', $agenda->id) }}" class="btn btn-success float-right">Setuju</a>
                                <a href="{{ route('admin.agenda-setuju', $agenda->id) }}" class="btn btn-danger mr-2  float-right">Tolak</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection