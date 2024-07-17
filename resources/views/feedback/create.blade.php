@extends('home')

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Data Kategori</h3>
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
                    <a href="{{ url('/feedback') }}">feedback</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="{{ route('feedback.create') }}">feedback create</a>
                </li>
            </ul>
        </div>
        <div class="card mb-4">
            <div class="card-body pt-2 mt-1">
                <form id="formAccountSettings" method="POST" action="{{ route('feedback.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row mt-2 gy-4">
                        <div class="col-md-12">
                            <div class="form-floating form-floating-outline">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Masukkan nama kategori">
                                <label for="name">Name</label>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating form-floating-outline">
                                <input id="message" type="text" class="form-control @error('message') is-invalid @enderror" name="message" value="{{ old('message') }}" required autocomplete="message" placeholder="Masukkan message">
                                <label for="message">message</label>
                                @error('message')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating form-floating-outline">
                                <input id="message" type="text" class="form-control @error('message') is-invalid @enderror" name="message" value="{{ old('message') }}" required autocomplete="message" placeholder="Masukkan message">
                                <label for="message">message</label>
                                @error('message')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
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
