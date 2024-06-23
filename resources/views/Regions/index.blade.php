@extends('layouts.app')
@section('content')

<table class="table align-middle text-center">
    <thead>
        <tr>
            <th scope="col">Region</th>
            <th scope="col">Actions</th>
            <th><a href="{{route('regions.create')}}" class="btn btn-primary">Ajouter region</a></th>
        </tr>
    </thead>
    <tbody>
        @foreach($regions as $region)
        <tr>
            <td>{{ $region->region }}</td>
            <td>
                <div class="d-flex justify-content-center">
                    <!-- Show Button -->
                    <a href="{{ route('regions.show', $region->id) }}" class="btn btn-link btn-sm px-3">
                        <i class="fas fa-eye"></i> <!-- Icon for show -->
                    </a>
                    <!-- Update Button -->
                    <a href="{{route('regions.edit', $region->id)}}" class="btn btn-link btn-sm px-3">
                        <i class="fas fa-edit"></i> <!-- Icon for update -->
                    </a>
                    <!-- Delete Button -->
                    <form action="{{ route('regions.destroy', $region->id) }}" method="POST">
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
                    {{ $regions->links() }}
                </div>
            </td>
        </tr>
    </tbody>
</table>


@endsection

