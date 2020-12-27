@extends('admin/layout/main')

@section('title', 'Data Registrasi Donor | Admin PMI')

@section('container')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 card shadow">
            <div class="card-body">
                <div class="row mb-4">
                    <div class="d-flex">
                        <h1 class="font-weight-bold">Data Registrasi</h1>
                    </div>
                    <div class="col">
                        <a href="{{ route('registrasi-donor') }}" class="btn btn-success float-right mt-2" target="_blank">Tambah</a>
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
                @if($registrasi->count() != null)
                <div class="alert alert-danger">
                    <div>Terdapat <b>{{ $registrasi->count() }}</b> registrasi baru yang perlu diproses !</div>
                </div>
                @endif
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered table-hover">
                            <thead class="table-active">
                                <tr>
                                <th scope="col">No</th>
                                <th scope="col">Kode Registrasi</th>
                                <th scope="col">NIK</th>
                                <th scope="col">Nama</th>
                                <th scope="col" style="width:5%">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;?>
                                @foreach($registrasi as $data)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $data->kd_registrasi }}</td>
                                    <td>{{ $data->nik }}</td>
                                    <td>{{ $data->nama }}</td>
                                    <td>
                                        <a href="{{ route('admin.registrasi-detail', $data->id) }}" class="btn btn-outline-dark btn-sm ml-2" title="Lihat" data-toggle="tooltip">
                                            Lihat
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
</div>
@endsection