<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{
    /**
     * index
     * 
     * @return void
     */
    public function index()
    {
        $items = Item::latest()->paginate(10);
        return view('dashboard.item.index', ['blog_title' => 'dashboard'], compact('items'));
    }

    public function create()
    {
        return view('dashboard.item.create');
    }

    public function store(Request $request)
    {

        $credential = $request->validate([
            'nama_barang' => 'required',
            'harga_barang' => 'required'
        ]);

        $item = Item::create([
            /*'image'     => $image->hashName(),*/
            'nama_barang' => $request->nama_barang,
            'harga_barang' => $request->harga_barang
        ]);


        if ($item) {
            //redirect dengan pesan sukses
            return redirect('/item')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect('/item')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /*MEBUAT CRUD(EDIT & UPDATE)*/
    /**edit*/
    public function edit(Item $item)
    {
        return view('dashboard.item.edit', compact('item'));
    }

    /**update*/
    public function update(Request $request, Item $item)
    {
        $credential = $request->validate([
            'nama_barang' => 'required',
            'harga_barang' => 'required'
        ]);

        // Update the barang with the new data
        $item->update([
            'nama_barang' => $request->nama_barang,
            'harga_barang' => $request->harga_barang
        ]);

        if ($item) {
            return redirect('/item')->with(['success' => 'Data Berhasil Diupdate yagesya,lanjutkan brokk!']);
        } else {
            //redirect dengan pesan error
            return redirect('/item')->route('dashboard.item.index')->with(['error' => 'Data Gagal Diupdate,waduh brokk coba ulangi lagi!']);
        }
    }

    /*MEMBUAT CRUD(HAPUS)*/
    public function destroy($id)
    {
        $item = Item::findOrFail($id);
        $item->delete();

        //redirect dengan pesan sukses
        return redirect('/item')->with(['success' => 'Data Berhasil Dihapus yaa!!']);

    }
}
