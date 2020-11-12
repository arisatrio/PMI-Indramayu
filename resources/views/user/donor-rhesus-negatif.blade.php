@extends('user/layout/main')

@section('title', 'Donor Rhesus Negatif | PMI Indramayu')

@section('content')
<div class="container">
    <div class="row mt-4 mb-4 pt-4 pb-4">
        <div class="col-sm-4">
            <div class="judul font-weight-bold" style="display: flex">
                <i class="icon-pencil fa-2x mr-2" style="color: red; display: inline-block;"></i><h2>FORMULIR</h2>
            </div>
            <div class="bg-dark mt-2 mb-2" style="height: 2px; opacity: 0.5;"></div>

            <nav class="nav flex-column">
                <a class="nav-link text-muted mb-2"  href="{{ route('pengajuan-event-donor') }}" >
                    <i class="fa fa-angle-right mr-2"></i>Formulir Pengajuan Event Donor Darah
                </a>
                <div class="bg-secondary" style="height: 1px; opacity: 0.2;"></div>
                <a class="nav-link text-muted mb-2"  href="{{ route('registrasi-donor') }}" >
                    <i class="fa fa-angle-right mr-2"></i>Formulir Registrasi Donor
                </a>
                <div class="bg-secondary" style="height: 1px; opacity: 0.2;"></div>
                <a class="nav-link text-muted mb-2"  href="{{ route('donor-rhesus-negatif') }}" >
                    <i class="fa fa-angle-right mr-2"></i>Formulir Donor Rhesus Negatif
                </a>
                <div class="bg-secondary" style="height: 1px; opacity: 0.2;"></div>
                <div class="bg-secondary" style="height: 1px; opacity: 0.2;"></div>
                <a class="nav-link text-muted mb-2"  href="{{ route('komunikasi') }}" >
                    <i class="fa fa-angle-right mr-2"></i>Formulir Komunikasi (Pertanyaan & Saran)
                </a>
                <div class="bg-secondary" style="height: 1px; opacity: 0.2;"></div>
            </nav>
        </div>
            <div class="col-sm-8">
                <form>
                    <h4>Formulir Rhesus Negatif </h4>
                    <div class="bg-danger mt-2 mb-4" style="height: 2px; width: 83%; opacity: 0.5;"></div>
                </form>
            </div>
    </div>
</div>
@endsection