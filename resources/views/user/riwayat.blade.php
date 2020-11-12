@extends('user/layout/main')

@section('title', 'PMI Indramayu')

@section('content')
<header class="masthead2 text-white ">
  <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 float-left ">
          <h1 class="mb-5"> <i class="fas fa-notes-medical fa-1x mr-2"></i>RIWAYAT</h1>
        </div>
        <form>
          <div class="form-row">
            <div class="col-12 col-md-9 mb-2 mb-md-0">
            </div>
            <div class="col-12 col-md-3">
            </div>
          </div>
        </form>
    </div>
  </div>
</header>
<div class="container">
    <div class="row mt-5">
        <div class="col">
            <div class="card text-white bg-danger mb-3" style="max-width: 20rem;">
                <div class="card-header"><i class="fas fa-user"></i> RIYANTO</div>
                    <div class="card-body">
                    <h5 class="card-title">Jumlah donor yang ke-3</h5>
                    <p class="card-text">Tanggal Donor Kembali : 01-02-2021</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row mt-5">
        <div class="col">
          <table class="table">
            <thead class="bg-danger">
                <tr>
                <th class="text-white"style="text-align:center" scope="col">Nomor</th>
                <th class="text-white"style="text-align:center" scope="col">Taggal</th>
                <th class="text-white"style="text-align:center" scope="col">Lokasi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th style="text-align:center" scope="row">1</th>
                <td style="text-align:center">01-11-2020</td>
                <td style="text-align:center">Kampus POLINDRA</td>
                </tr>
                <tr>
                <th style="text-align:center" scope="row">2</th>
                <td style="text-align:center">31-10-2020</td>
                <td style="text-align:center">Kampus Universitas Wiralodra</td>
                </tr>
                <tr>
                <th style="text-align:center" scope="row">3</th>
                <td style="text-align:center">26-10-2020</td>
                <td style="text-align:center">RSUD Indramayu</td>
                </tr>
            </tbody>
            </table>
            <div class="bg-danger mt-4 mb-2" style="height: 2px; width: 100%; opacity: 0.5;"></div>
        </div>
    </div>
</div>
@endsection