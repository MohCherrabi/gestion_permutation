@extends('layouts.app')
@section('content')
<div style="width: 22rem;" class="mt-5">
    <div class="form-outline mb-4">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Etablissement Information</h5>
                <p class="card-text"><strong>Etablissement:</strong> {{ $etablissement->etablissement }}</p>
                <p class="card-text"><strong>Code:</strong> {{ $etablissement->code }}</p>
                <p class="card-text"><strong>Adresse:</strong> {{ $etablissement->adresse }}</p>
                <p class="card-text"><strong>Téléphone:</strong> {{ $etablissement->tel }}</p>
                <p class="card-text"><strong>Fax:</strong> {{ $etablissement->fax }}</p>
                <p class="card-text"><strong>Ville:</strong> {{ $etablissement->ville->ville }}</p>
                <!-- Add more properties as needed -->
                <a href="{{ route('etablissements.index') }}" class="btn btn-primary btn-block mb-4">Annuler</a>
            </div>
        </div>
    </div>
</div>
@endsection
