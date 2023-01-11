@extends('layouts.main')

@section('container')
<section class="vh-100 gradient-custom container1 " >
    <div class="container py-5 h-100" >
        <div class="row d-flex justify-content-center align-items-center h-100" >
            @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    </button>
                </div>
            @endif
            @if(session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    </button>
                </div>
            @endif
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-white text-dark" >
                    <h2 class="fw-bold mb-2 text-uppercase background-grey text-center p-2" >Login</h2>
                    <div class="card-body p-4 text-center ">

                        <form class="mb-md-5 md-4" action="login" method="POST">
                            @csrf
                            <div class="form-outline form-white mb-4 text-start">
                                <label class="form-label " for="typeEmailX">Email</label>
                                <input type="email" name="email" id="typeEmailX" class="form-control form-control-lg @error('email') is-invalid @enderror" placeholder="Enter your Email" value="{{ old('email',Cookie::get('emailCookie') !== null ? Cookie::get('emailCookie') : "" )}}"/>
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>

                            <div class="form-outline form-white mb-4 ali text-start">
                                <label class="form-label" for="typePasswordX">Password</label>
                                <input type="password" name="password" id="typePasswordX" class="form-control form-control-lg" placeholder="Enter your Password" value="{{ old('password', Cookie::get('passwordCookie') !== null ? Cookie::get('passwordCookie') : "") }}"/>
                            </div>

                            <div class="form-check text-start">
                                <input class="form-check-input" type="checkbox" name="remember" id="flexCheckDefault" {{ Cookie::get('emailCookie') !== null ? "checked" : "" }}>
                                <label class="form-check-label" for="flexCheckDefault">Remember Me</label>
                            </div>

                            <button class="btn btn-outline-dark btn-lg px-5 mt-4" type="submit">Login</button>
                        </form>

                        <div>
                            <p class="mb-0 text-start">Don't have an account?
                                <a href="/register" class="text-dark-50 fw-bold">Register Here</a>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
