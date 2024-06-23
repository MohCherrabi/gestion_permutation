@extends('layouts.app')
@section('content')
<div style="width: 22rem;" class="mt-5">
    <div class="form-outline mb-4">
        <label class="form-label" for="form5Example1">Metier</label> : {{$metier->metier}}
    </div>
    <a  href="{{route('metiers.index')}}" class="btn btn-primary btn-block mb-4">Annuler</a>
  </div>
@endsection
