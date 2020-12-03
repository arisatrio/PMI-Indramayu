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
      <form method="POST" action="{{ route('agenda-store') }}" enctype="multipart/form-data">
      @csrf
      <div class="collapsed" id="satu" >
      <h4>Formulir Pengajuan Event Donor Darah</h4>
      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
      @endif
      @if (session('success'))
        <div class="alert alert-success alert-dismissible">
          {{ session('success') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      @endif
      <div class="bg-danger mt-2 mb-4" style="height: 2px; width: 60%; opacity: 0.5;"></div>
        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label">Nama Institusi</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="nama_institusi" name="nama_institusi" placeholder="Nama Istitusi">
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label">Alamat Institusi</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="alamat_institusi" name="alamat_institusi" placeholder="Alamat Istitusi">
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label">Nama Kegiatan</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan" placeholder="Nama Kegiatan">
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label">Tanggal</label>
            <div class="col-sm-8">
              <input type="date" class="form-control" id="tgl_kegiatan" name="tgl_kegiatan" placeholder="Tanggal">
            </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-4 col-form-label "for="colFormLabel">Jam Mulai : </label>
          <div class="col-sm-2">
            <div class="input-group date">
              <input type="text" class="form-control" id="jam_mulai" name="jam_mulai">
            </div>
            <script type="text/javascript">
              $('#jam_mulai').datetimepicker({
                format : 'HH:mm'
              });
            </script>
          </div>
          <label class="col-sm-2 col-form-label "for="colFormLabel">Jam Selesai : </label>
          <div class="col-sm-2">
            <div class="input-group date">
              <input type="text" class="form-control" id="jam_selesai" name="jam_selesai">
            </div>
            <script type="text/javascript">
              $('#jam_selesai').datetimepicker({
                format : 'HH:mm'
              });
            </script>
          </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label">Alamat Tempat Donor</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="alamat_kegiatan" name="alamat_kegiatan" placeholder="Alamat Tempat Donor">
            </div>
        </div>
        <div class="form-group row">
            <label for="id_kecamatan" class="col-sm-4 col-form-label">Kecamatan</label>
            <div class="col-sm-8">
                <select name="id_kecamatan" id="kecamatan" class="form-control" required>
                    <option selected disabled>--Pilih--</option>
                    @foreach($kec as $id => $kec1)
                    <option value="{{ $id }}">{{ $kec1 }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="id_kelurahan" class="col-sm-4 col-form-label">Kelurahan</label>
            <div class="col-sm-8">
                <select name="id_kelurahan" id="kelurahan" class="form-control" required>
                    <option selected disabled>--Pilih--</option>
                    <!--  -->
                </select>
            </div>
        </div>
        <script>
          $(function () {
              $('#kecamatan').on('change', function () {
                  axios.post('{{ route('kel') }}', {id: $(this).val()})
                      .then(function (response) {
                          $('#kelurahan').empty();

                          $.each(response.data, function (id, name) {
                              $('#kelurahan').append(new Option(name, id))
                          })
                      });
              });
          });
        </script>
        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label">Nama Koordinator</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="nama_koordinator" name="nama_koordinator" placeholder="Nama Koordinator">
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label">No Telepon Koordinator (WhatsApp)</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="notlp_koordinator" name="notlp_koordinator" placeholder="No Telepon Koordinator">
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-4 col-form-label">Perkiraan Jumlah Pendonor</label>
            <div class="col-sm-8">
              <input type="number" class="form-control" id="jml_pendonor" name="jml_pendonor" placeholder="Perkiraan Jumlah Pendonor">
            </div>
        </div>
        <div class="form-group row">
          <div class="custom-file">
          <label for="colFormLabel" class="col-sm-4">Surat Pengantar</label>
            <div class="col-sm-6 float-right">
              <input type="file" class="custom-file-input" id="surat" name="surat">
              <label class="custom-file-label" for="surat">Upload Surat *.pdf</label>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <div class="custom-file">
            <label for="colFormLabel" class="col-sm-4">Poster / Flyer</label>
            <div class="col-sm-6 float-right">
              <input type="file" class="custom-file-input" id="poster" name="poster" aria-describedby="poster" sr-only>
              <label class="custom-file-label" for="poster">Upload poster *.jpg .jpeg .png</label>
              <script>
                $('input[type="file"]').change(function(e){
                  var fileName = e.target.files[0].name;
                  $(e.target).siblings('.custom-file-label').html(fileName);
                });
              </script>
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-primary float-right mt-4">Kirim Formulir</button>
      </form>

      </div>
      </div>
  </div>
</div>
@endsection