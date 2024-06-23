<?php

namespace App\Http\Controllers;

use App\Http\Requests\PermutationRequest;
use App\Models\Formateur;
use App\Models\Permutation;
use App\Models\Ville;
use Illuminate\Http\Request;

class PermutationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('guest')->except(['index']); // this methods in this controller having access to just the guest users  => the index method not supported for geust users
        $this->middleware('guest')->only(['create','store','destroy','edit','update','show']); // this methods in this controller having access to just the guest users only 'create','store','destroy','edit','show'
    }
    public function index()
    {
        $permutations =Permutation::paginate(10);
        return view('permutations.index',['permutations' => $permutations]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $villes = Ville::all();
        $formateurs = Formateur::all();
        return view('permutations.create',compact('villes','formateurs'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(PermutationRequest $request)
    {
        Permutation::create($request->all());
        return redirect()->route('permutations.index');
    }
    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $permutation =Permutation::findOrFail($id);
        return view('permutations.show',['permutation'=>$permutation]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $villes = Ville::all();
        $formateurs = Formateur::all();
        $permutation =Permutation::findOrFail($id);
        return view('permutations.edit',['permutation'=>$permutation,'villes'=>$villes,'formateurs'=>$formateurs]);
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(PermutationRequest $request, int $id)
    {
        $permutation =Permutation::findOrFail($id);
        $permutation->update($request->all());
        return redirect()->route('permutations.index');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $permutation =Permutation::findOrFail($id);
        $permutation->delete();
        return redirect()->route('permutations.index');
    }
}
