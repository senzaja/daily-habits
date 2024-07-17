@extends("home")
@section('content')
<div class="col-lg-12">
    <h1 class="page-header">Data Kategori</h1>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Show Data Kategori
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label>Nama Kategori</label>
                        <input type="text" class="form-control" value="{{ $kategori->nama_kategori }}" readonly disabled>
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <input type="text" class="form-control" value="{{ $kategori->deskripsi }}" readonly disabled>
                    </div>
                    <a href="{{ route('kategori.index') }}" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection