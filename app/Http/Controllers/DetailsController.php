<?php

namespace App\Http\Controllers;


use App\TripPackage;
use Illuminate\Http\Request;

class DetailsController extends Controller
{
    public function index(request $request, $slug)
    {
        $item = TripPackage::with(['galleries'])->where('slug', $slug)->firstOrFail();
            
        return view('pages.details',[
            'item' => $item
        ]);
    }
}
