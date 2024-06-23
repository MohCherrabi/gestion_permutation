@extends('layouts.app')
@section('content')

<table class="table align-middle text-center">
    <thead>
        <tr><th colspan="5"><a href="{{ route('permutations.create') }}" class="btn btn-primary w-100">Ajouter permutatoins</a></th></tr>
        <tr>
            <th scope="col">Date</th>
            <th scope="col">Ville</th>
            <th scope="col">Formateur</th>
            <th scope="col">Valide</th>
            <th scope="col">Actions</th>


        </tr>
    </thead>
    <tbody>
        @foreach($permutations as $permutation)
        <tr>
            <td>{{ $permutation->date }}</td>
            <td>{{ $permutation->ville->ville }}</td>
            <td>{{ $permutation->formateur->nom }}</td>
            <td>{{ $permutation->valide ? 'Oui' : 'Non' }}</td>
            <td>
                <div class="d-flex justify-content-center">
                    <!-- Show Button -->
                    <a href="{{ route('permutations.show', $permutation->id) }}" class="btn btn-link btn-sm px-3">
                        <i class="fas fa-eye"></i> <!-- Icon for show -->
                    </a>
                    <!-- Update Button -->
                    <a href="{{route('permutations.edit', $permutation->id)}}" class="btn btn-link btn-sm px-3">
                        <i class="fas fa-edit"></i> <!-- Icon for update -->
                    </a>
                    <!-- Delete Button -->
                    <form action="{{ route('permutations.destroy', $permutation->id) }}" method="POST">
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
                    {{ $permutations->links() }}
                </div>
            </td>
        </tr>
    </tbody>
</table>
@endsection

