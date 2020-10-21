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
                    <i class="fa fa-angle-right mr-2"></i>Profil UTD PMI Kabupaten Indramayu
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
                <h4>Profil UTD PMI Kabupaten Indramayu</h4>
                <div class="bg-danger mt-2 mb-2" style="height: 2px; width: 35%; opacity: 0.5;"></div>
                <p style="text-align:justify">
                    Unit Transfusi Darah merupakan salah satu unit kerja yang ada di PMI Kabupaten Indramayu. Tugas dan fungsi utamanya ialah meningkatkan derajat kesehatan melalui pengelolaan darah yang berkualitas, mewujudkan pelayanan penyediaan darah yang aman, tepat waktu, terjangkau dan berkesinambungan.</p>
                    <p style="text-align:justify">
                    Keamanan dan mutu darah selalu diutamakan sehingga hanya di UTD PMI Kabupaten Indramayu yang telah melakukan pengujian darah paling lengkap dengan metode paling mutakhir baik terhadap infeksi menular lewat transfusi darah, kelainan golongan darah pada pendonor dan untuk quality control (QC) produknya. Hampir semua peralatan yang digunakan dalam pengambilan, pengolahan, dan pengujian menggunakan mesin otomatisasi. UTD PMI Kabupaten Indramayu juga telah menggunakan sistem informasi sebagai penunjang pelayanan sejak tahun 2000 sampai dengan saat ini dengan berbagai pengembangannya yang dikenal dengan nama Sistem Informasi Transfusi Darah (SITD), yang juga terhubung dengan website UTD dan mesin-mesin pengujian dan pengolahan.</p>
                    <p style="text-align:justify">
                    UTD PMI Kabupaten Indramayu dengan 456 pegawai memberikan pelayanan donor darah dan pelayanan darah bagi pasien selama 24 jam tanpa henti ke beberapa Rumah Sakit yang ada diKabupaten Indramayu. Untuk mendekatkan pelayanan kepada masyarakat, telah dibuka UTD Cabang di PMIKabupaten Indramayu, PMI Kabupaten Indramayu yang beroperasional setiap harinya. Sedangkan di PMI Kabupaten Indramayu telah ada kegiatan donor darah walaupun belum setiap hari. UTD PMI Kabupaten Indramayu selain menerima donor darah di gedung PMI Kabupaten Indramayu juga memiliki armada Mobil Unit untuk melayani kegiatan donor darah yang diselenggarakan di instansi.
                </p>Indramayu
                <div class="bg-dark mt-2 mb-2" style="height: 2px; width: 100%; opacity: 0.2;"></div>
            </div>
            <div class="collapse" id="moto">
                <h4>Moto, Visi & Misi</h4>
                <div class="bg-danger mt-2 mb-2" style="height: 2px; width: 30%; opacity: 0.5;"></div>
                    <p class="text-danger">Moto</p>
                    <p class="font-italic">Bersama untuk sosial dan kemanusiaan</p>
                    <p class="text-danger">VISI</p>
                    <p class="font-italic">“ UTD PMI Kabupaten Indramayumenjadi UTD paling terdepan tahun 2025 “</p>
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
                    <h6>Sesuai keputusan Pengurus Daerah PMI Kabupaten Indramayu No.104/KEP/PD.PMI//IX/2009 tentang organisasi dan tata kerja PMI Kabupaten Indramayu pasal 36, struktur di UTD PMI Kabupaten Indramayu terdiri dari :</h6>
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