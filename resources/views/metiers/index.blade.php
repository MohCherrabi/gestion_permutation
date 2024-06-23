@extends('layouts.app')
@section('content')

<table class="table align-middle text-center">
    <thead>
        <tr>
            <th scope="col">Metiers</th>
            <th scope="col">Actions</th>
            <th><a href="{{route('metiers.create')}}" class="btn btn-primary">Ajouter metier</a></th>
        </tr>
    </thead>
    <tbody>
        @foreach($metiers as $metier)
        <tr>
            <td>{{ $metier->metier }}</td>
            <td>
                <div class="d-flex justify-content-center">
                    <!-- Show Button -->
                    <a href="{{ route('metiers.show', $metier->id) }}" class="btn btn-link btn-sm px-3">
                        <i class="fas fa-eye"></i> <!-- Icon for show -->
                    </a>
                    <!-- Update Button -->
                    <a href="{{route('metiers.edit',$metier->id)}}"
                         class="btn btn-link btn-sm px-3">
                        <i class="fas fa-edit"></i>
                    </a>
                    <!-- Delete Button -->
                    <form action="{{ route('metiers.destroy', $metier->id) }}" method="POST">
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
                    {{ $metiers->links() }}
                </div>
            </td>
        </tr>
    </tbody>
</table>

@endsection

