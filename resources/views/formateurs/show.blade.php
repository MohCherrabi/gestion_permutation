@extends('layouts.app')
@section('content')
<div style="width: 22rem;" class="mt-5">
    <div class="form-outline mb-4">
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('storage/' . $formateur->photo) }}" class="card-img-top" alt="Course Image">
            <div class="card-body">
                <h5 class="card-title">Formateur Information</h5>
                <p class="card-text"><strong>Matricule:</strong> {{ $formateur->matricule }}</p>
                <p class="card-text"><strong>Nom:</strong> {{ $formateur->nom }}</p>
                <p class="card-text"><strong>Prénom:</strong> {{ $formateur->prenom }}</p>
                <p class="card-text"><strong>Grade:</strong> {{ $formateur->grade }}</p>
                <p class="card-text"><strong>Date de naissance:</strong> {{ $formateur->date_naissance }}</p>
                <p class="card-text"><strong>Date de recrutement:</strong> {{ $formateur->date_recrutement }}</p>
                <p class="card-text"><strong>Poste:</strong> {{ $formateur->poste }}</p>
                <p class="card-text"><strong>Téléphone:</strong> {{ $formateur->tel }}</p>
                <p class="card-text"><strong>Email:</strong> {{ $formateur->email }}</p>
                <p class="card-text"><strong>Établissement:</strong> {{ $formateur->etablissement->etablissement }}</p>
                <p class="card-text"><strong>Métier:</strong> {{ $formateur->metier->metier }}</p>
                <!-- Add more properties as needed -->
                <a href="{{ route('villes.index') }}" class="btn btn-primary btn-block mb-4">Annuler</a>
            </div>
        </div>
    </div>
</div>
@endsection
