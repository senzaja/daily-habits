@extends('home')

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Edit Kategori</h3>
            <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                    <a href="{{ url('/') }}">
                        <i class="icon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/kategori') }}">Kategori</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="{{ route('kategori.edit', $kategori->id) }}">Edit Kategori</a>
                </li>
            </ul>
        </div>
        <div class="card mb-4">
            <div class="card-body pt-2 mt-1">
                <form id="formAccountSettings" method="POST" action="{{ route('kategori.update', $kategori->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT') <!-- Menggunakan metode PUT untuk update -->
                    <div class="row mt-2 gy-4">
                        <div class="col-md-12">
                            <div class="form-floating form-floating-outline">
                                <input id="nama_kategori" type="text" class="form-control @error('nama_kategori') is-invalid @enderror" name="nama_kategori" value="{{ old('nama_kategori', $kategori->nama_kategori) }}" required autocomplete="nama_kategori" autofocus placeholder="Masukkan nama kategori">
                                <label for="nama_kategori">Nama Kategori</label>
                                @error('nama_kategori')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating form-floating-outline">
                                <input id="deskripsi" type="text" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" value="{{ old('deskripsi', $kategori->deskripsi) }}" required autocomplete="deskripsi" placeholder="Masukkan deskripsi">
                                <label for="deskripsi">Deskripsi</label>
                                @error('deskripsi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Image</label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ $kategori->image }}"></input>
                            @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mt-4">
                        <button type="submit" class="btn btn-primary me-2 waves-effect waves-light">Simpan</button>
                        <button type="reset" class="btn btn-outline-secondary waves-effect">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
