@extends('user/layout/main')

@section('title', 'Berita | PMI Indramayu')

@section('content')
<div class="container">
    <div class="row mt-4 mb-4 pt-4 pb-4">
        <div class="col-sm-3">
            <div class="judul font-weight-bold" style="display: flex">
                <i class="far fa-newspaper fa-2x mr-2" style="color: red; display: inline-block;"></i><h4>BERITA TERBARU</h4>
            </div>
            <div class="bg-dark mt-2 mb-2" style="height: 2px; opacity: 0.5;"></div>

            <nav class="nav flex-column">
                <?php $no = 1;?>
                @foreach($berita as $data)
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
            <hr>
            @foreach($berita as $data)
            <a href="{{ url('berita/read', $data->slug) }}">
                <div class="row" style="height: 180px">
                    <div class="col-sm-4">
                        <img src="{{ asset('img/berita/'. $data->gambar_berita) }}" class="img-thumbnail" alt="..." style="height:150px; width:200px;"> 
                    </div>
                    <div class="col-sm-8">
                        <h5 class="text-">{{ $data->judul_berita }}</h5>
                        <small class="text-muted"><b>{{ $data->user->name }}</b> | {{ $data->created_at->diffForHumans() }}</small>
                    </div>
                </div>
            </a>
            <hr>
            @endforeach            
        </div>
    </div>
</div>


@endsection