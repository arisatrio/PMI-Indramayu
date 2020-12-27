@extends('admin/layout/main')

@section('title', 'Data MCU | Admin PMI')

@section('container')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 card shadow">
            <div class="card-body">
                <div class="row mb-4">
                    <div class="d-flex">
                        <h1 class="font-weight-bold">Data MCU</h1>
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
                    <div class="col-md-12">
                        <table class="table table-bordered table-hover">
                            <thead class="table-active">
                                <tr>
                                <th scope="col">No</th>
                                <th scope="col">Tanggal MCU</th>
                                <th scope="col">NIK</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Status MCU</th>
                                <th scope="col" style="width:5%">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;?>
                                @foreach($mcu as $data)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $data->created_at->format('Y/m/d H:i') }}</td>
                                    <td>{{ $data->registrasi->nik }}</td>
                                    <td>{{ $data->registrasi->nama }}</td>
                                    <td>
                                        @if($data->status_mcu === "LOLOS")
                                        <p class="bg-primary text-white text-center">
                                            {{ $data->status_mcu }}
                                        </p>
                                        @else
                                        <p class="bg-danger text-white text-center">
                                            {{ $data->status_mcu }}
                                        </p>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.mcu-detail', $data->id) }}" class="btn btn-outline-dark btn-sm ml-2" title="Lihat" data-toggle="tooltip">
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