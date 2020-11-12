@extends('user/layout/main')

@section('title', 'Pengajuan Event Donor Darah | PMI Indramayu')

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
      <div class="collapsed" id="satu" >
      <h4>Formulir Pengajuan Event Donor Darah</h4>
      <div class="bg-danger mt-2 mb-4" style="height: 2px; width: 60%; opacity: 0.5;"></div>
        <div class="form-group row">
                <label for="colFormLabel" class="col-sm-4 col-form-label">Kode Institusi</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" id="kodeinstitusi" placeholder="Kode Istitusi">
                </div>
            </div>
        <div class="form-group row">
                <label for="colFormLabel" class="col-sm-4 col-form-label">Nama Institusi</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" id="namainstitusi" placeholder="Nama Istitusi">
                </div>
            </div>
        <div class="form-group row">
                <label for="colFormLabel" class="col-sm-4 col-form-label">Alamat Institusi</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" id="namainstitusi" placeholder="Alamat Istitusi">
                </div>
            </div>
        <div class="form-group row">
                <label for="colFormLabel" class="col-sm-4 col-form-label">Alamat Tempat Donor</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" id="alamattempatdonor" placeholder="Alamat Tempat Donor">
                </div>
            </div>
        <div class="form-group row">
                <label for="colFormLabel" class="col-sm-4 col-form-label">Telepon Kantor</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" id="tlpkantor" placeholder="Telepon Kantor">
                </div>
            </div>
        <div class="form-group row">
                <label for="colFormLabel" class="col-sm-4 col-form-label">Email</label>
                <div class="col-sm-8">
                <input type="email" class="form-control" id="email" placeholder="Email">
                </div>
            </div>
        <div class="form-group row">
                <label for="colFormLabel" class="col-sm-4 col-form-label">Nama Koordinator</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" id="namakoordinator" placeholder="Nama Koordinator">
                </div>
            </div>
        <div class="form-group row">
                <label for="colFormLabel" class="col-sm-4 col-form-label">No Telepon Institusi</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" id="notlpinstitusi" placeholder="No Telepon Institusi">
                </div>
            </div>
        <div class="form-group row">
                <label for="colFormLabel" class="col-sm-4 col-form-label">Tanggal</label>
                <div class="col-sm-8">
                <input type="date" class="form-control" id="notlpinstitusi" placeholder="Tanggal">
                </div>
            </div>
        <div class="form-group  row">
            <label class="col-sm-4 col-form-label "for="colFormLabel">Jam Mulai : </label>
            <div class="col-sm-2">
            <div class="input-group date">
              <input type="text" class="form-control" id="jam1" name="jam1">
            </div>
            <script type="text/javascript">
              $('#jam1').datetimepicker({
                format : 'LT'
              });
            </script>
            </div>
            <label class="col-sm-2 col-form-label "for="colFormLabel">Jam Selesai : </label>
            <div class="col-sm-2">
            <div class="input-group date">
              <input type="text" class="form-control" id="jam2" name="jam2">
            </div>
            <script type="text/javascript">
              $('#jam2').datetimepicker({
                format : 'LT'
              });
            </script>
            </div>
          </div>
        <div class="form-group row">
                <label for="colFormLabel" class="col-sm-4 col-form-label">Perkiraan Jumlah Pendonor</label>
                <div class="col-sm-8">
                <input type="number" class="form-control" id="notlpinstitusi" placeholder="Perkiraan Jumlah Pendonor">
                </div>
            </div>
        <div class="form-group row">
                <label for="colFormLabel" class="col-sm-4 col-form-label">Keterangan</label>
                <div class="col-sm-8">
                <input type="number" class="form-control" id="keterangan" placeholder="Keterangan">
                </div>
            </div>
        <button type="submit" class="btn btn-primary float-right">Kirim Formulir</button>
      </form>
      </div>
      </div>
  </div>
</div>
@endsection