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
                    <a href="{{ url('/kategori') }}">Kategori</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-start">
                            <h4 class="card-title">add kategori</h4>
                        </div>
                        <div class="float-end">
                            <a href="{{ route('kategori.create') }}" class="btn btn-sm btn-primary">
                                Tambah Data
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="basic-datatables" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>nama Kategori</th>
                                        <th>deskripsi</th>
                                        <th>Image</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $no = 1;
                                    @endphp
                                    @foreach ($kategori as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->nama_kategori }}</td>
                                        <td>{{ $data->deskripsi }}</td>
                                        <td>
                                             <img src="{{ asset('/storage/kategori/' . $data->image) }}" class="rounded" style="height: 150px">
                                             </td>
                                            <td class="col">
                                                <form action="{{ route('kategori.destroy', $data->id) }}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <a href="{{ route('kategori.edit', $data->id) }}" class="btn btn-sm btn-warning">
                                                    Edit
                                                </a>

                                                <a href="{{ route('kategori.destroy', $data->id) }}" class="btn btn-sm btn-danger" data-confirm-delete="true">Delete</a>

                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $("#basic-datatables").DataTable();

        // Multi-Filter Select
        $("#multi-filter-select").DataTable({
            pageLength: 5,
            initComplete: function() {
                this.api().columns().every(function() {
                    var column = this;
                    var select = $(
                            '<select class="form-select"><option value=""></option></select>'
                        )
                        .appendTo($(column.footer()).empty())
                        .on('change', function() {
                            var val = $.fn.dataTable.util.escapeRegex($(this).val());
                            column.search(val ? '^' + val + '$' : '', true, false)
                                .draw();
                        });

                    column.data().unique().sort().each(function(d, j) {
                        select.append('<option value="' + d + '">' + d +
                            '</option>')
                    });
                });
            }
        });

        // Add Row
        $("#add-row").DataTable({
            pageLength: 5,
        });

        var action =
            '<td> <div class="form-button-action"> <button type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

        $("#addRowButton").click(function() {
            $("#add-row").dataTable().fnAddData([
                $("#addName").val(),
                $("#addPosition").val(),
                $("#addOffice").val(),
                action,
            ]);
            $("#addRowModal").modal('hide');
        });
    });
</script>
@endpush