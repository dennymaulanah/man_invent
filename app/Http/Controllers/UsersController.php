<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function index()
    {
        $data_users = \App\Users::all();

        return view('users.index', ['data_users' => $data_users]);
    }

    public function create(Request $request)
    {
        \App\Users::create(['name' => $request->name,
                            'username' => $request->username,
                            'password' => Hash::make($request->password),
                            'role' => $request->role
        ]);
        return redirect('/users')->with('success', 'Data berhasil diinput');

    }

    public function edit($id)
    {
        $users = \App\Users::find($id);
        return view('users/edit', ['users' =>$users]);
    }

    public function update(Request $request, $id)
    {
        $users = \App\Users::find($id);
        $users->update($request->all());
        return redirect('/users')->with('success', 'Data berhasil diupdate');

    }

    public function delete($id)
    {
        $users = \App\Users::find($id);
        $users->delete($users);
        return redirect('/users')->with('success', 'Data berhasil dihapus');
    }
}
