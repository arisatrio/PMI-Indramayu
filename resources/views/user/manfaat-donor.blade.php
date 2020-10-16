@extends('user/layout/main')

@section('title', 'Manfaat Donor | PMI Indramayu')

@section('content')
<div class="container">
    <div class="row mt-4 mb-4 pt-4 pb-4">

        <div class="col-sm-4">
            <div class="judul font-weight-bold" style="display: flex">
                <i class="fa fa-plus fa-2x mr-2" style="color: red; display: inline-block;"></i><h2>JUDUL MENU</h2>
            </div>
            <div class="bg-dark mt-2 mb-2" style="height: 2px; opacity: 0.5;"></div>

            <nav class="nav flex-column">
                <a class="nav-link text-muted mb-2" data-toggle="collapse" href="#profil" role="button" aria-expanded="false" aria-controls="profil">
                    <i class="fa fa-angle-right mr-2"></i>SUB MENU
                </a>
                <div class="bg-secondary" style="height: 1px; opacity: 0.2;"></div>
            </nav>

        </div>
        <div class="col0-sm-8">

        </div>
    </div> 
</div>
@endsection