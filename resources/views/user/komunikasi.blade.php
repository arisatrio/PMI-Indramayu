@extends('user/layout/main')

@section('title', 'Komunikasi | PMI Indramayu')

@section('content')
<div class="container">
    <div class="row mt-4 mb-4 pt-4 pb-4">
        <div class="col-sm-4">
            <div class="judul font-weight-bold" style="display: flex">
                <i class="fa fa-plus fa-2x mr-2" style="color: red; display: inline-block;"></i><h2>FORMULIR</h2>
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
            <form method="POST" action="/komunikasi">
                @csrf
                <div class="collapsed" id="tiga">
                <h4>Kirim Pertanyaan atau Saran</h4>
                <div class="bg-danger mt-2 mb-4" style="height: 2px; width: 83%; opacity: 0.5;"></div>
                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-3 col-form-label">Nama Anda</label>
                    <div class="col-sm-9">
                        <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Nama">
                        @error('nama')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-3 col-form-label">Perihal</label>
                    <div class="col-sm-9">
                        <input type="text" name="tentang_komunikasi" class="form-control @error('tentang_komunikasi') is-invalid @enderror" id="tentang_komunikasi" placeholder="Perihal">
                        @error('tentang_komunikas')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-3 col-form-label">Pertanyaan atau Saran</label>
                    <div class="col-sm-9">
                        <textarea type="text" name="isi_komunikasi" rows="10" class="form-control @error('isi_komunikasi') is-invalid @enderror" id="isi_komunikasi" placeholder="Tulis Pertanyaan atau Saran Anda..."></textarea>
                        @error('isi_komunikasi')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary col-md-2 float-right">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection