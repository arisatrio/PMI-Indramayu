@extends('user/layout/main')

@section('title', 'PMI Indramayu')

@section('content')

  <!-- Masthead -->
  <header class="masthead text-white text-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <h1 class="mb-5">Cek Jadwal & Riwayat Donor Anda</h1>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
          <form>
            <div class="form-row">
              <div class="col-12 col-md-9 mb-2 mb-md-0">
                <input type="email" class="form-control form-control-lg" placeholder="Masukan NIK anda...">
              </div>
              <div class="col-12 col-md-3">
                <button type="submit" class="btn btn-block btn-lg btn-primary">Cek</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </header>

  <!-- Icons Grid -->
  <section class="features-icons bg-light text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-calendar m-auto text-danger"></i>
            </div>
            <a href="{{ route('agenda') }}" class="text-dark">
              <h3>JADWAL KEGIATAN DONOR DARAH</h3>
            </a>
            <p class="lead mb-0">Lihat Jadwal dan Lokasi Kegiatan Donor Darah</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="fas fa-newspaper m-auto text-danger"></i>
            </div>
            <a href="{{ route('berita') }}" class="text-dark">
              <h3>BERITA</h3>
            </a>
            <p class="lead mb-0">Cek Berita Terbaru</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-pencil m-auto text-danger"></i>
            </div>
            <a href="{{ route('registrasi-donor') }}" class="text-dark">
              <h3>REGISTRASI DONOR</h3>
            </a>
            <p class="lead mb-0">Daftar donor di lokasi terdekat anda</p>
          </div>      
        </div>
      </div>
    </div>
  </section>

  <!-- COVID -->
  @foreach($data as $datas)
    <div class="card">
      <div class="card-header bg-danger text-white text-center">
        <h3>KASUS COVID-19 INDONESIA REAL-TIME</h3>
      </div>
      <div class="row">
          <div class="col-3">
            <div class="card-body">
              <div class="card" style="width: 16rem;">
                <div class="card-body ">
                <i class="fas fa-user-plus fa-3x float-right" style="opacity:0.5;"></i>
                  <h2 class="card-text mb-4"><b>{{ $datas['positif'] }}</b></h2>
                  <h5 class="card-title">TERKONFIRMASI</h5>
                </div>
              </div>
            </div>
          </div>
          <div class="col-3">
            <div class="card-body">
              <div class="card" style="width: 16rem;">
                <div class="card-body">
                <i class="fas fa-user-md fa-3x float-right" style="opacity:0.5;"></i>
                <h2 class="card-text mb-4"><b>{{ $datas['dirawat'] }}</b></h2>
                  <h5 class="card-title">KASUS AKTIF</h5>
                </div>
              </div>
            </div>
          </div>
        <div class="col-3">
          <div class="card-body">
            <div class="card" style="width: 16rem;">
              <div class="card-body">
              <i class="far fa-smile fa-3x float-right" style="opacity:0.5;"></i>
                <h2 class="card-text mb-4"><b>{{ $datas['sembuh']}}</b></h2>
                <h5 class="card-title">SEMBUH</h5>
              </div>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card-body">
            <div class="card" style="width: 16rem;">
              <div class="card-body">
              <i class="fas fa-ribbon fa-3x float-right" style="opacity:0.5;"></i>
                <h2 class="card-text mb-4"></b>{{ $datas['meninggal']}}</b></h2>
                <h5 class="card-title">MENINGGAL</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class=" text-muted mb-2 text-center ">
        <small>Sumber : kawalcorona.com</small>
      </div>
    </div >
    @endforeach
<!-- END COVID -->
<!-- Informasi Donor -->
  <section class="showcase">
    <div class="container-fluid p-0 mt-5">
      <div class="row no-gutters">

        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/donor3.jpg');"></div>
        <div class="col-lg-6 order-lg-1-mt-0 my-auto showcase-text">
          <h2>Syarat-syarat pendonor darah</h2>
            <p class="lead mb-0-mt-0">
              <ol>
              <li style="text-align:justify">Umur 17 – 60 tahun ( Pada usia 17 tahun diperbolehkan menjadi donor bila mendapat ijin tertulis dari orangtua. Sampai usia tahun donor masih dapat menyumbangkan darahnya dengan jarak penyumbangan 3 bulan atas pertimbangan dokter)</li><br>
              <li>Berat badan minimum 45 kg</li><br>
              <li>Temperatur tubuh : 36,6 – 37,5o C (oral)</li><br>
              <li>Tekanan darah baik, yaitu:</li>
                  <ul>
                  <li>Sistole = 110 – 160 mm Hg</li>
                  </ul>
                  <ul>
                  <li>Diastole = 70 – 100 mm Hg</li>
                  </ul><br>
              <li>Denyut nadi : Teratur 50 – 100 kali/ menit</li><br>
              <li>Hemoglobin</li>
                  <ul>
                  <li>Wanita minimal = 12 gr %</li>
                  </ul>
                  <ul>
                  <li>Pria minimal = 12,5 gr % </li>
                  </ul><br>
              <li style="text-align:justify">Jumlah penyumbangan pertahun paling banyak 5 kali, dengan jarak penyumbangan sekurang-kurangnya 3 bulan. Keadaan ini harus sesuai dengan keadaan umum donor.!</li>
              </ol>
            </p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 text-white showcase-img" style="background-image: url('img/donor2.jpg');"></div>
        <div class="col-lg-6  my-auto showcase-text">
          <h2>Seseorang tidak boleh menjadi pendonor darah pada keadaan : </h2>
            <p class="lead mb-0" style="text-align:justify">
              <ol>
                 <li>Pernah menderita hepatitis B. </li><br>
                 <li style="text-align:justify">Dalam jangka waktu 6 bulan sesudah kontak erat dengan penderita hepatitis. </li><br>
                 <li>Dalam jangka waktu 6 bulan sesudah transfusi. </li><br>
                 <li>Dalam jangka waktu 6 bulan sesudah tattoo/tindik telinga. </li><br>
                 <li>Dalam jangka waktu 72 jam sesudah operasi gigi.</li><br>
                 <li>Dalam jangka wktu 6 bulan sesudah operasi kecil.</li><br>
                 <li style="text-align:justify">Dalam jangka waktu 12 bulan sesudah operasi besar.</li><br>
                 <li style="text-align:justify">Dalam jangka waktu 24 jam sesudah vaksinasi polio, influenza, cholera, tetanus dipteria atau profilaksis.</li><br>
                 <li style="text-align:justify">Dalam jangka waktu 2 minggu sesudah vaksinasi virus hidup parotitis epidemica, measles, tetanus toxin.</li><br>
                 <li style="text-align:justify">Dalam jangka waktu 1 tahun sesudah injeksi terakhir imunisasi rabies therapeutic.</li><br>
                 <li style="text-align:justify">Dalam jangka waktu 1 minggu sesudah gejala alergi menghilang.</li><br>
                 <li style="text-align:justify">Dalam jangka waktu 1 tahun sesudah transpalantasi kulit.</li><br>
                 <li style="text-align:justify">Sedang hamil dan dalam jangka waktu 6 bulan sesudah persalinan.</li><br>
                 <li style="text-align:justify">Sedang menyusui.</li><br>
                 <li>Ketergantungan obat.</li><br>
                 <li>Alkoholisme akut dan kronik.</li><br>
                 <li>Sifilis.</li><br>
                 <li>Menderita tuberkulosa secara klinis.</li><br>
                 <li style="text-align:justify">Menderita epilepsi dan sering kejang.</li><br>
                 <li style="text-align:justify">Menderita penyakit kulit pada vena (pembuluh balik) yang akan ditusuk.</li><br>
                 <li style="text-align:justify">Mempunyai kecenderungan perdarahan atau penyakit darah, misalnya, defisiensi G6PD, thalasemia, polibetemiavera.</li><br>
                 <li style="text-align:justify">Seseorang yang termasuk kelompok masyarakat yang mempunyai resiko tinggi untuk mendapatkan HIV/AIDS (homoseks, morfinis, berganti-ganti pasangan seks, pemakai jarum suntik tidak steril).</li><br>
                 <li>Pengidap HIV/ AIDS menurut hasil pemeriksaan pada saat donor darah.</li><br>
            </p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/donor4.png');"></div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <h2>Manfaat Donor Darah</h2>
            <p class="lead mb-5 "style="text-align:justify">
            <ol>
              <li style="text-align:justify">Dapat memeriksakan kesehatan secara berkala 3 bulan sekali seperti tensi, Lab Uji Saring (HIV, Hepatitis B, C, Sifilis dan Malaria).</li><br>
              <li style="text-align:justify">Mendapatkan piagam penghargaan sesuai dengan jumlah menyumbang darahnya antara lain 10, 25, 50, 75, 100 kali.</li><br>
              <li style="text-align:justify">Donor darah 100 kali mendapat penghargaan Satya Lencana Kebaktian Sosial dari Pemerintah.</li><br>
              <li style="text-align:justify">Merupakan bagian dari ibadah.</li><br>
            </ol>
            </p>
        </div>
      </div>
    </div>
  </section>
  <div class="container mt-3">
      <div class="row">
        @foreach($komunikasi as $data)
        <div class="col-sm-4">
          <div class="card">
            <div class="card-body">
              <h4 class="text-danger"><b>{{ $data->tentang_komunikasi}}</b></h4>
              <p>Dikirim oleh <b>{{ $data->nama }}</b></p>
              <small>6 Nov</small>
              <p class="text-danger mt-4">
                  {{ $data->isi_komunikasi }}
              </p>
              <hr>
              <p>Dibalas oleh <b>Admin</b></p>
              <p>
                {{ $data->isi_balasan }}
              </p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
  <!-- END Informasi Donor -->
@endsection