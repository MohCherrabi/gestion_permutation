@extends('layouts.app')
@section('content')
<div style="width: 22rem;" class="mt-5">
    <div class="form-outline mb-4">
        <label class="form-label" for="form5Example1">Ville</label> : {{$ville->ville}}<br>
        <label class="form-label" for="form5Example1">Region</label> : {{$ville->region->region}}<br>
    </div>
    <a  href="{{route('villes.index')}}" class="btn btn-primary btn-block mb-4">Annuler</a>
  </div>
@endsection
