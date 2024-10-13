@extends('layouts.app')
@section('title')
    Job List
@endsection
@section('content')
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-md-6">
                <h1 class="h3 mb-3"><strong>All</strong> Jobs</h1>
            </div>
            {{-- <div class="col-md-6 text-md-end">
                <a href="{{ route('admin.location.create') }}" class="btn btn-pill btn-primary float-right"><i class="align-middle"
                        data-feather="user-plus"></i> Add Location</a>
            </div> --}}
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
                                    <th>Username</th>
                                    <th>From</th>
                                    <th>To</th>
                                    <th>Date & Time</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jobs as $job)
                                    <tr>
                                        <td>{{ $job->user->name }}</td>
                                        <td>{{ $job->from }}</td>
                                        <td>{{ $job->to }}</td>
                                        <td>{{ $job->date }} {{ $job->time }}</td>
                                        <td>{{ $job->status }}</td>
                                        <td>
                                            @if ($job->status == 'pending')
                                            <a href="{{ route('admin.job.approved', ['id'=>$job->id]) }}" class="btn btn-success">Approved</a>
                                            @endif
                                            <a href="{{ route('admin.job.delete', ['id'=>$job->id]) }}" class="btn btn-danger">Delete</a>
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
