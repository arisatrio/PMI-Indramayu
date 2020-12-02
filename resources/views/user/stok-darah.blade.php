@extends('user/layout/main')

@section('title', 'Stok Darah | PMI Indramayu')

@section('content')
<header class="masthead2 text-white ">
  <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 float-left ">
          <h1 class="mb-5"> <i class="fas fa-tint fa-1x mr-2"></i>STOK DARAH</h1>
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
<div class="card-footer text-white bg-danger text-center ">
    13-11-2020  15:00 WIB
</div>
<div class="container">
    <div class="row mt-5">
        <div class="col">
          <table class="table">
            <thead class="bg-danger">
                <tr>
                <th class="text-white"style="text-align:center" scope="col"></th>
                <th class="text-white"style="text-align:center" scope="col">Golongan Darah</th>
                <th class="text-white"style="text-align:center" scope="col">Jumlah</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th style="text-align:center" scope="row">
                    <i class="fas fa-tint m-auto text-danger"></i>
                </th>
                <td style="text-align:center">A</td>
                <td style="text-align:center">88 Kantong</td>
                </tr>
                <tr>
                <th style="text-align:center" scope="row">
                    <i class="fas fa-tint m-auto text-danger"></i>
                </th>
                <td style="text-align:center">B</td>
                <td style="text-align:center">110 Kantong</td>
                </tr>
                <tr>
                <th style="text-align:center" scope="row">
                    <i class="fas fa-tint m-auto text-danger"></i>
                </th>
                <td style="text-align:center">O</td>
                <td style="text-align:center">155 Kantong</td>
                </tr>
                <th style="text-align:center" scope="row">
                    <i class="fas fa-tint m-auto text-danger"></i>
                </th>
                <td style="text-align:center">AB</td>
                <td style="text-align:center">35 Kantong</td>
                </tr>
            </tbody>
            </table>
            <div class="bg-danger mt-4 mb-2" style="height: 2px; width: 100%; opacity: 0.5;"></div>
        </div>
    </div>
</div>
@endsection