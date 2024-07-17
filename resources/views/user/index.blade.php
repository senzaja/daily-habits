@extends('home')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        {{ __('user') }}
                    </div>

                </div>

                <div class="card-body">
                    <div class="table-responsive text-nowrap">
                        <table class="table" id="example">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @php $i=1; @endphp
                                @foreach($user as $data)
                                @if($loop->first)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->email }}</td>
                                    <td>{{ $data->isAdmin == 1 ? 'Admin' : 'User' }}</td>
                                    <td>

                                    </td>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->email }}</td>
                                    <td>{{ $data->isAdmin == 1 ? 'Admin' : 'User' }}</td>
                                    <td>
                                        <form action="{{ route('user.destroy', $data->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" onsubmit="return confirm('Are You Sure ?');" class="btn btn-danger"  data-confirm-delete="true">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection