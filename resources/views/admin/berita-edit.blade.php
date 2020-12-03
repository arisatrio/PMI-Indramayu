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
                <div class="row">
                    <div class="col-sm-2">
                        <button class="btn btn-success mb-4" onclick="goBack()"><i class="fa fa-arrow-left mr-2"></i>Kembali</button>
                    </div>
                </div>
                <form method="POST" action="{{ route('admin.berita-update', $berita->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-8">
                        <input type="text" value="{{ $berita->judul_berita }}" class="form-control mb-3 @error('judul_berita') is-invalid @enderror" id="judul_berita" name="judul_berita" placeholder="Masukkan Judul Berita">
                        @error('judul_berita')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input @error('gambar_berita') is-invalid @enderror" id="gambar_berita" name="gambar_berita">
                                <label class="custom-file-label" for="gambar_berita">Masukkan Gambar</label>
                                <input type="hidden" name="hidden_image" value="{{ $berita->gambar_berita }}" />
                                @error('gambar_berita')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea class="form-control @error('isi_berita') is-invalid @enderror" id="summernote" rows="20" name="isi_berita">{{ $berita->isi_berita }}</textarea>
                            @error('isi_berita')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row float-right">
                    <div class="col-md-2">
                        <button class="btn btn-md btn-primary mt-4" type="submit">
                            POST
                        </button>
                    </div>
                </div>
                </form>
                <script>
                $('#summernote').summernote({
                    toolbar: [
                        ['font', ['bold', 'underline', 'clear']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['insert', ['link', 'picture', 'video']],
                        ['view', ['fullscreen', 'help']],
                    ],
                    
                    placeholder: 'Isi Berita . . .',
                    tabsize: 2,
                    height: 300
                });
                </script>

                <hr>
            </div>
        </div>
    </div>
</div>
@endsection