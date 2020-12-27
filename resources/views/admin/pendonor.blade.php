@extends('admin/layout/main')

@section('title', 'Data Pendonor | Admin PMI')

@section('container')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 card shadow">
            <div class="card-body">
                <div class="row mb-4">
                    <div class="d-sm-flex">
                        <h1 class="font-weight-bold">Data Pendonor</h1>
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
                                <th scope="col">No Kantong Darah</th>
                                <th scope="col">NIK</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Status Donor</th>
                                <th scope="col" style="width:5%">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;?>
                                @foreach($pendonor as $data)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $data->no_kantong_darah }}</td>
                                    <td>{{ $data->registrasi->nik }}</td>
                                    <td>{{ $data->registrasi->nama }}</td>
                                    <td>
                                        @if($data->status_donor === "BLOK")
                                        <p class="bg-danger text-white text-center">
                                            {{ $data->status_donor }}
                                        </p>
                                        @elseif($data->status_donor === "CEK LAB")
                                        <p class="bg-warning text-white text-center">
                                            {{ $data->status_donor }}
                                        </p>
                                        @else
                                        <p class="bg-primary text-white text-center">
                                            {{ $data->status_donor }}
                                        </p>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.pendonor-detail', $data->id) }}" class="btn btn-outline-dark btn-sm ml-2" title="Ubah Status" data-toggle="tooltip">
                                            Edit
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