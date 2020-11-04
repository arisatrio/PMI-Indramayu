@extends('user/layout/main')

@section('title', 'Agenda | PMI Indramayu')

@section('content')
<header class="masthead1 text-white ">
  <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 float-left ">
          <h1 class="mb-5"> <i class="icon-calendar fa-1x mr-2"></i>AGENDA</h1>
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
  <div class="row mt-4">
    <div class="col">
      <form>
        <div class="form-row">
          <div class="col-6">
            <input type="text" class="form-control" placeholder="Lokasi">
          </div>
          <div class="col-6">
            <select id="inputState" class="form-control">
              <option selected>Waktu</option>
              <option>...</option>
            </select>
          </div>
        </div>
        <div class="form-row mt-2">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Cari</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <div class="bg-secondary mt-4 mb-2" style="height: 2px; width: 100%; opacity: 0.5;"></div>

  <div class="row mt-4">
    <div class="col-12">
      <div class="card shadow mb-5">
        <div class="row no-gutters">
          <div class="col-md-8">
            <img src="img/logo-pmi.png" class="card-img" alt="...">
            <div class="card-img-overlay">
              <div class="card shadow" style="height: 75px; width: 75px;">
                <h3 class="text-center font-weight-bold mt-2 mb-0">1</h3>
                <p class="text-muted text-center mt-0">Nov</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card-body">
              <h1 class="card-title">Donor Darah Kampus Polindra</h1>
              <p class="card-text"><i class="far fa-calendar-alt"></i> Senin, 01-11-2020</p>
              <p class="card-text"><i class="far fa-clock"></i> 08:00 - 12:00 WIB</p>
              <p class="card-text"><i class="fas fa-map-marked-alt"></i> Kampus POLINDRA</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row mt-4">
    <div class="col-4">
      <div class="card shadow mb-5">
        <img src="img/logo-pmi.png" class="card-img-top" alt="...">
        <div class="card-img-overlay">
          <div class="card shadow" style="height: 50px; width: 50px;">
            <h5 class="text-center font-weight-bold mb-0">1</h5>
            <p class="text-muted text-center mt-0 ">Nov</p>
          </div>
        </div>
        <div class="card-body">
          <h1 class="card-title">Donor Darah Balai Desa Jatibarang</h1>
          <p class="card-text"><i class="far fa-calendar-alt"></i> Senin, 01-11-2020</p>
          <p class="card-text"><i class="far fa-clock"></i> 08:00 - 12:00 WIB</p>
          <p class="card-text"><i class="fas fa-map-marked-alt"></i> Balai Desa Jatibarang</p>
        </div>
      </div>
    </div>
    <div class="col-4">
      <div class="card shadow mb-5">
        <img src="img/logo-pmi.png" class="card-img-top" alt="...">
        <div class="card-img-overlay">
          <div class="card shadow" style="height: 50px; width: 50px;">
            <h5 class="text-center font-weight-bold mb-0">31</h5>
            <p class="text-muted text-center mt-0 ">Oct</p>
          </div>
        </div>
        <div class="card-body">
          <h1 class="card-title">Donor Darah RSUD Indramayu</h1>
          <p class="card-text"><i class="far fa-calendar-alt"></i> Sabtu, 31-10-2020</p>
          <p class="card-text"><i class="far fa-clock"></i> 08:00 - 12:00 WIB</p>
          <p class="card-text"><i class="fas fa-map-marked-alt"></i> RSUD Indramayu</p>
        </div>
      </div>
    </div>
    <div class="col-4">
      <div class="card shadow mb-5">
        <img src="img/logo-pmi.png" class="card-img-top" alt="...">
        <div class="card-img-overlay">
          <div class="card shadow" style="height: 50px; width: 50px;">
            <h5 class="text-center font-weight-bold mb-0">26</h5>
            <p class="text-muted text-center mt-0 ">Oct</p>
          </div>
        </div>
        <div class="card-body">
          <h1 class="card-title">Donor Darah Kampus Universitas Wiralodra</h1>
          <p class="card-text"><i class="far fa-calendar-alt"></i> Senin, 26-10-2020</p>
          <p class="card-text"><i class="far fa-clock"></i> 08:00 - 12:00 WIB</p>
          <p class="card-text"><i class="fas fa-map-marked-alt"></i> Kampus Universitas Wiralodra</p>
        </div>
      </div>
    </div>

    <div class="bg-secondary mt-2 mb-2" style="height: 2px; width: 100%; opacity: 0.5;"></div>
  
  </div>
</div>

@endsection