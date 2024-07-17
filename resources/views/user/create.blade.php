@extends('home')
@section('content')
<div class="col-lg-12">
    <h1 class="page-header">Kategori Data</h1>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Add Data Kategori
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form action="{{route('user.store')}}" method="post" role="form" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Nama User</label>
                                    <input type="text" class="form-control" name="name" placeholder="Name"><br>
                                    <div class="form-group">
                                        <label>Password</label><br>
                                        <input type="Password" class="form-control" name="Password" placeholder="Password"><br>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <label class="form-label">Select Role</label>
                                    <select class="form-control" name="isAdmin" id="isAdmin" required>
                                        <option value="0" {{old('isAdmin')==0 ? 'selected' : ''}}>User</option>
                                        <option value="1" {{old('isAdmin')==1 ? 'selected' : ''}}>Admin</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>

                            </form>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>

        @endsection