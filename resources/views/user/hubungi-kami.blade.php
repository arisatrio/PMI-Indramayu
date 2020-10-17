@extends('user/layout/main')

@section('title', 'Hubungi Kami | PMI Indramayu')

@section('content')
<div class="container">
    <div class="row mt-4 mb-4 pt-4 pb-4">

        <div class="col-sm-4">
            <div class="judul font-weight-bold" style="display: flex">
                <i class="fa fa-plus fa-2x mr-2" style="color: red; display: inline-block;"></i><h2>Hubungi Kami</h2>
            </div>
            <div class="bg-dark mt-2 mb-2" style="height: 2px; opacity: 0.5;"></div>

            <nav class="nav flex-column">
                <a class="nav-link text-muted mb-2" data-toggle="collapse" href="#satu" role="button" aria-expanded="false" aria-controls="satu">
                    <i class="fa fa-angle-right mr-2"></i>PMI Kab. Indramayu
                </a>
                <div class="bg-secondary" style="height: 1px; opacity: 0.2;"></div>
                <a class="nav-link text-muted mb-2" data-toggle="collapse" href="#dua" role="button" aria-expanded="false" aria-controls="dua">
                    <i class="fa fa-angle-right mr-2"></i>Bagian Pendaftaran Donor di Mobil Unit
                </a>
                <div class="bg-secondary" style="height: 1px; opacity: 0.2;"></div>
                <a class="nav-link text-muted mb-2" data-toggle="collapse" href="#tiga" role="button" aria-expanded="false" aria-controls="tiga">
                    <i class="fa fa-angle-right mr-2"></i>Bagian Layanan Pasien
                </a>
                <div class="bg-secondary" style="height: 1px; opacity: 0.2;"></div>
            </nav>
        </div>
        <div class="col-sm-8">
            <div class="collapsed" id="satu" >
                <h4>PMI Kab. Indramayu</h4>
                <div class="bg-danger mt-2 mb-2" style="height: 2px; width: 35%; opacity: 0.5;"></div>
                <p class="text-danger font-weight-bold">Alamat</p>
                <p>Jalan Kramat Raya No. 47 Jakarta 10450, Indonesia</p>
                <p class="text-danger font-weight-bold">No. Telp / HP</p>
                <p>021 - 390 6666</p>
                <p class="text-danger font-weight-bold">Layanan Pelanggan</p>
                <p>info@utdpmidkijakarta.or.id</p>

                <h1>GMAPS API LOKASI</h1>
                <div class="bg-dark mt-2 mb-2" style="height: 2px; width: 100%; opacity: 0.2;"></div>
            </div>
            <div class="collapse" id="dua" >
                <h4>Bagian Pendaftaran Donor di Mobil Unit</h4>
                <div class="bg-danger mt-2 mb-2" style="height: 2px; width: 60%; opacity: 0.5;"></div>
                <p class="text-danger">Penyumbangan Darah Melalui Mobil Unit (MU)</p>
                <p class="font-weight-bold">Yang disiapkan oleh instansi/organisasi ialah :</p>
                <ol>
                    <li>Lokasi donor berada diwilayah DKI Jakarta</li>
                    <li>Jumlah calon donor 75 orang atau lebih</li>
                    <li>Menyediakan ruangan AC (suhu 19 - 20 °C) serta luasnya sesuai dengan banyaknya jumlah pendonor, bersih, cukup ventilasi, cukup cahaya dan teduh (tidak dibawah sinar matahari)</li>
                    <li>Menyediakan 6 buah meja untuk : Pendaftaran donor, pemeriksaan pendahuluan/HB, Pemeriksaan dokter, Administrasi, dan Meja konsumsi</li>
                    <li>Menyediakan kursi 16 buah untuk petugas dan kursi tunggu donor disesuaikan dengan jumlah pendonor</li>
                    <li>Tersedia wastafel/tisu basah antiseptik untuk membersihkan lengan donor</li>
                    <li>Menyediakan dispenser/air panas untuk konsumsi donor dan teh manis hangat bagi pedonor yang membutuhkan (pusing)</li>
                </ol>
                <p class="font-weight-bold">Pemasanan tanggal pelaksanaan MU :</p>
                <ol>
                    <li>Melalui himbauan yang dikirimkan oleh UTD</li>
                    <li>Penyesuaian tanggal atau permintaan : Untuk hari kerja minimum 2-3 bulan sebelum pelaksanaan, untuk hari minggu disesuaikan dengan jadwal MU yang tersedia di PMI, untuk calon donor diatas 500, dikoordinasikan terlebih dahulu dengan seksi yang terkait</li>
                    <li>Konfirmasi ulang perlu dilakukan 1 minggu sebelum pelaksanaan MU</li>
                    <li>Bila terjadi pembatalan, mohon memberitahukan segera ke bagian Penjadwalan donor UTD PMI Provinsi DKI Jakarta</li>
                </ol>
                <p class="font-weight-bold">
                    Pelayanan Penjadwalan Mobil Unit<br>
                    Hari Senin – Jum’at<br>
                    Pukul 08.00 – 14.00<br>
                </p>
                <p class="font-weight-bold text-danger">ISI FORMULIR DI <a href="#" class="text-danger">SINI</a></p>
                <div class="bg-dark mt-2 mb-2" style="height: 2px; width: 100%; opacity: 0.2;"></div>
            </div>
            <div class="collapse" id="tiga" >
                <h4>Bagian Layanan Pasien</h4>
                <div class="bg-danger mt-2 mb-2" style="height: 2px; width: 35%; opacity: 0.5;"></div>
                <p class="text-danger font-weight-bold">Membutuhkan darah?</p>
                <p>Laboratorium pelayanan pasien diperuntukan bagi RS yang tidak memiliki bank darah. Berikut prosedur permintaan darah :</p>
                <ul>
                    <li>Membawa formulir permintaan darah (rangkap 5 dari RS yang telah ditanda tangani oleh dokter yang bertanggung jawab dan distampel RS)</li>
                    <li>Membawa Sampel darah pasien menggunakan cool box</li>
                    <li>Bagi pasien yang berdomisili di DKI Jakarta harap melampirkan foto kopi KK dan foto kopi KTP (untuk bayi menggunakan KTP orang tua dan surat keterangan lahir/Akte)</li>
                    <li>Formulir permintaan darah dan sampel darah diberikan kepada petugas kami di Loket A</li>
                    <li>Lama pemeriksaan ± 2 jam</li>
                </ul>
                <p class="font-weight-bold text-danger">ISI FORMULIR DI <a href="#" class="text-danger">SINI</a></p>
                <div class="bg-dark mt-2 mb-2" style="height: 2px; width: 100%; opacity: 0.2;"></div>
            </div>
        </div>
    </div> 
</div>
@endsection