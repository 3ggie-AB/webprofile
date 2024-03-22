@extends('template.layar')
@section('bg-body', '#c9c9c9')
@section('body')

            @if (session()->has('succsess'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('succsess') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            
            @error('email')
            <h2>{{ $message }}</h2>
            @enderror
            @error('password')
                    <h2>{{ $message }}</h2>
            @enderror
    <div class="container" style="margin-top: 50px">
        <div class="row">
            <div class="col-md-5 offset-md-3">
                <div class="card">
                    <div class="card-body shadow p-5 bg-white rounded">
                        <label>LOGIN</label>
                        <hr>
                        <form action="/login" method="POST">
                            @csrf
                            <div class="form-group mt-2">
                                <label for="email">Alamat Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email"
                                    required autofocus value="{{ old('email') }}">
                            </div>

                            <div class="form-group mt-2 mb-4">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" id="password"
                                    placeholder="Password" required>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-login btn-block btn-success">LOGIN</button>
                            </div>
                            <div class="text-center" style="margin-top: 40px">
                                <hr>
                                <p class=" text-black">Belum punya akun? <a class="" href="/register">Silahkan
                                        Register</a></p>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
