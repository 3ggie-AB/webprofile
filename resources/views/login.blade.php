@extends('template.layar')
@section('bg-body', '#c9c9c9')
@section('body')
@if(session()->has('succsess'))
@endif
    <div class="container" style="margin-top: 130px">
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
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="email">
                            </div>

                            <div class="form-group mt-2 mb-4">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" id="password"
                                    placeholder="Password">
                            </div>
                        </form>
                        <div class="text-center">
                            <button class="btn btn-login btn-block btn-success">LOGIN</button>
                        </div>
                        <div class="text-center" style="margin-top: 40px">
                            <hr>
                            <p class=" text-black">Belum punya akun? <a class="" href="/register">Silahkan
                                    Register</a></p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
