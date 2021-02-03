<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class KategoriController extends Controller
{
    public function index()
    {
        $data_kategori = \App\Kategori::all();

        return view('kategori.index', ['data_kategori' => $data_kategori]);
    }

    public function create(Request $request)
    {
        // bcrypt 
        // \App\Users::create($data->all());
        //DB::table('users')->insert(['name'=>$request->name,'username'=>$request->username,'password'=>Hash::make($request->password),'role'=>$request->role]);
        
        \App\Kategori::create($request->all());
        return redirect('/kategori')->with('success', 'Data berhasil diinput');

    }

    public function edit($id)
    {
        $kategori = \App\Kategori::find($id);
        return view('kategori/edit', ['kategori' =>$kategori]);
    }

    public function update(Request $request, $id)
    {
        $kategori = \App\Kategori::find($id);
        $kategori->update($request->all());
        return redirect('/kategori')->with('success', 'Data berhasil diupdate');

    }

    public function delete($id)
    {
        $kategori = \App\Kategori::find($id);
        $kategori->delete($kategori);
        return redirect('/kategori')->with('success', 'Data berhasil dihapus');
    }
}
