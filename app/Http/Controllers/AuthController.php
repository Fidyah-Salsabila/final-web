<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Tour;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
        return view('admin.login');
    }

    public function dashboard(){
        $destination = Destination::count();
        $tour = Tour::count();
        $admin = User::count();
        return view('admin.index', compact('destination', 'tour', 'admin'));
    }

    public function login(Request $request){
        if(Auth::attempt([ 'username' => $request->username, 'password' => $request->password])){
            return redirect('/admin');
        }
        return redirect()->back()->with('error', 'Username atau Password salah');
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }

}
