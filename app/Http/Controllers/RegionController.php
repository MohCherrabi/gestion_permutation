<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegionRequest;
use App\Models\Region;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $regions = Region::paginate(10);
        return view('regions.index',['regions' => $regions]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('regions.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(RegionRequest $request)
    {
        Region::create($request->all());
        return redirect()->route('regions.index');
    }
    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $region = Region::findOrFail($id);
        return view('regions.show',['region'=>$region]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $region = Region::findOrFail($id);
        return view('regions.edit',['region'=>$region]);
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(RegionRequest $request, int $id)
    {
        $region = Region::findOrFail($id);
        $region->update($request->all());
        return redirect()->route('regions.index');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $region = Region::findOrFail($id);
        $region->delete();
        return redirect()->route('regions.index');
    }
}
