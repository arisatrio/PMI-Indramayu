@extends('user/layout/main')

@section('title', 'Manfaat Donor | PMI Indramayu')

@section('content')
<div class="container">
    <div class="row mt-4 mb-4 pt-4 pb-4">

        <div class="col-sm-4">
            <div class="judul font-weight-bold" style="display: flex">
                <i class="fa fa-plus fa-2x mr-2" style="color: red; display: inline-block;"></i><h2>INFORMASI</h2>
            </div>
            <div class="bg-dark mt-2 mb-2" style="height: 2px; opacity: 0.5;"></div>

            <nav class="nav flex-column">
                <a class="nav-link text-muted mb-2" data-toggle="collapse" href="#satu" role="button" aria-expanded="false" aria-controls="satu">
                    <i class="fa fa-angle-right mr-2"></i>Manfaat Donor
                </a>
                <div class="bg-secondary" style="height: 1px; opacity: 0.2;"></div>
                <a class="nav-link text-muted mb-2" data-toggle="collapse" href="#dua" role="button" aria-expanded="false" aria-controls="dua">
                    <i class="fa fa-angle-right mr-2"></i>Prosedur Donor
                </a>
                <div class="bg-secondary" style="height: 1px; opacity: 0.2;"></div>
                <a class="nav-link text-muted mb-2" data-toggle="collapse" href="#tiga" role="button" aria-expanded="false" aria-controls="tiga">
                    <i class="fa fa-angle-right mr-2"></i>Prosedur Permintaan Darah
                </a>
                <div class="bg-secondary" style="height: 1px; opacity: 0.2;"></div>
                <a class="nav-link text-muted mb-2" data-toggle="collapse" href="#empat" role="button" aria-expanded="false" aria-controls="empat">
                    <i class="fa fa-angle-right mr-2"></i>Kebutuhan Darah
                </a>
                <div class="bg-secondary" style="height: 1px; opacity: 0.2;"></div>
            </nav>

        </div>
        <div class="col-sm-8">
            <div class="collapsed" id="satu" >
                <h4>Informasi Manfaat Donor</h4>
                <div class="bg-danger mt-2 mb-2" style="height: 2px; width: 40%; opacity: 0.5;"></div>
                <p class="text-danger">Manfaat Donor Darah</p>
                <p class="font-italic">Kita sehat, mereka selamat!</p>
                <p>Pernahkah Anda melakukan donor darah? Beruntunglah jika pernah atau bahkan rutin melakukannya berikut ini manfaat dari donor darah : 
                    <ol>
                        <li>Bentuk kepedulian terhadap sesama</li>
                        <li>Memperpanjang hidup oran lain</li>
                        <li>Membantu hidup orang lain</li>
                        <li>Satu kantong darah dapat menyelamatkan 3 nyawa</li>
                        <li>Membantu menurunkan berat badan</li>
                        <li>Membantu membakar kalori</li>
                        <li>Deteksi dini resiko kesehatan</li>
                        <li>Melindungi jantung</li>
                        <li>Mencegah stroke</li>
                        <li>Mengatur kontrol kesehatan</li>
                        <li>Meningkatkan sel darah merah</li>
                        <li>Meningkatkan kapasitas paru-paru dan ginjal</li>
                        <li>Meningkatkan kesehatan psikologis</li>
                        <li>Membantu sirkulasi darah</li>
                        <li>Memaksimalkan darah dalam paru-paru</li>
                        <li>Menurunkan zat seng dalam darah</li>
                        <li>Memperbaharui sel darah baru</li>
                        <li>Mencegah resiko kesehatan</li>
                        <li>Mencegah penyakit langka</li>
                        <li>Menghilangkan kaku di pundak</li>
                        <li>Mengalahkan kelebihan zat besi</li>
                        <li>Mengetahui lebih lanjut tentang tipe darah individu</li>
                    </ol>
                </p>
                <div class="bg-dark mt-2 mb-2" style="height: 2px; width: 100%; opacity: 0.2;"></div>
            </div>
            <div class="collapse" id="dua" >
                <h4>Informasi Prosedur Donor</h4>
                <div class="bg-danger mt-2 mb-2" style="height: 2px; width: 40%; opacity: 0.5;"></div>
                <p class="text-danger">Jika Anda sudah memenuhi syarat untuk donor darah, yuk simak tahapan-tahapan dalam mendonorkan darah :</p>
                <p>
                    1. Tahap Registrasi
                        <ul>Mengisi formulir pendaftaran dan kuisioner kesehatan</ul>
                    2. Tahap Pemeriksaan Pendahuluan
                        <ul>Pengukuran berat badan</ul>
                        <ul>Pemeriksaan kadar haemoglobin darah</ul>
                        <ul>Pemeriksaan golongan darah bagi pendonor pemula</ul>
                    3. Tahap Pemeriksaan Kesehatan oleh Dokter
                        <ul>Anamnesis</ul>
                        <ul>Pemeriksaan tekanan darah</ul>
                        <ul>Pemeriksaan fisik sederhana</ul>
                    4. Tahap Pengambilan Darah Donor
                        <ul>Cuci lengan donor</ul>
                        <ul>Pengambilan darah</ul>
                        <ul>Pengambilan sampel darah</ul>
                    5. Tahap Administrasi
                        <ul>Mengambil kartu donor dan vitamin</ul>
                    6. Tahap Pemulihan
                        <ul>Pendonor dianjurkan untuk istirahat dan menikmati hidangan ringan yang kami sajikan</ul>
                </p>
                <div class="bg-dark mt-2 mb-2" style="height: 2px; width: 100%; opacity: 0.2;"></div>
            </div>
            <div class="collapse" id="tiga" >
                <h4>Informasi Prosedur Permintaan Darah</h4>
                <div class="bg-danger mt-2 mb-2" style="height: 2px; width: 60%; opacity: 0.5;"></div>
                <p class="text-danger">Prosedur Permintaan Darah</p>
                <p style="text-align:justify">Yang menentukan pasient memerlukan darah adalah dokter yang merawat.</p>
                <p style="text-align:justify">Formulir dan contoh darah dikirim ke Bank darah di rumah sakit atau ke laboratorium UTDD PMI Kabupaten Indramayu, apabila :persedian darah yang diminta oleh dokter yang merawat tidak ada di Bank darah rumah sakit tidak mempunyai bank darah.</p>
                <p style="text-align:justify">Atas dasar permintaan tersebut diadakan pemeriksaan reaksi silang antara contoh darah donor dengan contoh darah pasien, yang memakan waktu lebih kurang 1-2 jam. Pemeriksaan ini mutlak harus dilakukan walaupun golongan darah pasient dengan golongan darah donor sama. Bila pada pemeriksaan silang tidak terdapat kelainan maka barulah darah donor diberikan kepada pasien. Bila pemeriksaan silang ditemukan kalainan atau ketidak cocokan perlu dilakukan pemeriksaan lanjutan untuk mencari sebab kelainan atau ketidakcocokan tersebut</p>
                <div class="bg-dark mt-2 mb-2" style="height: 2px; width: 100%; opacity: 0.2;"></div>
            </div>
            <div class="collapse" id="empat" >
                <h4>Informasi Kebutuhan Darah</h4>
                <div class="bg-danger mt-2 mb-2" style="height: 2px; width: 45%; opacity: 0.5;"></div>
                <p class="text-danger">$$$$$$$ Saat ini stok darah tersedia</p>
                <p>Dapat menghubungi petugas Customer Service kami. 
                021-390 6666 ext. 151</p>
                <div class="bg-dark mt-2 mb-2" style="height: 2px; width: 100%; opacity: 0.2;"></div>
            </div>
        </div>
    </div> 
</div>
@endsection