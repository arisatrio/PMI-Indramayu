@extends('user/layout/main')

@section('title', 'Berita | PMI Indramayu')

@section('content')
<div class="container">
    <div class="row mt-4 mb-4 pt-4 pb-4">
        <div class="col-sm-4">
            <div class="judul font-weight-bold" style="display: flex">
                <i class="far fa-newspaper fa-2x mr-2" style="color: red; display: inline-block;"></i><h3>BERITA TERBARU</h3>
            </div>
            <div class="bg-dark mt-2 mb-2" style="height: 2px; opacity: 0.5;"></div>

            <nav class="nav flex-column">
                <a class="nav-link  mb-2"  href="" >
                    <div class="row">
                        <div class="col-1 text-muted">
                            <h6>1</h6>
                        </div>
                        <div class="col-10 text-black ">
                            <h6 > Berita Terkini terbaru terupdate terpopuler terbagus</h6>
                        </div>
                    </div>
                </a>
                <div class="bg-secondary" style="height: 1px; opacity: 0.2;"></div>
            </nav>
        </div>
        <div class="col-sm-8">
            <img src="img/donor4.png" class="card-img" alt="..." style="hight:50px; width:200px;"> 
        </div>
    </div>
</div>


@endsection