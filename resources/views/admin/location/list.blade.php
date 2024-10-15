@extends('layouts.app')
@section('title')
    Location List
@endsection
@section('content')
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-md-6">
                <h1 class="h3 mb-3"><strong>All</strong> Locations</h1>
            </div>
            <div class="col-md-6 text-md-end">
                <a href="{{ route('admin.location.create') }}" class="btn btn-pill btn-primary float-right"><i class="align-middle"
                        data-feather="user-plus"></i> Add Location</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-12 d-flex">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Location List</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>From</th>
                                    <th>To</th>
                                    <th>Location Name</th>
                                    <th>Parsl Name</th>
                                    <th>Date Created</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($locations as $location)
                                    <tr>
                                        <td>{{ $location->location_name }}</td>
                                        <td>{{ $location->parsl_name }}</td>
                                        <td>{{ date('Y-m-d',strtotime($location->created_at)) }}</td>
                                        <td>
                                            <a href="{{ route('admin.location.edit', ['id'=>$location->id]) }}" class="btn btn-success">Edit</a>
                                            <a href="{{ route('admin.location.delete', ['id'=>$location->id]) }}" class="btn btn-danger">Delete</a>
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
@endsection
