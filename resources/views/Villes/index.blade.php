@extends('layouts.app')
@section('content')

<table class="table align-middle text-center">
    <thead>
        <tr>
            <th scope="col">Ville</th>
            <th scope="col">Region</th>
            <th scope="col">Actions</th>
            <th><a href="{{route('villes.create')}}" class="btn btn-primary">Ajouter ville</a></th>
        </tr>
    </thead>
    <tbody>
        @foreach($villes as $ville)
        <tr>
            <td>{{ $ville->ville }}</td>
            <td>{{ $ville->region->region }}</td>
            <td>
                <div class="d-flex justify-content-center">
                    <!-- Show Button -->
                    <a href="{{ route('villes.show', $ville->id) }}" class="btn btn-link btn-sm px-3">
                        <i class="fas fa-eye"></i> <!-- Icon for show -->
                    </a>
                    <!-- Update Button -->
                    <a href="{{route('villes.edit', $ville->id)}}" class="btn btn-link btn-sm px-3">
                        <i class="fas fa-edit"></i> <!-- Icon for update -->
                    </a>
                    <!-- Delete Button -->
                    <form action="{{ route('villes.destroy', $ville->id) }}" method="POST">
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
                    {{ $villes->links() }}
                </div>
            </td>
        </tr>
    </tbody>
</table>

@endsection

