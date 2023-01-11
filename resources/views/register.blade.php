@extends('layouts.main')

@section('container')
<section class="vh-100 gradient-custom container1 " >
    <div class="container py-5 h-100" >
        <div class="row d-flex justify-content-center align-items-center h-100" >
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-white text-dark" >
                    <h2 class="fw-bold mb-2 text-uppercase background-grey text-center p-2" >Register</h2>
                    <div class="card-body p-4 text-center ">
                        <form class="mb-md-5 md-4" action="/register" method="POST">
                            @csrf
                            <div class="form-outline form-white mb-4 text-start">
                                <label class="form-label " for="typeEmailX">Name</label>
                                <input type="text" name="name" id="typeEmailX" class="form-control form-control-lg @error('name')
                                is-invalid
                            @enderror" placeholder="Enter your Name" value="{{ old('name') }}" required/>
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-outline form-white mb-4 text-start">
                                <label class="form-label " for="typeEmailX">Email</label>
                                <input type="email" name="email" id="typeEmailX" class="form-control form-control-lg" placeholder="Enter your Email" value="{{ old('email') }}" required @error('email')
                                is-invalid
                            @enderror/>
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-outline form-white mb-4 ali text-start">
                                <label class="form-label" for="typePasswordX">Password</label>
                                <input type="password" name="password" id="typePasswordX" class="form-control form-control-lg @error('password')
                                is-invalid
                            @enderror" placeholder="Enter your Password" />
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input type="password" name="password_confirmation" placeholder="Confirm Password" class="form-control p-3 @error('password_confirmation')
                                    is-invalid
                                @enderror" value="{{ old('password_confirmation') }}">
                                @error('password_confirmation')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <button class="btn btn-outline-dark btn-lg px-5 mt-4" type="submit">Register</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
