<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StaffController extends Controller
{
    public function index()
    {
        $data_staff = \App\Users::all()->where('role', '==' ,'3');

        return view('staff.index', ['data_staff' => $data_staff]);
    }

    public function create(Request $request)
    {
        
        \App\Users::create(['name' => $request->name,
                            'username' => $request->username,
                            'password' => Hash::make($request->password),
                            'role' => 3
        ]);
        return redirect('/staff')->with('success', 'Data berhasil diinput');

    }

    public function edit($id)
    {
        $staff = \App\Users::find($id);
        return view('staff/edit', ['staff' =>$staff]);
    }

    public function update(Request $request, $id)
    {
        $staff = \App\Users::find($id);
        $staff->update($request->all());
        return redirect('/staff')->with('success', 'Data berhasil diupdate');

    }

    public function delete($id)
    {
        $staff = \App\Users::find($id);
        $staff->delete($staff);
        return redirect('/staff')->with('success', 'Data berhasil dihapus');
    }
}
