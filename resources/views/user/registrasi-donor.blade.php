@extends('user/layout/main')

@section('title', 'Registrasir Donor | PMI Indramayu')

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
                <h4>Formulir Donor Darah</h4>
                <div class="bg-danger mt-2 mb-4" style="height: 2px; width: 83%; opacity: 0.5;"></div>
                <div class="form-group row">
                    <label for="nik" class="col-sm-3 col-form-label">No. KTP/SIM</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="nik" id="nik" placeholder="No. KTP/SIM" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-3 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-3 col-form-label">Alamat </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat"required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kecamatan" class="col-sm-3 col-form-label">Kecamatan</label>
                    <div class="col-sm-9">
                        <select name="kecamatan" id="kecamatan" class="form-control" required>
                            <option selected disabled>--Pilih--</option>
                            @foreach($data as $datas)
                            <option value="{{ $datas['name'] }}">{{ $datas['name'] }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kelurahan" class="col-sm-3 col-form-label">Kelurahan</label>
                    <div class="col-sm-9">
                        <select name="kelurahan" id="kelurahan" class="form-control" required>
                            <option selected disabled>--Pilih--</option>
                            <!--  -->
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jenis_kelamin" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-4">
                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
                            <option selected disabled>--Pilih--</option>
                            <option value="Laki-laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tempat_lahir" class="col-sm-3 col-form-label">Tempat Lahir</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="tempat_lahir" id="tempatlahir" placeholder="Tempat Lahir" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tanggal_lahir" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-4">
                        <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pekerjaan" class="col-sm-3 col-form-label">Pekerjaan</label>
                    <div class="col-sm-9">
                        <select name="pekerjaan" id="pekerjaan" class="form-control" required>
                            <option selected disabled>--Pilih--</option>
                            <option value="TNI / POLRI">TNI / POLRI</option>
                            <option value="Pegawai Negeri / Swasta">Pegawai Negeri / Swasta</option>
                            <option value="Petani / Buruh">Petani / Buruh</option>
                            <option value="Wiraswasta">Wiraswasta</option>
                            <option value="Mahasiswa / Pelajar">Mahasiswa / Pelajar</option>
                            <option value="Pedagang">Pedagang</option>
                            <option value="Ibu Rumah Tangga">Ibu Rumah Tangga</option>
                            <option value="Lain-lain">Lain-lain</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="status" class="col-sm-3 col-form-label">Status Nikah</label>
                    <div class="col-sm-9">
                        <select name="status" id="status" class="form-control" required>
                            <option selected disabeled>--Pilih--</option>
                            <option value="Nikah">Nikah</option>
                            <option value="Belum Nikah">Belum Nikah</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nohp" class="col-sm-3 col-form-label">Nomor Telepon</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="nohp" id="nohp" placeholder="No Telepon" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary col-md-2 float-right">Daftar</button>
            </form>
        </div>
    </div>
</div>

@endsection