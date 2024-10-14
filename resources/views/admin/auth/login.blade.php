@extends('layouts.guest')
@section('content')
    <div class="col-sm-10 col-md-8 col-lg-4 mx-auto d-table h-100">
        <div class="d-table-cell align-middle">
            <div class="text-center mt-4">
                <h1 class="h2">Welcome back Next Flight courier</h1>
                {{-- <p class="lead">
                    Sign in to your account to continue
                </p> --}}
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="m-sm-4">
                        <div class="text-center">
                            <img src="{{ asset('logo.jpeg') }}" alt="Site Logo" class=""  />
                        </div>
                        <form action="{{ route('admin.make.login') }}" method="POST" class="mt-4" >
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Username</label>
                                <input class="form-control form-control-lg" type="text" name="email"
                                    placeholder="Enter your username" value="" />
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input class="form-control form-control-lg" type="password" name="password"
                                    placeholder="Enter your password" />
                                    @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                {{-- <small><a href="forgot-password.php">Forgot Password?</a></small> --}}
                            </div>
                            <div>
                            </div>
                            <div class="text-center mt-3">
                                <button type="submit" name="login" class="btn btn-lg btn-primary">Sign
                                    in</button>
                            </div>
                            {{-- <div class="text-center mt-3">
                                Not Registered?<a href="signup.php"> Sign Up</a>
                            </div> --}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
