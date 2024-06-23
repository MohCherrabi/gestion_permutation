@extends('layouts.app')
@section('content')

<table class="table align-middle text-center">
    <thead>
        <tr>
    <th colspan="9"><a href="{{ route('formateurs.create') }}" class="btn btn-primary w-100">Ajouter formateur</a></th>

        </tr>
        <tr>
            <th scope="col">Nom</th>
            <th scope="col">Photo</th>
            <th scope="col">Date de recrutement</th>
            <th scope="col">Poste</th>
            <th scope="col">Téléphone</th>
            <th scope="col">Metier</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($formateurs as $formateur)
        <tr>
            <td>{{ $formateur->nom }}</td>
            <td><img width="100px" height="100px" src="{{asset('storage/'.$formateur->photo)}}"></td>
            <td>{{ $formateur->date_recrutement }}</td>
            <td>{{ $formateur->poste }}</td>
            <td>{{ $formateur->tel }}</td>
            <td>{{ $formateur->metier->metier }}</td>
            <td>
                <div class="d-flex justify-content-center">
                    <!-- Show Button -->
                    <a href="{{ route('formateurs.show', $formateur->id) }}" class="btn btn-link btn-sm px-3">
                        <i class="fas fa-eye"></i> <!-- Icon for show -->
                    </a>
                    <!-- Update Button -->
                    <a href="{{ route('formateurs.edit', $formateur->id) }}" class="btn btn-link btn-sm px-3">
                        <i class="fas fa-edit"></i> <!-- Icon for update -->
                    </a>
                    <!-- Delete Button -->
                    <form action="{{ route('formateurs.destroy', $formateur->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                        onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet élément en cours ?');"
                         class="btn btn-link btn-sm px-3">
                            <i class="fas fa-trash"></i> <!-- Icon for delete -->
                        </button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
        <tr>
            <td class="text-center" colspan="2">
                <div class="d-flex justify-content-center">
                    {{ $formateurs->links() }}
                </div>
            </td>
        </tr>
    </tbody>
</table>


@endsection

