<?php

namespace App\Http\Controllers;

use App\Http\Requests\VilleRequest;
use App\Models\Region;
use App\Models\Ville;

class VilleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['index','edit','update']); // this methods in this controller having access to just the auth users  => the index method not supported for auth users
        $this->middleware('auth')->only(['create','store','destroy','show']); // this methods in this controller having access to just the auth users only 'create','store','destroy','edit','show'
    }
    public function index()
    {
        $villes = Ville::paginate(10);
        return view('villes.index',['villes' => $villes]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $regions = Region::all();
        return view('villes.create',['regions'=>$regions]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(VilleRequest $request)
    {
        Ville::create($request->all());
        return redirect()->route('villes.index');
    }
    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {

        $ville = Ville::findOrFail($id);
        return view('villes.show',['ville'=>$ville]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $regions = Region::all();
        $ville = Ville::findOrFail($id);
        return view('villes.edit',['ville'=>$ville,'regions'=>$regions]);
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(VilleRequest $request, int $id)
    {
        $ville = Ville::findOrFail($id);
        $ville->update($request->all());
        return redirect()->route('villes.index');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $ville = Ville::findOrFail($id);
        $ville->delete();
        return redirect()->route('villes.index');
    }
}
