<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TripPackageRequest;
use App\TripPackage;
use Illuminate\Http\Request;
use Illuminate\Support\str;

class TripPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = TripPackage::all();

        return view('pages.admin.trip-package.index', [
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.trip-package.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TripPackageRequest $request)
    {
        $data = $request->all();
        $data['slug'] = str::slug($request->title);

        TripPackage::create($data);
        return redirect()->route('trip-package.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = TripPackage::FindOrFail($id);

        return view('pages.admin.trip-package.edit', [
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TripPackageRequest $request, $id)
    {
        $data = $request->all();
        $data['slug'] = str::slug($request->title);

        $item = TripPackage::FindOrFail($id);

        $item -> update($data);

        return redirect()->route('trip-package.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = TripPackage::FindOrFail($id);
        $item->delete();

        return redirect()->route('trip-package.index');
    }
}
