@extends('user/layout/main')

@section('title', 'Hubungi Kami | PMI Indramayu')

@section('content')
<div class="container">
    <div class="row mt-4 mb-4 pt-4 pb-4">

        <div class="col-sm-4">
            <div class="judul font-weight-bold" style="display: flex">
                <i class="fas fa-phone-alt fa-2x mr-2" style="color: red; display: inline-block;"></i><h2>Hubungi Kami</h2>
            </div>
            <div class="bg-dark mt-2 mb-2" style="height: 2px; opacity: 0.5;"></div>

            <nav class="nav flex-column">
                <a class="nav-link text-muted mb-2" data-toggle="collapse" href="#satu" role="button" aria-expanded="false" aria-controls="satu">
                    <i class="fa fa-angle-right mr-2"></i>PMI Kab. Indramayu 
                </a>
                <div class="bg-secondary" style="height: 1px; opacity: 0.2;"></div>
                <a class="nav-link text-muted mb-2" data-toggle="collapse" href="#dua" role="button" aria-expanded="false" aria-controls="dua">
                    <i class="fa fa-angle-right mr-2"></i>Bagian Pengajuan Event Donor Darah
                </a>
                <div class="bg-secondary" style="height: 1px; opacity: 0.2;"></div>
            </nav>
        </div>
        <div class="col-sm-8">
            <div class="collapsed" id="satu" >
                <h4>PMI Kab. Indramayu</h4>
                <div class="bg-danger mt-2 mb-2" style="height: 2px; width: 35%; opacity: 0.5;"></div>
                <img alt="PMI-Im" src="img/Logo-PMI-im.png" height="200px" width="750px" />
                <p class="text-danger font-weight-bold">Alamat</p>
                <p>Jl. Yos Sudarso, Margadadi, Kec. Indramayu, Kabupaten Indramayu, Jawa Barat 45211</p>
                <p class="text-danger font-weight-bold">No. Telp / HP</p>
                <p>(0234) 274644</p>
                <p class="text-danger font-weight-bold">Layanan Pelanggan</p>
                <p>info@uddpmikabindramayu.or.id</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3306.5122194100513!2d108.32656876094683!3d-6.326530858574866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6ebbfc20a2bb4b%3A0xd80a45ef9828e8e!2sKantor%20PMI%20Kab.%20Indramayu!5e0!3m2!1sid!2sid!4v1603315709695!5m2!1sid!2sid" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                <div class="bg-dark mt-2 mb-2" style="height: 2px; width: 100%; opacity: 0.2;"></div>
            </div>
            <div class="collapse" id="dua" >
                <h4>Bagian Pengajuan Event Donor Darah ( EDD )</h4>
                <div class="bg-danger mt-2 mb-2" style="height: 2px; width: 60%; opacity: 0.5;"></div>
                <p class="text-danger">Penyumbangan Darah Melalui Event Donor Darah (EDD )</p>
                <p class="font-weight-bold">Yang disiapkan oleh instansi/organisasi ialah :</p>
                <ol>
                    <li>Lokasi donor berada diwilayah Kab. Indramayu</li>
                    <li>Jumlah calon donor 75 orang atau lebih</li>
                    <li>Menyediakan ruangan AC (suhu 19 - 20 °C) serta luasnya sesuai dengan banyaknya jumlah pendonor, bersih, cukup ventilasi, cukup cahaya dan teduh (tidak dibawah sinar matahari)</li>
                    <li>Menyediakan 6 buah meja untuk : Pendaftaran donor, pemeriksaan pendahuluan/HB, Pemeriksaan dokter, Administrasi, dan Meja konsumsi</li>
                    <li>Menyediakan kursi 16 buah untuk petugas dan kursi tunggu donor disesuaikan dengan jumlah pendonor</li>
                    <li>Tersedia wastafel/tisu basah antiseptik untuk membersihkan lengan donor</li>
                    <li>Menyediakan dispenser/air panas untuk konsumsi donor dan teh manis hangat bagi pedonor yang membutuhkan (pusing)</li>
                </ol>
                <p class="font-weight-bold">Pemasanan tanggal pelaksanaan EDD :</p>
                <ol>
                    <li>Melalui himbauan yang dikirimkan oleh UDD</li>
                    <li>Penyesuaian tanggal atau permintaan : Untuk hari kerja minimum 2-3 bulan sebelum pelaksanaan, untuk hari minggu disesuaikan dengan jadwal EDD yang tersedia di PMI, untuk calon donor diatas 500, dikoordinasikan terlebih dahulu dengan seksi yang terkait</li>
                    <li>Konfirmasi ulang perlu dilakukan 1 minggu sebelum pelaksanaan EDD</li>
                    <li>Bila terjadi pembatalan, mohon memberitahukan segera ke bagian Penjadwalan donor UDD PMI Kab. Indramayu</li>
                </ol>
                <p class="font-weight-bold">
                    Pelayanan Penjadwalan Mobil Unit<br>
                    Hari Senin – Jum’at<br>
                    Pukul 08.00 – 14.00<br>
                </p>
                <p class="font-weight-bold text-danger">ISI FORMULIR DI <a href="{{ route('pengajuan-event-donor') }}" class="text-danger">SINI</a></p>
                <div class="bg-dark mt-2 mb-2" style="height: 2px; width: 100%; opacity: 0.2;"></div>
            </div>
        </div>
    </div> 
</div>
@endsection