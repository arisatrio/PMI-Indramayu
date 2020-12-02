@extends('user/layout/main')

@section('title', 'Permintaan Darah | PMI Indramayu')

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
                <a class="nav-link text-muted mb-2"  href="{{ route('addmintadarah') }}" >
                    <i class="fa fa-angle-right mr-2"></i>Formulir Permintaan Darah
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
                    <h4>Formulir Permintaan Darah</h4>
                    <div class="bg-danger mt-2 mb-4" style="height: 2px; width: 83%; opacity: 0.5;"></div>
                     <div class="card-body">
                        <hr>
                            @if(session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session()->get('message') }}
                                </div>
                            @endif
                            <form method="POST" action="{{ url('/permintaan-darah/store') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" value="{{ old('nama_rs') }}" name="nama_rs" id="nama_rs" placeholder="Nama Rumah Sakit" required>
                                        </div>   
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" value="{{ old('nama_pasien') }}" name="nama_pasien" id="nama_pasien" placeholder="Nama Pasien" required>
                                        </div>   
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" value="{{ old('nama_petugas') }}" name="nama_petugas" id="nama_petugas" placeholder="Nama Petugas" required>
                                        </div>   
                                    </div>
                                    @if ($errors->has('nama_rs'))
                                    <span class="alert alert-danger ml-3" role="alert">
                                        <strong>{{ $errors->first('nama_rs') }}</strong>
                                    </span>
                                    @endif
                                    @if ($errors->has('nama_pasien'))
                                    <span class="alert alert-danger ml-3" role="alert">
                                        <strong>{{ $errors->first('nama_pasien') }}</strong>
                                    </span>
                                    @endif
                                    @if ($errors->has('nama_petugas'))
                                    <span class="alert alert-danger ml-3" role="alert">
                                        <strong>{{ $errors->first('nama_petugas') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <input type="date" class="form-control" value="{{ old('tgl') }}" name="tgl" id="tgl" placeholder="Tanggal" required>
                                        </div>   
                                    </div>
                                    @if ($errors->has('tgl'))
                                    <span class="alert alert-danger ml-3" role="alert">
                                        <strong>{{ $errors->first('tgl') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <select class="form-control" name="jenis_darah" required id="jenkel">
                                                <option value="{{ old('jenis_darah') }}" selected disabled>--Jenis Darah--</option>
                                                <option value="Trombosit">TC</option>
                                                <option value="Plasma cel">LP</option>
                                                <option value="Sel Darah Merah Pekat">PRC</option>
                                                <option value="Sel Darah Merah Pekat Cuci">WPRC</option>
                                                <option value="Cryoprecipitate">CR</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <select class="form-control" name="goldar" id="goldar" required>
                                                <option value="{{ old('goldar') }}" selected disabled>--Golongan Darah--</option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="O">O</option>
                                                <option value="AB">AB</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <select class="form-control" name="rhesus" required id="rhesus">
                                                <option value="{{ old('rhesus') }}" selected disabled>--Rhesus--</option>
                                                <option value="Negatif">Negatif</option>
                                                <option value="Positif">Positif</option>
                                            </select>
                                        </div>
                                    </div>
                                
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <input type="text" class="form-control" value="{{ old('jumlah') }}"  name="jumlah" id="jumlah" placeholder="Jumlah">
                                        </div>
                                    </div>
                                    @if ($errors->has('jumlah'))
                                    <span class="alert alert-danger ml-3" role="alert">
                                        <strong>{{ $errors->first('jumlah') }}</strong>
                                    </span>
                                    @endif
                                </div>
                        
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" value="{{ old('file') }}" id="file" name="file">
                                                <label class="custom-file-label" for="file">Masukkan Surat Pengantar</label>
                                            </div>
                                            <small id="passwordHelpBlock" class="form-text text-muted">
                                                *ukuran file harus kurang dari 10000mb
                                            </small>
                                            @if ($errors->has('file'))
                                            <span class="alert alert-danger ml-3" role="alert">
                                                <strong>{{ $errors->first('file') }}</strong>
                                            </span>
                                            @endif
                                        </div>

                                        <div class="col-sm-5">
                <input type="hidden" name="status" class="form-control" id="status" required="" value="Proses Pesan" readonly>
            </div>
                                        
                                    </div>
                                </div>
                                <button class="btn btn-md btn-primary" id="btn">Kirim</button>
                            </form>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">
                            Tata Cara Permintaan Darah
                        </h6>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center"></h5>
                        <p class="card-text">
                            <ul>
                                <li>Ketersediaan darah di BDRS, tidak ada.</li>
                                <li>Input form Permintaan Darah.</li>
                                <li>Harus ada Tanda tangan Dokter dan Cap Rumah Sakit.</li>
                                <li>Mengirimkan surat pengantar.</li>
                                <li>Melakukan Pencocokan darah</li>
                                <li>Pemeberitahuan akan diberitahukan via WhatsApp</li>
                                
                            </ul>
                        </p>
                        <hr>
                    </div>
                </div>

                </form>
            </div>
    </div>
</div>
@endsection