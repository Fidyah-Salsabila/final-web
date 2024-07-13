<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TourController extends Controller
{
    public function index()
    {

        $data = Tour::all();

        return view('admin.tour.index', compact('data'));
    }

    public function create()
    {
        return view('admin.tour.form');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'image' => 'required|image',
            'name' => 'required',
            'price' => 'required|numeric',
            'rating' => 'required|numeric|min:0|max:5',
            'description' => 'required',
            'location' => 'required'
        ],[
            'image.required' => 'Gambar wajib diisi',
            'image.image' => 'Gambar harus berupa gambar',
            'name.required' => 'Nama Paket wajib diisi',
            'price.required' => 'Harga wajib diisi',
            'price.numeric' => 'Harga harus berupa angka',
            'rating.required' => 'Rating wajib diisi',
            'rating.numeric' => 'Rating harus berupa angka',
            'rating.min' => 'Rating harus lebih besar dari 0',
            'rating.max' => 'Rating harus lebih kecil dari 5',
            'description.required' => 'Deskripsi wajib diisi',
            'location.required' => 'Lokasi wajib diisi',
        ]);

        $data['image'] = $request->file('image')->store('tour');

        Tour::create($data);
        return redirect('/admin/tour');
    }

    public function show(Tour $tour)
    {
        return view('admin.tour.form', compact('tour'));
    }

    public function update(Request $request, Tour $tour)
    {
        $data = $request->validate([
            'image' => 'nullable',
            'name' => 'required',
            'price' => 'required|numeric',
            'rating' => 'required|numeric|min:0|max:5',
            'description' => 'required',
            'location' => 'required'
        ],[
            'name.required' => 'Nama Paket wajib diisi',
            'price.required' => 'Harga wajib diisi',
            'price.numeric' => 'Harga harus berupa angka',
            'rating.required' => 'Rating wajib diisi',
            'rating.numeric' => 'Rating harus berupa angka',
            'rating.min' => 'Rating harus lebih besar dari 0',
            'rating.max' => 'Rating harus lebih kecil dari 5',
            'description.required' => 'Deskripsi wajib diisi',
            'location.required' => 'Lokasi wajib diisi',
        ]);

        if ($request->hasFile('image')) {
            Storage::delete($tour->image);
            $data['image'] = $request->file('image')->store('tour');
        }

        $tour->update($data);
        return redirect('/admin/tour')->with('success', 'Paket Wisata berhasil diubah');
    }

    public function delete(Tour $tour)
    {
        $tour->delete();
        return redirect('/admin/tour');
    }


}
