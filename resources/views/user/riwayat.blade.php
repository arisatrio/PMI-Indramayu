@extends('user/layout/main')

@section('title', 'Riwayat Donor | PMI Indramayu')

@section('content')
<div class="container">
  <div class="row pt-4 pb-4 justify-content-center">
    <div class="col-8">
      <div class="card shadow">
        <div class="card-body">
          @if($pendonor != null && $dataPendonor != null)
          <img src="{{ asset('/img/Logo-PMI-im.png') }}" class="img-fluid" alt="" >
          <div class="bg-danger mt-2" style="height: 2px"></div>
          <div class="row">
            <div class="col mt-3 pt-2">
              <h3 class="font-weight-normal">Halo, <b>{{ $dataPendonor->registrasi->nama }}</b></h3>
              <h6 class="font-weight-normal">Total Donor : <b>{{ $pendonor->count() }}</b></h6>
              <h6 class="font-weight-normal">Terakhir Donor : <b>{{ $dataPendonor->updated_at->formatLocalized('%A, %d %B %Y') }}</b></h6>
              <h6 class="font-weight-normal">Jadwal Donor Kembali : <b class="bg-danger text-white">{{ $dataPendonor->updated_at->addDays(60)->formatLocalized('%A, %d %B %Y') }}</b></h6>
            </div>
          </div>
          <hr>
          <div class="row mt-4">
            <div class="col">
              <table class="table table-bordered">
                <thead class="bg-danger">
                  <tr>
                    <th class="text-white" scope="col" style="width:5%">No</th>
                    <th class="text-white" scope="col">Tanggal</th>
                    <th class="text-white" scope="col">Lokasi</th>
                  </tr>
              </thead>
              <tbody>
                <?php $no = 1;?>
                @foreach($pendonor as $data)
                <tr>
                  <td>{{ $no++ }}</td>
                  <td>{{ $data->mcu->updated_at->format('d/m/Y H:i') }}</td>
                  <td>{{ $data->mcu->lokasi_mcu }}</td>
                </tr>
                @endforeach
              </tbody>
              </table>
            </div>
          </div>
          @else
          <div class="alert alert-danger">
            <h6 class="text-center"> NIK Anda belum terdaftar donor darah</h6>
          </div>
          @endif

        </div>
      </div>
    </div>
  </div>

</div>
@endsection