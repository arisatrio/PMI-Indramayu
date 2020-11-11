@extends('admin/layout/main')

@section('title', 'Pertanyaan dan Saran | Admin PMI')

@section('container')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
        <div class="card shadow">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="d-sm-flex">
                            <a href="" class="text-muted">
                                <i class="fas fa-envelope fa-2x mr-2"></i>
                            </a>
                            <h3 class="text-gray-800">Pertanyaan dan Saran</h3>
                        </div>
                    </div>
                </div>
                
                <div class="bg-danger mb-5" style="height: 2px; width: 30%;"></div>
                
                <div class="container">
                    <div class="row">
                        <button class="btn btn-success mb-4" onclick="goBack()"><i class="fa fa-arrow-left mr-2"></i>Kembali</button>
                        <form method="POST" action="{{ route('admin.komunikasi-hapus', $komunikasi->id) }}">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger mb-4 ml-2"><i class="fa fa-trash mr-2"></i>Hapus</button>
                        </form>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h4><b>Ini adalah sebuah pertanyaan</b></h4>
                            <h6>Dikirim oleh <b>{{ $komunikasi->nama }}</b></h6>
                            <small>6 Nov</small>
                            <p class="mt-4">
                                {{ $komunikasi->isi_komunikasi }}
                            </p>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col">
                            @empty($komunikasi->isi_balasan)
                            <form method="POST" action="{{ route('admin.komunikasi-dibalas', $komunikasi->id) }}"> 
                                @csrf
                                <textarea type="text" name="isi_balasan" class="form-control" rows="5"></textarea>
                                <button class="btn btn-danger float-right mt-2" type="submit">Balas</button>
                            </form>
                            @endempty

                            @isset($komunikasi->isi_balasan)
                            <p class="float-right">
                                {{ $komunikasi->isi_balasan }}
                            </p>
                            @endisset
                        </div>
                    </div>
                </div>
                
                
                
                
            </div>
        </div>
        </div>
    </div>
</div>
@endsection