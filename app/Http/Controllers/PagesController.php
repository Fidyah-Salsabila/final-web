<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Tour;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $tour = Tour::limit(5)->get();
        return view('index', compact('tour'));
    }

    public function destination(){
        $data = Destination::all();
        return view("destination", compact('data'));
    }

    public function tour(){
        $data = Tour::all();
        return view("tour", compact('data'));
    }

    public function tourDetail(Tour $tour){
        return view("tour-detail", compact('tour'));
    }

}
