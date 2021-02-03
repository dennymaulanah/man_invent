<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class BarangController extends Controller
{
    public function index()
    {
        $data_barang = \App\Barang::all();
        $kategori = \App\Kategori::all();

        return view('barang.index', ['data_barang' => $data_barang,
                                    'kategori' => $kategori]);
    }

    public function create(Request $request)
    {
        
        \App\Barang::create($request->all());
        return redirect('/barang')->with('success', 'Data berhasil diinput');

    }

    public function edit($id)
    {
        $barang = \App\Barang::find($id);
        $kategori = \App\Kategori::all();
        return view('barang/edit', ['barang' =>$barang, 'kategori' => $kategori]);
    }

    public function update(Request $request, $id)
    {
        $barang = \App\Barang::find($id);
        $barang->update($request->all());
        return redirect('/barang')->with('success', 'Data berhasil diupdate');

    }

    public function delete($id)
    {
        $barang = \App\Barang::find($id);
        $barang->delete($barang);
        return redirect('/barang')->with('success', 'Data berhasil dihapus');
    }
}
