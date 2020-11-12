@extends('user/layout/main')

@section('title', 'FAQ | PMI Indramayu')

@section('content')
<div class="container">
    <div class="row mt-4 mb-4 pt-4 pb-4">

        <div class="col-sm-4">
            <div class="judul font-weight-bold" style="display: flex">
                <i class="fas fa-question-circle fa-2x mr-2" style="color: red; display: inline-block;"></i><h3>FAQ</h3>
            </div>
            <div class="bg-dark mt-2 mb-2" style="height: 2px; opacity: 0.5;"></div>

            <nav class="nav flex-column">
                <a class="nav-link text-muted mb-2" data-toggle="collapse" href="#satu" role="button" aria-expanded="false" aria-controls="satu">
                    <i class="fa fa-angle-right mr-2"></i>Tentang Donor Darah
                </a>
                <div class="bg-secondary" style="height: 1px; opacity: 0.2;"></div>
                <a class="nav-link text-muted mb-2" data-toggle="collapse" href="#dua" role="button" aria-expanded="false" aria-controls="dua">
                    <i class="fa fa-angle-right mr-2"></i>Donor Trombosit
                </a>
                <div class="bg-secondary" style="height: 1px; opacity: 0.2;"></div>
                <a class="nav-link text-muted mb-2" data-toggle="collapse" href="#tiga" role="button" aria-expanded="false" aria-controls="tiga">
                    <i class="fa fa-angle-right mr-2"></i>Menjadi Relawan
                </a>
                <div class="bg-secondary" style="height: 1px; opacity: 0.2;"></div>
            </nav>

        </div>
        <div class="col-sm-8">
            <div class="collapsed" id="satu" >
                <h4>Tentang Donor Darah</h4>
                <div class="bg-danger mt-2 mb-2" style="height: 2px; width: 35%; opacity: 0.5;"></div>
                    <p class="text-danger">Apakah dengan Donor Darah dapat menyehatkan?</p>
                    <p style="text-align:justify">Ya, Bila seseorang mendonorkan darahnya, tubuhnya akan menggantikan volume darah dalam waktu 48 jam setelah donor, dan semua sel darah merah yang hilang akan benar-benar diganti dalam waktu empat sampai delapan minggu dengan sel-sel darah merah yang baru. Proses pembentukan sel-sel darah merah yang baru akan membantu tubuh tetap sehat dan bekerja lebih efisien dan produktif.</p>
                    <p class="text-danger">Mengapa harus donor darah ?</p>
                    <p style="text-align:justify">Karena Donor darah adalah kegiatan yang positif dan mulia dan kita bisa menolong sesama. Donor darah bisa membantu mereka yang membutuhkan darah dalam situasi mendesak. Karena seringkali saat pasien dalam kondisi kritis, pihak PMI atau rumah sakit tak memiliki stok darah yang cukup. Nyatanya, donor darah tak hanya bermanfaat bagi penerima (resipien) saja, namun pendonor juga menerima manfaat yang luar biasa. Banyak penelitian yang berhasil membuktikan secara medis bahwa mendonorkan darah sebenarnya menguntungkan</p>
                    <p class="text-danger">Apa syarat-syarat untuk mendonorkan darah?</p>
                    <p style="text-align:justify">Sehat jasmani dan rohani; Usia 17 sampai dengan 60 tahun dan Sampai 65 tahun untuk pendonor darah yang sudah rutin mendonorkan darahnya sampai akhirnya berhenti atas pertimbangan dokter; Berat badan minimal 45 Kg; Tekanan darah normal (Sistole 100 - 180 dan Diastole 70 - 100); Kadar haemoglobin 12,5-17,0 gr/dL%; Demi keamanan dan keselamatan pendonor sesuai dengan PERMENKES 91 Tahun 2015 interval waktu sejak donor darah terkahir minimal 2 bulan.</p>
                    <p class="text-danger">Jangan menyumbangkan darah jika :</p>
                    <p style="text-align:justify">Mempunyai penyakit jantung dan paru; menderita kanker; menderita tekanan darah tinggi (hipertensi); menderita kencing manis (diabetes militus); memiliki kecenderungan perdarahan abnormal atau kelainan darah lainnya; menderita epilepsi dan sering kejang; menderita atau pernah menderita hepatitis B atau C; mengidap sifilis; ketergantungan narkoba; kecanduan minuman beralkohol; mengidap atau beresiko tinggi terhadap HIV/AIDS; dokter menyarankan untuk tidak menyubangkan darah karena alasan kesehatan;</p>
                    <p class="text-danger">Kapan harus menunda untuk menyumbangkan darah ?</p>
                    <p style="text-align:justify">Sedang sakit demam atau influenza tunggu 1 minggu setelah sembuh; setalah cabut gigi, tunggu 5 hari setalah sembuh; setelah operasi kecil, tunggu 6 bulan; setelah operasi besar, tunggu 1 tahun; setelah donor, tunggu 1 tahun; setelah tato, tindik, tusuk jarum, dan transplantasi tunggu 1 tahun; bila kontak erat dengan penderita hepatitis, tunggu 1 tahun; sedang hamil, tunggu 6 setelah melahirkan; sedang menyusui, tunggu 3 bulan setelah berhenti menyusui; setelah sakit malaria, tunggu 3 tahun setalah bebas dari gejala malaria; setelah berkunjung dari daerah endemis malaria, tunggu 1 tahun; bila tinggal di daerah endemis malaria selama 5 tahun berturut-turut, tunggu 3 tahun setelah keluar dari daerah tersebut; bila sakit tipus, tunggu 6 bulan setelah sembuh; setelah vaksin, tunggu 8 minggu; ada gejala alergi tunggu 1 minggu setalah sembuh; ada infeksi kulit pada daerah yang akan ditusuk, tunggu 1 minggu setelah sembuh;</p>
                <div class="bg-dark mt-2 mb-2" style="height: 2px; width: 100%; opacity: 0.2;"></div>
            </div>
            <div class="collapse" id="dua">
                <h4>Donor Trombosit</h4>
                <div class="bg-danger mt-2 mb-2" style="height: 2px; width: 30%; opacity: 0.5;"></div>
                    <p class="text-danger">Donor Trombosit Apheresis ?</p>
                    <p>Apheresis adalah metode baru yang aman dalam pengkoleksian komponen darah, mudah dan lebih efektif daripada cara konvensional. Dalam donasi darah pada metode apheresis, hanya komponen darah tertentu yang dikoleksi (seperti trombosit, plasma atau sel darah merah) sehingga komponen yang tidak diperlukan dikembalikan kedalam tubuh pendonor. Satu kantong donor trombosit apheresis setara dengan 6 - 10 kantong donor trombosit biasa. Sebuah donor apheresis dari donor tunggal sangat baik mengurangi resiko terjadinya reaksi sistem imun pada proses donor dan juga mengurangi resiko terinfeksinya bakteri karena hanya menerima darah dari donor tunggal sedangkan cara konvensional berasal dari banyak pendonor.</p>
                    <p class="text-danger">Apa yang disebut trombosit (platelet)?</p>
                    <p style="text-align:justify">Trombosit adalah komponen dalam darah yang berperan penting untuk pembekuan darah. (Sering disebut platelet)</p>
                    <p class="text-danger">Siapa yang memerlukan donor trombosit ?</p>
                    <p style="text-align:justify">Pasien yang terganggu sistem pembekuan darahnya karena sering mendapatkan pengobatan dengan radiasi, kemo terapi, atau cangkok Stem Cell, leukimia, kanker, kelainan darah serta demam berdarah dengue (DBD).</p>
                    <p class="text-danger">Adakah persyaratan khusus untuk menjadi donor trombosit apheresis ?</p>
                    <p style="text-align:justify">Kesehatan umum baik, tidak sedang demam, batuk/flu; tidak sedang minum obat (aspirin, antibiotika) dalam satu minggu terakhir; tensi darah sistole 110 - 150 mmHg dan diastole 70 - 90 mmHg; berat badan minimal 55 Kg; kadar haemoglobin 12,5 - 17 gr/dl; bersedia menandatangani informed concent.</p>
                    <p class="text-danger">Bagaimana teknik donor trombosit berlangsung ?</p>
                    <p style="text-align:justify">Darah dari tubuh dialirkan ke kantong darah kemudian diproses oleh mesin pemisah darah untuk memisahkan trombosit dari whole blood, dan komponen darah lain akan dikembalikan kedalam tubuh donor. Proses pengambilan darah, pemisahan trombosit dan pengembalian darah donor disebut dengan satu putaran (1 siklus). Hal ini dapat dilakukan berulang sesuai dengan jumlah trombosit yang kita inginkan. Prosedur pengambilan trombosit apheresis memakan waktu 40 menit s.d. 1,5 jam.</p>
                    <p class="text-danger">Apakah keuntungan bagi pendonor trombosit apheresis?</p>
                    <p style="text-align:justify">Sekali menjadi pendonor apheresis dapat menyelamatkan 1 - 2 orang pasien yang berbeda; Interval donor trombosit apheresis minimal 15 hari sekali dan maksimal 24 kali dalam setahun karena trombosit akan pulih dalam 2x24 jam; Dengan donor apheresis secara tidak langsung dapat mengetahui status kesehatan secara berkala, meliputi : tekanan darah, nadi, tinggi badan, berat badan, hasil labolatorium (haemoglobin, trombosit, leukosit, dll), mengetahui hasil labolatorium infeksi menular lewat donor darah (IMLTD) seperti HIV, Hepatitis B, Hepatitis C, Siphilis;</p>
                    <p class="text-danger">Apakah keuntungan bagi pasien penerima trombosit apheresis?</p>
                    <p style="text-align:justify">Lebih meningkatkan jumlah trombosit setelah donor. Selain itu, mengurangi reaksi panas/demam akibat reaksi tranfusi darah non hemotik, mengurangi reaksi HLA Alloimuniasasi, dan mengurangi penularan infeksi Cytomegalovirus (CMV) serta bakteri; Dengan trombosit apheresis pasien hanya butuh 1 kantong trombosit apheresis (yang mewakili 6 - 10 kantong darah trombosit konvensional)</p>
                <div class="bg-dark mt-2 mb-2" style="height: 2px; width: 100%; opacity: 0.2;"></div>
            </div>
            <div class="collapse" id="tiga" >
                <h4>Menjadi Relawan</h4>
                <div class="bg-danger mt-2 mb-2" style="height: 2px; width: 30%; opacity: 0.5;"></div>
                <p class="text-danger">Apakah pendonor darah termasuk relawan Palang Merah Indonesia?</p>
                <p style="text-align:justify">Peraturan Organisasi Palang Merah Indonesia, Nomor: 004/PO/PP PMI/I/2011 tentang sumber daya manusia dan pengembangannya menyebutkan pendonor darah sukarela/DDS termasuk dalam relawan PMI. Bergabunglah menjadi relawan PMI dengan mendonorkan darah anda, tetesan darah anda sangat berarti bagi sesama.</p>
                <div class="bg-dark mt-2 mb-2" style="height: 2px; width: 100%; opacity: 0.2;"></div>
            </div>
        </div>
    </div> 
</div>
@endsection