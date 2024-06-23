<?php

namespace App\Http\Controllers;

use App\Http\Requests\EtablissementRequest;
use App\Models\Etablissement;
use App\Models\Ville;
use Illuminate\Http\Request;

class EtablissementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $etablissements = Etablissement::paginate(10);
        return view('etablissements.index',['etablissements' => $etablissements]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $villes = Ville::all();
        return view('etablissements.create',compact('villes'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(EtablissementRequest $request)
    {
        Etablissement::create($request->all());
        return redirect()->route('etablissements.index');
    }
    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $etablissement = Etablissement::findOrFail($id);
        return view('etablissements.show',['etablissement'=>$etablissement]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $villes = Ville::all();
        $etablissement = Etablissement::findOrFail($id);
        return view('etablissements.edit',['etablissement'=>$etablissement,'villes'=>$villes]);
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(EtablissementRequest $request, int $id)
    {
        $etablissement = Etablissement::findOrFail($id);
        $etablissement->update($request->all());
        return redirect()->route('etablissements.index');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $etablissement = Etablissement::findOrFail($id);
        $etablissement->delete();
        return redirect()->route('etablissements.index');
    }
}
