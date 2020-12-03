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
  
  <a href="{{ route('agenda-detail', $agenda1->id) }}">
  <div class="row mt-4">
    <div class="col-12">
      <div class="card shadow mb-5" >
        <div class="row no-gutters">
          <div class="col-md-8">
            <img src="{{ asset('img/agenda/poster/'. $agenda1->poster) }}" class="card-img" alt="." >
            <div class="card-img-overlay">
              <div class="card shadow" style="height: 75px; width: 100px;">
                <h3 class="text-center font-weight-bold mt-2 mb-0">{{ $agenda1->tgl_kegiatan->formatLocalized('%d') }}</h3>
                <p class="text-muted text-center mt-0">{{ $agenda1->tgl_kegiatan->formatLocalized('%B') }}</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card-body">
              <h1 class="card-title">{{ $agenda1->nama_kegiatan }}</h1>
              <p class="card-text"><i class="far fa-calendar-alt mr-2"></i>{{ $agenda1->tgl_kegiatan->formatLocalized('%A, %d %B %Y') }}</p>
              <p class="card-text"><i class="far fa-clock mr-2"></i> {{ $agenda1->jam_mulai }} - {{ $agenda1->jam_selesai }}</p>
              <p class="card-text"><i class="fas fa-map-marked-alt mr-2"></i>{{ $agenda1->alamat_kegiatan }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </a>
  
  <div class="row mt-4">
  @foreach($agenda as $data)
    <div class="col-4">
    <a href="{{ route('agenda-detail', $data->id) }}">
      <div class="card shadow mb-5">
        <img src="{{ asset('img/agenda/poster/'. $data->poster) }}" class="card-img" alt="." >
        <div class="card-img-overlay">
          <div class="card shadow" style="height: 50px; width: 75px;">
            <h5 class="text-center font-weight-bold mb-0">{{ $data->tgl_kegiatan->formatLocalized('%d') }}</h5>
            <small class="text-muted text-center mt-0 ">{{ $data->tgl_kegiatan->formatLocalized('%B') }}</small>
          </div>
        </div>
        <div class="card-body">
          <h1 class="card-title">{{ $data->nama_kegiatan }}</h1>
          <p class="card-text"><i class="far fa-calendar-alt mr-2"></i>{{ $data->tgl_kegiatan->formatLocalized('%A, %d %B %Y') }}</p>
          <p class="card-text"><i class="far fa-clock mr-2"></i> {{ $data->jam_mulai }} - {{ $data->jam_selesai }}</p>
          <p class="card-text"><i class="fas fa-map-marked-alt mr-2"></i>{{ $data->alamat_kegiatan }}</p>
        </div>
      </div>
      </a>
    </div>  
    @endforeach
    <div class="bg-secondary mt-2 mb-2" style="height: 2px; width: 100%; opacity: 0.5;"></div>
  </div>
</div>
@endsection