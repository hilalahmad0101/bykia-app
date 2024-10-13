@extends('layouts.app')
@section('title')
    Job Approved
@endsection
@section('content')
    <div class="container-fluid p-0">
        <h1 class="h3 mb-3">Approved Job</h1>
        <div class="row">
            <div class="col-12 col-lg-12">
                <form action="{{ route('admin.job.store_approved_job',['id'=>$id]) }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Approved Job</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                  
                                    <div class="mb-3">
                                        <label class="form-label" for="parsl_name">Select Location</label>
                                        <select name="location" class="form-control">
                                            <option value="">Select Location</option>

                                            @foreach ($locations as $location)
                                                <option value="{{ $location->id }}">{{ $location->location_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div> 
        </div>
    </div>
@endsection
