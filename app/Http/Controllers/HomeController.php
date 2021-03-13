<?php

namespace App\Http\Controllers;
use App\TripPackage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(request $request)
    {
        $items = TripPackage::with(['galleries'])->get();
        return view('pages.home',[
            'items' => $items
        ]);
    }
}
