<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function index()
    {

        $data = Destination::all();

        return view('admin.destination.index', compact('data'));
    }

    public function create()
    {
        return view('admin.destination.form');
    }

    public function show(Destination $destination)
    {
        return view('admin.destination.form', compact('destination'));
    }

    public function store(Request $request){

        $data = $request->validate([
            'image' => 'required',
            'name' => 'required',
            'address' => 'required',
            'description' => 'required',
        ]);


        $data['image'] = $request->file('image')->store('destination');

        Destination::create($data);

        return redirect('/admin/destination')->with('success', 'Destinasi berhasil ditambahkan');

    }

    public function update(Request $request, Destination $destination)
    {
        $data = $request->validate([
            'image' => 'nullable',
            'name' => 'required',
            'address' => 'required',
            'description' => 'required',
        ]);

        if($request->hasFile('image')){
            $data['image'] = $request->file('image')->store('destination');
        }

        $destination->update($data);

        return redirect('/admin/destination')->with('success', 'Destinasi berhasil diubah');

    }

    public function delete(Destination $destination)
    {
        $destination->delete();
        return redirect('/admin/destination')->with('success', 'Destinasi berhasil dihapus');
    }

}
