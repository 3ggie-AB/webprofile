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
                    <form action="{{ route('item.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!--<div class="form-group">
                            <label class="font-weight-bold">GAMBAR</label>
                            <input type="file" class="form-control" name="image">
                        </div>-->

                        <div class="form-group">
                            <label class="font-weight-bold">NAMA BARANG</label>
                            <input type="text" class="form-control @error('nama_barang') is-invalid @enderror" name="nama_barang" value="{{ old('nama_barang', $item->nama_barang) }}" placeholder="Masukkan Nama Barangnya Gan!!">
                        
                            <!-- error message untuk title -->
                            @error('nama_barang')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">HARGA BARANG</label>
                            <textarea class="form-control @error('harga_barang') is-invalid @enderror" name="harga_barang" rows="5" placeholder="Masukkan Harga Barangnya!!">{{ old('harga_barang', $item->harga_barang) }}</textarea>
                        
                            <!-- error message untuk content -->
                            @error('harga_barang')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
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