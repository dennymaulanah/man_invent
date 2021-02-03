<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RuanganController extends Controller
{
    public function index()
    {
        $data_ruangan = \App\Ruangan::all();
        $kategori = \App\Kategori::all();

        return view('ruangan.index', ['data_ruangan' => $data_ruangan,
                                    'kategori' => $kategori]);
    }

    public function create(Request $request)
    {
        
        \App\Ruangan::create($request->all());
        return redirect('/ruangan')->with('success', 'Data berhasil diinput');

    }

    public function edit($id)
    {
        $ruangan = \App\Ruangan::find($id);
        $kategori = \App\Kategori::all();
        return view('ruangan/edit', ['ruangan' =>$ruangan, 'kategori' => $kategori]);
    }

    public function update(Request $request, $id)
    {
        $ruangan = \App\Ruangan::find($id);
        $ruangan->update($request->all());
        return redirect('/ruangan')->with('success', 'Data berhasil diupdate');

    }

    public function delete($id)
    {
        $ruangan = \App\Ruangan::find($id);
        $ruangan->delete($ruangan);
        return redirect('/ruangan')->with('success', 'Data berhasil dihapus');
    }
}
