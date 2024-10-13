@extends('layouts.app')
@section('title')
    Users
@endsection

@section('content')
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-md-6">
                <h1 class="h3 mb-3"><strong>All</strong> Users</h1>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <table class="table dataTable table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Date Created</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ date('Y-m-d',strtotime($user->created_at)) }}</td>
                                <td>
                                    <a href="{{ route('admin.user.delete',['id'=>$user->id]) }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- BEGIN primary modal -->
            <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Delete User</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body m-3">
                            <p class="mb-0">Are you sure to delete this user?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <a class="btn btn-primary">Delete User</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END primary modal -->
        </div>
    @endsection
