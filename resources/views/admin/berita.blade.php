@extends('admin/layout/main')

@section('title', 'Berita | Admin PMI')

@section('container')
<div class="container-fluid">
    <div class="row">
        <div class="col mb-4">
            <div class="d-sm-flex">
                <a href="" class="text-muted">
                    <i class="fas fa-newspaper fa-2x mr-2"></i>
                </a>
                <h3 class="text-gray-800">Berita</h3>
            </div>
        </div>
        <div class="col-sm-12 card shadow">
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col-sm-2">
                        <a href="{{ route('admin.berita-baru') }}" class="btn btn-danger">
                            <i class="fas fa-pen mr-2"></i>
                            Buat Berita
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        @if($berita != null)
                        <table class="table table-bordered table-hover">
                            <thead class="table-active">
                                <tr>
                                <th scope="col" style="width:10%">No</th>
                                <th scope="col">Judul</th>
                                <th scope="col" style="width:20%">Posted On</th>
                                <th scope="col" style="width:15%">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;?>
                                @foreach($berita as $data)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $data->judul_berita }}</td>
                                    <td>{{ $data->created_at }}</td>
                                    <td>
                                        <a href="{{ route('admin.berita-edit', $data->id) }}" class="btn btn-success btn-sm mr-2" title="Edit" data-toggle="tooltip">
                                            <i class="fa fa-edit" aria-hidden="true"></i>
                                        </a>
                                        <a href="" target="_blank" class="btn btn-primary btn-sm mr-2" title="Lihat" data-toggle="tooltip">
                                            <i class="fa fa-globe" aria-hidden="true"></i>
                                        </a>
                                        <a href="{{ route('admin.berita-hapus', $data->id) }}" class="btn btn-danger btn-sm mr-2" title="Hapus" data-toggle="tooltip">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @endif
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
</div>
@endsection