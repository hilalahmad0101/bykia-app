@extends('layouts.app')
@section('title')
    Dashboard
@endsection
@section('content')
<div class="container-fluid p-0">

    <h1 class="h3 mb-3"><strong>Admin</strong> Dashboard</h1>
    {{-- <div class="row">
        <div class="col-xl-6 col-xxl-5 d-flex">
            <div class="w-100">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-0">
                                        <h5 class="card-title">Users</h5>
                                    </div>

                                    <div class="col-auto">
                                        <div class="stat text-primary">
                                            <i class="align-middle" data-feather="users"></i>
                                        </div>
                                    </div>
                                </div>
                                <h1 class="mt-1 mb-3">280</h1>
                                <div class="mb-0">
                                    <span class="text-muted">Total Users</span>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-0">
                                        <h5 class="card-title">Disabled</h5>
                                    </div>

                                    <div class="col-auto">
                                        <div class="stat text-primary">
                                            <i class="align-middle" data-feather="user-x"></i>
                                        </div>
                                    </div>
                                </div>
                                <h1 class="mt-1 mb-3">220</h1>
                                <div class="mb-0">
                                    <span class="text-success">
                                    <span class="text-muted">Disabled Users</span>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-0">
                                        <h5 class="card-title">Active</h5>
                                    </div>

                                    <div class="col-auto">
                                        <div class="stat text-primary">
                                            <i class="align-middle" data-feather="user-check"></i>
                                        </div>
                                    </div>
                                </div>
                                <h1 class="mt-1 mb-3">60</h1>
                                <div class="mb-0">
                                    <span class="text-success">
                                    <span class="text-muted">Active Users</span>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-0">
                                        <h5 class="card-title">Next</h5>
                                    </div>

                                    <div class="col-auto">
                                        <div class="stat text-primary">
                                            <i class="align-middle" data-feather="help-circle"></i>
                                        </div>
                                    </div>
                                </div>
                                <h1 class="mt-1 mb-3">What Next</h1>
                                <div class="mb-0">
                                    <span class="text-danger">
                                    <span class="text-muted">What next in your mind?</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6 col-xxl-7">
            <div class="card flex-fill w-100">
                <div class="card-header">

                    <h5 class="card-title mb-0">Recent Movement</h5>
                </div>
                <div class="card-body py-3">
                    <div class="chart chart-sm">
                        <canvas id="chartjs-dashboard-line"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-md-6 col-xxl-3 d-flex order-2 order-xxl-3">
            <div class="card flex-fill w-100">
                <div class="card-header">

                    <h5 class="card-title mb-0">Active VS Disabled</h5>
                </div>
                <div class="card-body d-flex">
                    <div class="align-self-center w-100">
                        <div class="py-3">
                            <div class="chart chart-xs">
                                <canvas id="chartjs-dashboard-pie"></canvas>
                            </div>
                        </div>

                        <table class="table mb-0">
                            <tbody>
                                <tr>
                                    <td>Active </td>
                                    <td class="text-end">60</td>
                                </tr>
                                <tr>
                                    <td>Disabled</td>
                                    <td class="text-end">220</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div> --}}
</div>
@endsection