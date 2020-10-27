@extends('user/layout/main')

@section('title', 'Registrasir Donor | PMI Indramayu')

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
                    <i class="fa fa-angle-right mr-2"></i>Formulir Pengajuan Donor Darah
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
            <h4>Formulir Donor Darah</h4>
            <div class="bg-danger mt-2 mb-4" style="height: 2px; width: 83%; opacity: 0.5;"></div>
            <div class="form-group row">
                <label for="colFormLabel" class="col-sm-3 col-form-label">Kode Donor</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" id="kodedonor" placeholder="Kode Donor">
                </div>
            </div>
            <div class="form-group row">
                <label for="colFormLabel" class="col-sm-3 col-form-label">No. KTP/SIM</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" id="ktpsim" placeholder="No. KTP/SIM">
                </div>
            </div>
            <div class="form-group row">
                <label for="colFormLabel" class="col-sm-3 col-form-label">Nama Lengkap</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" id="namalengkap" placeholder="Nama Lengkap">
                </div>
            </div>
            <div class="form-group row">
                <label for="colFormLabel" class="col-sm-3 col-form-label">Alamat </label>
                <div class="col-sm-9">
                <input type="text" class="form-control" id="alamat" placeholder="Alamat ">
                </div>
            </div>
            <div class="form-group row">
                <label for="colFormLabel" class="col-sm-3 col-form-label">Kelurahan</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" id="kelurahan" placeholder="Kelurahan">
                </div>
            </div>
            <div class="form-group row">
                <label for="colFormLabel" class="col-sm-3 col-form-label"> Kecamatan</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" id="kecamatan" placeholder=" Kecamatan">
                </div>
            </div>
            <div class="form-group row">
                <label for="colFormLabel" class="col-sm-3 col-form-label">Kode Pos</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" id="kodepos" placeholder="Kode Pos">
                </div>
            </div>
            <div class="form-group row">
                <label for="colFormLabel" class="col-sm-3 col-form-label">Kode Donor</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" id="kodedonor" placeholder="Kode Donor">
                </div>
            </div>
            <div class="form-group row">
                <label for="colFormLabel" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-4">
                    <select id="inputState" class="form-control">
                        <option selected>Pilih</option>
                        <option>Laki-Laki</option>
                        <option>Perempuan</option>
                    </select>
               </div>
            </div>
            <div class="form-group row">
                <label for="colFormLabel" class="col-sm-3 col-form-label">Tempat Lahir</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" id="tempatlahir" placeholder="Tempat Lahir">
                </div>
            </div>
            <div class="form-group row">
                <label for="colFormLabel" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-4">
                <input type="date" class="form-control" id="tgllahir">
                </div>
            </div>
            <div class="form-group row">
                <label for="colFormLabel" class="col-sm-3 col-form-label">Pekerjaan</label>
                <div class="col-sm-9">
                    <select id="inputState" class="form-control">
                        <option selected>Pilih</option>
                        <option>BUMN</option>
                        <option>Pegawai Negeri</option>
                        <option>Pegawai Swasta</option>
                        <option>POLRI</option>
                        <option>TNI</option>
                        <option>Mahasiswa</option>
                        <option>Pelajar</option>
                        <option>Pedagang</option>
                        <option>Wiraswasta</option>
                        <option>Petani/Buruh</option>
                        <option>Lain-lain</option>
                    </select>
                 </div>
            </div>
            <div class="form-group row">
                <label for="colFormLabel" class="col-sm-3 col-form-label">Nama Ibu Kandung</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" id="namaibukdg" placeholder="Nama Ibu Kandung">
                </div>
            </div>
            <div class="form-group row">
                <label for="colFormLabel" class="col-sm-3 col-form-label">Status Nikah</label>
                <div class="col-sm-9">
                    <select id="inputState" class="form-control">
                        <option selected>Pilih</option>
                        <option>Nikah</option>
                        <option>Belum Nikah</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="colFormLabel" class="col-sm-3 col-form-label">Golongan Darah</label>
                <div class="col-sm-9">
                    <select id="inputState" class="form-control">
                        <option selected>Pilih</option>
                        <option>A</option>
                        <option>AB</option>
                        <option>B</option>
                        <option>O</option>
                    </select>
               </div>
            </div>
            <div class="form-group row">
                <label for="colFormLabel" class="col-sm-3 col-form-label">Rhesus</label>
                <div class="col-sm-9">
                    <select id="inputState" class="form-control">
                        <option selected>Pilih</option>
                        <option>Positif</option>
                        <option>Negatif</option>
                    </select>
               </div>
            </div>
            <div class="form-group row">
                <label for="colFormLabel" class="col-sm-3 col-form-label">Nomor Telepon</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" id="notlp" placeholder="No Telepon">
                </div>
            </div>
            <button type="submit" class="btn btn-primary col-md-3 float-right">Daftar</button>
            </div>
            </form>
        </div>
    </div>
</div>

@endsection