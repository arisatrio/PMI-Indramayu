@extends('user/layout/main')

@section('title', 'Profil | PMI Indramayu')

@section('content')
<div class="container">
    <div class="row mt-4 mb-4 pt-4 pb-4">
        
        <div class="col-sm-4">
            <div class="judul font-weight-bold" style="display: flex">
                <i class="fa fa-plus fa-2x mr-2" style="color: red; display: inline-block;"></i><h2>PROFIL</h2>
            </div>
            <div class="bg-dark mt-2 mb-2" style="height: 2px; opacity: 0.5;"></div>

            <nav class="nav flex-column">
                <a class="nav-link text-muted mb-2" data-toggle="collapse" href="#profil" role="button" aria-expanded="false" aria-controls="profil">
                    <i class="fa fa-angle-right mr-2"></i>Profil UTD PMI Jakarta
                </a>
                <div class="bg-secondary" style="height: 1px; opacity: 0.2;"></div>
                <a class="nav-link text-muted mb-2" data-toggle="collapse" href="#moto" role="button" aria-expanded="false" aria-controls="moto">
                    <i class="fa fa-angle-right mr-2"></i>Moto, Visi & Misi
                </a>
                <div class="bg-secondary" style="height: 1px; opacity: 0.2;"></div>
                <a class="nav-link text-muted mb-2" data-toggle="collapse" href="#struktur" role="button" aria-expanded="false" aria-controls="struktur">
                    <i class="fa fa-angle-right mr-2"></i>Struktur Organisasi / Kepengurusan
                </a>
                <div class="bg-secondary" style="height: 1px; opacity: 0.2;"></div>
            </nav>
        </div>

        <div class="col-sm-8 bg-transparent">
            <div class="collapsed" id="profil" >
                <h4>Profil UTD PMI Jakarta</h4>
                <div class="bg-danger mt-2 mb-2" style="height: 2px; width: 35%; opacity: 0.5;"></div>
                <p>
                    Unit Transfusi Darah merupakan salah satu unit kerja yang ada di PMI Provinsi DKI Jakarta. Tugas dan fungsi utamanya ialah meningkatkan derajat kesehatan melalui pengelolaan darah yang berkualitas, mewujudkan pelayanan penyediaan darah yang aman, tepat waktu, terjangkau dan berkesinambungan.</p><p>
                    Hingga kini UTD PMI Provinsi DKI Jakarta terus berupaya memberikan pelayanan terbaik kepada masyarakat. Sejak tahun 2009, UTD PMI Provinsi DKI Jakarta telah mengikuti sertifikasi ISO 9001:2008 dan telah upgrade ke ISO 9001:2015 pada Agustus 2018 yang lalu. UTD PMI Provinsi DKI Jakarta juga merupakan 1 dari 6 UTD di Indonesia yang telah mendapat sertifikat CPOB (GMP) dalam penyediaan darah dari Badan POM RI.</p><p>
                    Dalam pemenuhan kebutuhan darah, UTD PMI Provinsi DKI Jakarta telah bekerja sama dengan 4000 kelompok donor darah di Provinsi DKI Jakarta. Setiap harinya sebanyak 800-1000 kantong darah pendonor masuk dan diolah menjadi komponen darah sesuai dengan persyaratan CPOB. Berbagai komponen darah yang diperlukan oleh pasien dapat disediakan oleh UTD PMI Provinsi DKI Jakarta mulai dari komponen darah yang rutin dipakai oleh pasien (Packed Red Cell/PRC, Thrombocyte Concentrate/TC, Fresh Frozen Plasma/FFP) sampai komponen darah yang special seperti leukodepleted (komponen darah yang dikurangi jumlah sel darah putihnya untuk mengurangi reaksi transfusi), cryoprecipitate-AHF (komponen darah yang hanya mengandung factor pembekuan factor 8), TC pooled dan TC Apheresis.</p><p>
                    Keamanan dan mutu darah selalu diutamakan sehingga hanya di UTD PMI Provinsi DKI Jakarta yang telah melakukan pengujian darah paling lengkap dengan metode paling mutakhir baik terhadap infeksi menular lewat transfusi darah, kelainan golongan darah pada pendonor dan untuk quality control (QC) produknya. Hampir semua peralatan yang digunakan dalam pengambilan, pengolahan, dan pengujian menggunakan mesin otomatisasi. UTD PMI Provinsi DKI Jakarta juga telah menggunakan sistem informasi sebagai penunjang pelayanan sejak tahun 2000 sampai dengan saat ini dengan berbagai pengembangannya yang dikenal dengan nama Sistem Informasi Transfusi Darah (SITD), yang juga terhubung dengan website UTD dan mesin-mesin pengujian dan pengolahan.</p>
                    UTD PMI Provinsi DKI Jakarta dengan 456 pegawai memberikan pelayanan donor darah dan pelayanan darah bagi pasien selama 24 jam tanpa henti ke 152 Rumah Sakit yang ada di Jakarta dan 229 Rumah Sakit di luar Jakarta (Data tahun 2018). Untuk mendekatkan pelayanan kepada masyarakat, telah dibuka UTD Cabang di PMI Kota Jakarta Barat, PMI Kota Jakarta Timur dan PMI Kota Jakarta Selatan yang beroperasional setiap harinya. Sedangkan di PMI Kota Jakarta Pusat telah ada kegiatan donor darah walaupun belum setiap hari. UTD PMI Provinsi DKI Jakarta selain menerima donor darah di gedung PMI DKI Jakarta juga memiliki armada Mobil Unit untuk melayani kegiatan donor darah yang diselenggarakan di instansi.
                </p>
                <div class="bg-dark mt-2 mb-2" style="height: 2px; width: 100%; opacity: 0.2;"></div>
            </div>
            <div class="collapse" id="moto">
                <h4>Moto, Visi & Misi</h4>
                <div class="bg-danger mt-2 mb-2" style="height: 2px; width: 30%; opacity: 0.5;"></div>
                    <p class="text-danger">Moto</p>
                    <p class="font-italic">Bersama untuk sosial dan kemanusiaan</p>
                    <p class="text-danger">VISI</p>
                    <p class="font-italic">“ UTD PMI PROVINSI DKI Jakarta menjadi UTD paling terdepan tahun 2025 “</p>
                    <p class="text-danger">MISI</p>
                    <p class="font-italic">1. Mengembangkan sumber daya manusia yang kompeten dan profesional <br>
                    2. Menyediakan sarana dan prasarana yang canggih dan mutakhir dalam menghasilkan darah yang sesuai standar <br>
                    3. Menjaga ketersediaan darah yang cukup, aman dan bermutu <br>
                    4. Membangun citra melalui komunikasi yang efektif dengan stakeholder<br></p>
                <div class="bg-dark mt-2 mb-2" style="height: 2px; width: 100%; opacity: 0.2;"></div>
            </div>
            <div class="collapse" id="struktur">
                <h4>Struktur Organisasi / Kepengurusan</h4>
                <div class="bg-danger mt-2 mb-2" style="height: 2px; width: 55%; opacity: 0.5;"></div>
                <p>
                    <p class="text-danger">Kepengurusan</p>
                    <h6>Sesuai keputusan Pengurus Daerah PMI DKI Jakarta No.104/KEP/PD.PMI//IX/2009 tentang organisasi dan tata kerja PMI DKI Jakarta pasal 36, struktur di UTD PMI DKI Jakarta terdiri dari :</h6>
                    1. Kepala Unit Transfusi Darah<br>
                    2. Wakil Kepala Unit Transfusi Darah<br>
                    3. Bagian Administrasi<br>
                     a. Subbagian Tata Usaha dan Kepegawaian<br>
                     b. Subbagian Logistik<br>
                     c. Subbagian peralatan teknis<br>
                     d. Subbagian Pengolahan Data<br>
                    4. Bagian Keuangan<br>
                     a. Subbagian Penerimaan<br>
                      b. Subbagian Pembukuan<br>
                     c. Subbagian Kas<br>
                    5. Bidang Pengadaan Darah<br>
                     a. Seksi Pengerahan, Pelestarian dan Penghargaan Donor<br>
                     b. Seksi Pengambilan Darah<br>
                     c. Seksi Konfirmasi Donor<br>
                    6. Bidang Pengolahan dan Penyimpanan Darah<br>
                     a. Seksi Komponen Darah<br>
                     b. Seksi Penyimpanan dan Distribusi<br>
                     c. Seksi Uji Saring IMLTD<br>
                     d. Seksi Pemeriksaan Ulang Golongan Darah<br>
                    7. Bidang Uji Mutu<br>
                     a. Seksi Uji Mutu Produk<br>
                     b. Seksi Uji Mutu Alat<br>
                    8. Bidang Pelayanan Darah<br>
                      a. Seksi Pelayanan Pasien<br>
                      b. Seksi Pelayanan Bank Darah<br>
                      c. Seksi Pelayanan Rujukan<br>
                    9. Komite Kualitas<br>
                    10. Komite Keselamatan dan Kesehatan Kerja (K3)<br>
                </p>
                <div class="bg-dark mt-2 mb-2" style="height: 2px; width: 100%; opacity: 0.2;"></div>
            </div>
        </div>
    </div>
    

</div>

@endsection