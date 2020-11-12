@extends('user/layout/main')

@section('title', 'Komunikasi | PMI Indramayu')

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
            <div class="collapsed" id="tiga" >
            <h4>Formulir Komunikasi (Pertanyaan & Saran)</h4>
            <div class="bg-danger mt-2 mb-4" style="height: 2px; width: 83%; opacity: 0.5;"></div>
            <div class="form-group row">
                <label for="colFormLabel" class="col-sm-3 col-form-label">Nama </label>
                <div class="col-sm-9">
                <input type="text" class="form-control" id="nama" placeholder="Nama">
                </div>
            </div>
            <div class="form-group row">
                <label for="colFormLabel" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" id="email" placeholder="Email">
                </div>
            </div>
            <div class="form-group row">
                <label for="colFormLabel" class="col-sm-3 col-form-label">No. Tlp / HP</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" id="ntlph" placeholder="No. Tlp / HP">
                </div>
            </div>
            <div class="form-group row">
                <label for="colFormLabel" class="col-sm-3 col-form-label">Pertanyaan</label>
                <div class="col-sm-9">
                <textarea type="text" class="form-control" id="pertanyaan" placeholder="Pertanyaan"></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary col-md-3 float-right">Kirim Pertanyaan</button>
            </div>
            </form>
        </div>
    </div>
</div>

@endsection