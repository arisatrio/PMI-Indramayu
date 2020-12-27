@extends('admin/layout/main')

@section('title', 'Pertanyaan dan Saran | Admin PMI')

@section('container')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 card shadow">
            <div class="card-body">
                <div class="row mb-4">
                    <div class="d-flex">
                        <h1 class="font-weight-bold">Pertanyaan dan Saran</h1>
                    </div>
                </div>
                <div class="row">
                    <div class=" col-md-2 nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Belum dibalas
                        </a>
                        <div class="bg-danger" style="height: 2px; width: 100%;"></div>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('admin.komunikasi') }}">Belum dibalas </a>
                            <a class="dropdown-item" href="{{ route('admin.komunikasi-arsip') }}">Sudah dibalas</a>
                        </div>
                    </div>
                    @if($jml != 0)
                    <div class="col-md-8">
                        <div class="alert alert-danger">Terdapat {{ $jml }} Saran dan Pertanyaan yang belum dibalas</div>
                    </div>
                    @endif
                </div>
                
                <hr>
                <div class="container">
                    <?php $no = 1;?>
                    @foreach($komunikasi as $data)
                    <a href="{{ route('admin.komunikasi-lihat', $data->id) }}" class="text-dark">
                        <div class="row">
                            <div class="col-sm-1">{{ $no++ }}</div>
                            <div class="col-sm-2"><p class="font-weight-bold text-truncate">{{ $data->nama }}</p></div>
                            <div class="col-sm-8"><div class="text-truncate"><b>{{ $data->tentang_komunikasi}} </b> <small>- {{ $data->isi_komunikasi }} </small></div></div>
                            <div class="col-sm-1"><b>{{ $data->created_at }}</b></div>
                        </div>
                    </a>
                    <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection