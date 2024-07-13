<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $dir = 'admin.admin';

    public function index()
    {
        $data = User::all();
        return view("$this->dir.index", compact('data'));
    }

    public function create()
    {
        return view("$this->dir.form");
    }

    public function show(User $user){
        return view("$this->dir.form", compact('user'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'username' => 'required',
            'password' => 'required',
        ],[
            'name.required' => 'Nama tidak boleh kosong',
            'username.required' => 'Username tidak boleh kosong',
            'password.required' => 'Password tidak boleh kosong',
        ]);

        $data['password'] = bcrypt($data['password']);
        User::create($data);
        return redirect('/admin/admin')->with('success', 'Data berhasil ditambahkan');
    }

    public function update(Request $request, User $user){
        $data = $request->validate([
            'name' => 'required',
            'username' => 'required',
        ],[
            'name.required' => 'Nama tidak boleh kosong',
            'username.required' => 'Username tidak boleh kosong',
        ]);

        if($request->password){
            $data['password'] = $request->password;
        }

        $user->update($data);
        return redirect('/admin/admin')->with('success', 'Data berhasil diubah');
    }



}
