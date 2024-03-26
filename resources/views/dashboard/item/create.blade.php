@extends('template.layar')
@section('body')
    @component('template.navbar-vertical', [
        'menu1' => '',
        'menu2' => 'on',
        'menu3' => '' ])

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('item.store') }}" method="POST">
                        
                            @csrf

                            <div class="form-group">
                                <label class="font-weight-bold">NAMA BARANG</label>
                                <input type="text" class="form-control @error('nama_barang') is-invalid @enderror" name="nama_barang" value="{{ old('nama_barang') }}" placeholder="Masukkan Nama Barang">
                            
                                <!-- error message untuk nama_barang -->
                                @error('nama_barang')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">HARGA BARANG</label>
                                <input type="number" class="form-control @error('harga_barang') is-invalid @enderror" name="harga_barang" value="{{ old('harga_barang') }}" placeholder="Masukkan Harga Barang">
                            
                                <!-- error message untuk harga_barang -->
                                @error('harga_barang')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>
                            <button class="btn btn-md btn-success"><a class=" text-light" href="/item">KEMBALI</a></button>

                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endcomponent
@endsection
