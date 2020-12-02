@extends('user/layout/main')

@section('title', 'Detail Agenda | PMI Indramayu')

@section('content')
<div class="container">
    <div class="row mt-4 mb-4 pt-4 pb-4">

        <div class="col-sm-4">
            <div class="judul font-weight-bold" style="display: flex">
                <i class="fa fa-plus fa-2x mr-2" style="color: red; display: inline-block;"></i><h2>AGENDA</h2>
            </div>
            <div class="bg-dark mt-2 mb-2" style="height: 2px; opacity: 0.5;"></div>

            <nav class="nav flex-column">
                <a class="nav-link text-muted mb-2" href="{{ route('agenda') }}">
                    <i class="fa fa-angle-right mr-2"></i>Agenda
                </a>
                
            </nav>
        </div>
        <div class="col-sm-8 bg-transparent">
            <div class="collapsed" id="profil" >
                <h4>Donor Darah Kampus POLINDRA</h4>
                <div class="bg-danger mt-2 mb-2" style="height: 2px; width: 100%; opacity: 0.5;"></div>
                <img src="img/logo-pmi.png" class="card-img" alt="...">
                <p class="text-danger"></p>
                <p class="font-italic">Tempat : Kampus POLINDRA</p>
                <p class="font-italic">Alamat : Jl. Lohbener Lama No.8</p>
                <p class="font-italic">Waktu  : 08:00 - 12:00 WIB</p>
                <p class="font-italic">Ket : -</p>
                <div class="bg-dark mt-2 mb-2" style="height: 2px; width: 100%; opacity: 0.2;"></div>
            </div>
        </div>  
    </div>
</div>    
@endsection