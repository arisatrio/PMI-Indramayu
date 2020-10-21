@extends('user/layout/main')

@section('title', 'Donor | PMI Indramayu')

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
            <a href="#" class="text-dark">
              <h3>JADWAL KEGIATAN DONOR DARAH</h3>
            </a>
            <p class="lead mb-0">Lihat Jadwal dan Lokasi Kegiatan Donor Darah</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-layers m-auto text-danger"></i>
            </div>
            <a href="#" class="text-dark">
              <h3>STOK DARAH</h3>
            </a>
            <p class="lead mb-0">Jumlah stok darah PMI Indramayu real-time</p>
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

  <!-- Image Showcases -->
  <section class="showcase">
    <div class="container-fluid p-0">
      <div class="row no-gutters">

        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/bg-showcase-1.jpg');"></div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <h2>Syarat-syarat pendonor darah</h2>
<<<<<<< HEAD
            <p class="lead mb-0 text-align:justify">
=======
            <p class="lead mb-0">
>>>>>>> 39f5b83549dce9ea832e3924d03e79b717440045
              1. Umur 17 – 60 tahun ( Pada usia 17 tahun diperbolehkan menjadi donor bila mendapat ijin tertulis dari orangtua. Sampai usia tahun donor masih dapat menyumbangkan darahnya dengan jarak penyumbangan 3 bulan atas pertimbangan dokter)<br>
              2. Berat badan minimum 45 kg <br>
              3. Temperatur tubuh : 36,6 – 37,5o C (oral) <br>
              4. Tekanan darah baik, yaitu: <br>
              - Sistole = 110 – 160 mm Hg dan Diastole = 70 – 100 mm Hg <br>
              5. Denyut nadi; Teratur 50 – 100 kali/ menit <br>
              6. Hemoglobin <br>
              - Wanita minimal = 12 gr % sedangkan Pria minimal = 12,5 gr % <br>
              7. Jumlah penyumbangan pertahun paling banyak 5 kali, dengan jarak penyumbangan sekurang-kurangnya 3 bulan. Keadaan ini harus sesuai dengan keadaan umum donor.!
            </p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 text-white showcase-img" style="background-image: url('img/bg-showcase-2.jpg');"></div>
        <div class="col-lg-6 my-auto showcase-text">
          <h2>Seseorang tidak boleh menjadi pendonor darah pada keadaan : </h2>
<<<<<<< HEAD
            <p class="lead mb-0 text-align:justify">
=======
            <p class="lead mb-0">
>>>>>>> 39f5b83549dce9ea832e3924d03e79b717440045
              1. Pernah menderita hepatitis B. <br>
              2. Dalam jangka waktu 6 bulan sesudah kontak erat dengan penderita hepatitis. <br>
              3. Dalam jangka waktu 6 bulan sesudah transfusi. <br>
              4. Dalam jangka waktu 6 bulan sesudah tattoo/tindik telinga. <br>
              5. Dalam jangka waktu 72 jam sesudah operasi gigi.<br>
              6. Dalam jangka wktu 6 bulan sesudah operasi kecil.<br>
              7. Dalam jangka waktu 12 bulan sesudah operasi besar.<br>
              8. Dalam jangka waktu 24 jam sesudah vaksinasi polio, influenza, cholera, tetanus dipteria atau profilaksis.<br>
              9. Dalam jangka waktu 2 minggu sesudah vaksinasi virus hidup parotitis epidemica, measles, tetanus toxin.<br>
              10. Dalam jangka waktu 1 tahun sesudah injeksi terakhir imunisasi rabies therapeutic.<br>
              11. Dalam jangka waktu 1 minggu sesudah gejala alergi menghilang.<br>
              12. Dalam jangka waktu 1 tahun sesudah transpalantasi kulit.<br>
              13. Sedang hamil dan dalam jangka waktu 6 bulan sesudah persalinan.<br>
              14. Sedang menyusui.<br>
              15. Ketergantungan obat.<br>
              16. Alkoholisme akut dan kronik.<br>
              17. Sifilis.<br>
              18. Menderita tuberkulosa secara klinis.<br>
              19. Menderita epilepsi dan sering kejang.<br>
              20. Menderita penyakit kulit pada vena (pembuluh balik) yang akan ditusuk.<br>
              21. Mempunyai kecenderungan perdarahan atau penyakit darah, misalnya, defisiensi G6PD, thalasemia, polibetemiavera.<br>
              22. Seseorang yang termasuk kelompok masyarakat yang mempunyai resiko tinggi untuk mendapatkan HIV/AIDS (homoseks, morfinis, berganti-ganti pasangan seks, pemakai jarum suntik tidak steril).<br>
              23. Pengidap HIV/ AIDS menurut hasil pemeriksaan pada saat donor darah.<br>
            </p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/bg-showcase-3.jpg');"></div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <h2>Manfaat Donor Darah</h2>
<<<<<<< HEAD
            <p class="lead mb-0 "style="text-align:justify">
=======
            <p class="lead mb-0">
>>>>>>> 39f5b83549dce9ea832e3924d03e79b717440045
              1. Dapat memeriksakan kesehatan secara berkala 3 bulan sekali seperti tensi, Lab Uji Saring (HIV, Hepatitis B, C, Sifilis dan Malaria).<br>
              2. Mendapatkan piagam penghargaan sesuai dengan jumlah menyumbang darahnya antara lain 10, 25, 50, 75, 100 kali.<br>
              3. Donor darah 100 kali mendapat penghargaan Satya Lencana Kebaktian Sosial dari Pemerintah.<br>
              4. Merupakan bagian dari ibadah.<br>
            </p>
        </div>
      </div>
    </div>
  </section>
@endsection