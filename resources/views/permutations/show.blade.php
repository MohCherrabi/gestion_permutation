@extends('layouts.app')
@section('content')
<div style="width: 22rem;" class="mt-5">
    <div class="form-outline mb-4">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Permutation Information</h5>
                <p class="card-text"><strong>Ville:</strong> {{ $permutation->ville->ville }}</p>
                <p class="card-text"><strong>Date:</strong> {{ $permutation->date }}</p>
                <p class="card-text"><strong>Nom formateur:</strong> {{ $permutation->formateur->nom  }}</p>
                <p class="card-text"><strong>Valide:</strong> {{ $permutation->valide ? 'Oui' : 'Non' }}</p>
                <!-- Add more properties as needed -->
                <a href="{{ route('permutations.index') }}" class="btn btn-primary btn-block mb-4">Annuler</a>
            </div>
        </div>
    </div>
</div>
@endsection
