<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Tour;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $tour = Tour::limit(5)->get();
        $destination = Destination::limit(6)->get();
        return view('index', compact('tour', 'destination'));
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

    public function destinationDetail(Destination $destination){
        return view("destination-detail", compact('destination'));
    }

}
