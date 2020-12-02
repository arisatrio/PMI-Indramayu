@extends('user/layout/main')

@section('title', 'Baca Berita | PMI Indramayu')

@section('content')
<div class="container">
    <div class="row mt-4 mb-4 pt-4 pb-4">
        <div class="col-sm-3">
            <div class="judul font-weight-bold" style="display: flex">
                <i class="far fa-newspaper fa-2x mr-2" style="color: red; display: inline-block;"></i><h5>BERITA TERBARU</h5>
            </div>
            <div class="bg-dark mt-2 mb-2" style="height: 2px; opacity: 0.5;"></div>

            <nav class="nav flex-column">
                <?php $no = 1;?>
                @foreach($indexBerita as $data)
                <a class="nav-link"  href="{{ url('berita/read', $data->slug) }}" >
                    <div class="row">
                        <div class="text-muted">
                            <h6>{{ $no++ }}</h6>
                        </div>
                        <div class="col-sm-11">
                            <p>{{ $data->judul_berita }}</p>
                        </div>
                    </div>
                </a>
                @endforeach
                <div class="bg-secondary" style="height: 1px; opacity: 0.2;"></div>
            </nav>
        </div>
        <div class="col-sm-9">
            @foreach($berita as $data)
            <div class="row text-center">
                <div class="col-sm-12">
                    <h1 class="font-weight-bold mb-2">{{ $data->judul_berita }}</h1>
                </div>
                <div class="col-sm-12">
                    <small class="text-muted">{{ $data->created_at->diffForHumans() }}</small>
                </div>
                <div class="col-sm-12">
                    <small class="text-muted">oleh <b>{{ $data->user->name }}</b></small>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-12">
                    <img src="{{ asset('img/berita/'. $data->gambar_berita) }}" alt="..."  width="100%" height="370px"> 
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-12">
                    <p>{!! html_entity_decode($data->isi_berita) !!}</p>
                </div>
            </div>
            
            
            @endforeach
            <hr>
        </div>
    </div>
</div>


@endsection