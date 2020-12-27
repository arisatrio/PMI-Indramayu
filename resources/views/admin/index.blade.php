@extends('admin/layout/main')

@section('title', 'Dashboard | Admin PMI')

@section('container')
<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
    <a class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col mb-4">
            <div class="d-sm-flex">
                <a href="" class="text-muted">
                    <i class="fas fa-tachometer fa-2x mr-2"></i>
                </a>
                <h3 class="text-gray-800">Dashboard</h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2 pb-3">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Data Pendonor</div>
                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $pendonor->count() }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-tint fa-2x text-gray-300"></i>
                        </div>
                    </div>
                    <a href="{{ route('admin.pendonor') }}" class="text-muted small">Lihat detail >></a>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2 pb-3">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Data Registrasi Donor</div>
                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $registrasi->count() }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                    <a href="{{ route('admin.registrasi') }}" class="text-muted small">Lihat detail >></a>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2 pb-3">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pengajuan Agenda</div>
                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $agenda->count() }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar-alt fa-2x text-gray-300"></i>
                        </div>
                    </div>
                    <a href="{{ route('admin.agenda') }}" class="text-muted small">Lihat detail >></a>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2 pb-3">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pertanyaan & Saran</div>
                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $komunikasi->count() }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-envelope fa-2x text-gray-300"></i>
                        </div>
                    </div>
                    <a href="{{ route('admin.komunikasi') }}" class="text-muted small">Lihat detail >></a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Grafik Harian Pendonor</h6>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        {!! $chart->container() !!}
                    </div>
                </div>
            </div>
        </div>
        <!-- Pie Chart -->
        <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Grafik Pendonor Laki-laki & Perempuan</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-pie pt-4 pb-2">
                        {!! $chart2->container() !!}
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>

<script src=https://cdnjs.cloudflare.com/ajax/libs/echarts/4.0.2/echarts-en.min.js charset=utf-8></script>
{!! $chart->script() !!}
{!! $chart2->script() !!}
@endsection