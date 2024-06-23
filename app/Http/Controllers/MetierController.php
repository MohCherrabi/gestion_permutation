<?php

namespace App\Http\Controllers;

use App\Http\Requests\MetierRequest;
use App\Models\Metier;
use Illuminate\Http\Request;

class MetierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $metiers = Metier::paginate(10);
        return view('metiers.index',['metiers' => $metiers]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('metiers.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(MetierRequest $request)
    {
        Metier::create($request->all());
        return redirect()->route('metiers.index');
    }
    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $metier = Metier::findOrFail($id);
        return view('metiers.show',['metier'=>$metier]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $metier = Metier::findOrFail($id);
        return view('metiers.edit',['metier'=>$metier]);
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(MetierRequest $request, int $id)
    {
        $metier = Metier::findOrFail($id);
        $metier->update($request->all());
        return redirect()->route('metiers.index');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $metier = Metier::findOrFail($id);
        $metier->delete();
        return redirect()->route('metiers.index');
    }
}
