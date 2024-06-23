@extends('layouts.app')
@section('content')

<table class="table align-middle text-center">
    <thead>
        <tr>
            <th scope="col">Établissement</th>
            <th scope="col">Code</th>
            <th scope="col">Adresse</th>
            <th scope="col">Téléphone</th>
            <th scope="col">Fax</th>
            <th scope="col">Ville</th>
            <th scope="col">Actions</th>
            <th><a href="{{ route('etablissements.create') }}" class="btn btn-primary">Ajouter etablissment</a></th>


        </tr>
    </thead>
    <tbody>
        @foreach($etablissements as $etablissement)
        <tr>
            <td>{{ $etablissement->etablissement }}</td>
            <td>{{ $etablissement->code }}</td>
            <td>{{ $etablissement->adresse }}</td>
            <td>{{ $etablissement->tel }}</td>
            <td>{{ $etablissement->fax }}</td>
            <td>{{ $etablissement->ville->ville }}</td>
            <td>
                <div class="d-flex justify-content-center">
                    <!-- Show Button -->
                    <a href="{{ route('etablissements.show', $etablissement->id) }}" class="btn btn-link btn-sm px-3">
                        <i class="fas fa-eye"></i> <!-- Icon for show -->
                    </a>
                    <!-- Update Button -->
                    <a href="{{route('etablissements.edit', $etablissement->id)}}" class="btn btn-link btn-sm px-3">
                        <i class="fas fa-edit"></i> <!-- Icon for update -->
                    </a>
                    <!-- Delete Button -->
                    <form action="{{ route('etablissements.destroy', $etablissement->id) }}" method="POST">
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
                    {{ $etablissements->links() }}
                </div>
            </td>
        </tr>
    </tbody>
</table>


@endsection

