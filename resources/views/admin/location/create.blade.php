@extends('layouts.app')
@section('title')
    Location Create
@endsection
@section('content')
    <div class="container-fluid p-0">
        <h1 class="h3 mb-3">Location</h1>
        <div class="row">
            <div class="col-12 col-lg-12">
                <form action="{{ route('admin.location.store') }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Add Location</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="from">From</label>
                                        <input type="text" class="form-control" id="from"
                                            placeholder="Enter From" name="from">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="to">To</label>
                                        <input type="text" class="form-control" id="to"
                                            placeholder="Enter To" name="to">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="location_name">Location Name</label>
                                        <input type="text" class="form-control" id="location_name"
                                            placeholder="Enter Location Name" name="location_name">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="location">Location </label>
                                        <input type="text" class="form-control" id="location"
                                            placeholder="Enter Location " name="location">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="parsl_name">Parsl Name</label>
                                        <input type="text" class="form-control" id="parsl_name"
                                            placeholder="Enter Parsl Name" name="parsl_name">
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
