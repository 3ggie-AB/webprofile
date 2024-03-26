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
                        <a href="{{ route('item.create') }}" class="btn btn-md btn-success mb-3">TAMBAH BARANG</a>
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">NAMA BARANG</th>
                                <th scope="col">HARGA BARANG</th>
                                <th scope="col">AKSI</th>
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($items as $item)
                                <tr>
                                    <td>{{ $item-> nama_barang }}</td>
                                    <td>{!! $item-> harga_barang !!}</td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('item.destroy', $item->id) }}" method="POST">
                                            <a href="{{ route('item.edit', $item->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                              @empty
                                  <div class="alert alert-danger">
                                      Data Barang belum Tersedia ya brok,ingettt!!!.
                                  </div>
                              @endforelse
                            </tbody>
                          </table>  
                          {{ $items->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endcomponent
@endsection