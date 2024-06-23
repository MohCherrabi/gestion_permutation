<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormateurRequest;
use App\Models\Etablissement;
use App\Models\Formateur;
use App\Models\Metier;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class FormateurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['create','store']);
        // $this->middleware('guest')->only(['create','store','destroy','edit','show']);
    }
    public function index()
    {
        $formateurs = Formateur::paginate(10);
        return view('formateurs.index',['formateurs' => $formateurs]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $etablissements = Etablissement::all();
        $metiers = Metier::all();
        return view('formateurs.create',compact('etablissements', 'metiers'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(FormateurRequest $request)
    {
        // dd($request->all());
        $data = $request->all();
        $hashedPassword = Hash::make($request->password);
        $data['password'] = $hashedPassword;

        $data['photo'] = $request->file('photo')->store('imagesFormatuers', 'public');
        Formateur::create($data);
        return redirect()->route('formateurs.index');
    }
    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $formateur = Formateur::findOrFail($id);
        return view('formateurs.show',['formateur'=>$formateur]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $etablissements = Etablissement::all();
        $metiers = Metier::all();
        $formateur = Formateur::findOrFail($id);
        return view('formateurs.edit',['formateur'=>$formateur,'etablissements'=>$etablissements,'metiers'=>$metiers]);
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(FormateurRequest $request, int $id)
    {
        $data = $request->all();
        $data['photo'] = $request->file('photo')->store('imagesFormatuers', 'public');
        $formateur = Formateur::findOrFail($id);
        $formateur->update($data);
        return redirect()->route('formateurs.index');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $formateur = Formateur::findOrFail($id);
        $formateur->delete();
        return redirect()->route('formateurs.index');
    }
}
