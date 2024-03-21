@extends('template.layar')
@section('bg-body', '#c7c7c7')
@section('body')
    <div class="container" style="margin-top: 130px">
        <div class="row">
            <div class="col-md-5 offset-md-3">
                <div class="card">
                    <div class="card-body shadow p-5 bg-white rounded">
                        <label>REGISTER</label>
                        <hr>
                        <form action="/register" method="POST">
                            @csrf
                            <div class="form-group mt-2">
                                <label for="name">Nama</label>
                                <input type="text" autofocus class="form-control" name="name" id="name" placeholder="Name" required value="{{ old('name') }}">
                            </div>

                            <div class="form-group mt-2">
                                <label for="email">Alamat Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="email" required value="{{ old('email') }}">
                            </div>

                            <div class="form-group mt-2 mb-4">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-login btn-block btn-success">Register</button>
                            </div>
                            <div class="text-center" style="margin-top: 40px">
                                <hr>
                                <p class=" text-black">Sudah punya akun? <a href="{{ route('login') }}">Silahkan Login</a></p>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
