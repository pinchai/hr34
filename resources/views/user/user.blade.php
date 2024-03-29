@extends('master')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">User</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">User</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <a href="{{ url('/admin/create_user') }}">
                                    <button type="button" class="btn btn-primary">
                                        <i class="fas fa-plus-circle"></i>
                                        Add
                                    </button>
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-borderless table-striped">
                                        <thead>
                                        <tr class="bg-primary">
                                            <th>No.</th>
                                            <th>Name</th>
                                            <th>Gender</th>
                                            <th>Phone</th>
                                            <th>Role</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($data as $item)
                                            <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>
                                                <span style="text-transform: capitalize">{{ $item->gender }}</span>
                                            </td>
                                            <td>{{ $item->phone }}</td>
                                            <td>
                                                <span
                                                    style="
                                                    text-transform: capitalize;
                                                     background-color: yellow;
                                                      color: red; border-radius: 5px"
                                                >
                                                    {{ $item->role }}
                                                </span>
                                            </td>
                                            <td>
                                                <a href="{{ route('index_update_user') }}?id={{ $item->id }}">
                                                    <button>
                                                        <i class="far fa-edit"></i>
                                                    </button>
                                                </a>
                                                <a href="{{ route('index_confirm_delete') }}?id={{ $item->id }}">
                                                    <button class="ml-2 text-danger">
                                                        <i class="far fa-trash-alt"></i>
                                                    </button>
                                                </a>
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
    </div>
@endsection
