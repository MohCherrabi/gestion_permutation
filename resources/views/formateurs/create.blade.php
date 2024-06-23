@extends('layouts.app')
@section('content')
<form style="width: 22rem;" method="POST" enctype="multipart/form-data" action="{{route('formateurs.store')}}" class="mt-5">
    <!-- Name input -->
    @csrf
    <div class="form-outline mb-4">
        <label class="form-label" for="form5Example1">Matricule</label>
      <input type="text" name="matricule" value='{{old('matricule')}}' id="form5Example1" class="form-control" />
      @error('matricule')
      <div class="alert alert-danger m-3">
        {{ $message }}
    </div>
      @enderror
    </div>
    <div  class="form-outline mb-4">
        <label class="form-label" for="form5Example1">Nom</label>
      <input type="text" name="nom" value='{{old('nom')}}' id="form5Example1" class="form-control" />
      @error('nom')
      <div class="alert alert-danger m-3">
        {{ $message }}
    </div>
      @enderror
    </div>
    <div  class="form-outline mb-4">
        <label class="form-label" for="form5Example1">Photo</label>
      <input type="file" name="photo" value='{{old('photo')}}' id="form5Example1" class="form-control" />
      @error('photo')
      <div class="alert alert-danger m-3">
        {{ $message }}
    </div>
      @enderror
    </div>
    <div  class="form-outline mb-4">
        <label class="form-label" for="form5Example1">Pernom</label>
      <input type="text" name="prenom" value='{{old('prenom')}}' id="form5Example1" class="form-control" />
      @error('prenom')
      <div class="alert alert-danger m-3">
        {{ $message }}
    </div>
      @enderror
    </div>
    <div  class="form-outline mb-4">
        <label class="form-label" for="form5Example1">Grade</label>
      <input type="text" name="grade" value='{{old('grade')}}' id="form5Example1" class="form-control" />
      @error('grade')
      <div class="alert alert-danger m-3">
        {{ $message }}
    </div>
      @enderror
    </div>
    <div  class="form-outline mb-4">
        <label class="form-label" for="form5Example1">Date naissance</label>
      <input type="date" name="date_naissance" value='{{old('date_naissance')}}' id="form5Example1" class="form-control" />
      @error('date_naissance')
      <div class="alert alert-danger m-3">
        {{ $message }}
    </div>
      @enderror
    </div>
    <div  class="form-outline mb-4">
        <label class="form-label" for="form5Example1">Date recrutement</label>
      <input type="date" name="date_recrutement" value='{{old('date_recrutement')}}' id="form5Example1" class="form-control" />
      @error('date_recrutement')
      <div class="alert alert-danger m-3">
        {{ $message }}
    </div>
      @enderror
    </div>
    <div  class="form-outline mb-4">
        <label class="form-label" for="form5Example1">Post</label>
      <input type="text" name="poste" value='{{old('poste')}}' id="form5Example1" class="form-control" />
      @error('poste')
      <div class="alert alert-danger m-3">
        {{ $message }}
    </div>
      @enderror
    </div>
    <div  class="form-outline mb-4">
        <label class="form-label" for="form5Example1">Telephone</label>
      <input type="text" name="tel" value='{{old('tel')}}' id="form5Example1" class="form-control" />
      @error('tel')
      <div class="alert alert-danger m-3">
        {{ $message }}
    </div>
      @enderror
    </div>
    <div  class="form-outline mb-4">
        <label class="form-label" for="form5Example1">Email</label>
      <input type="email" name="email" value='{{old('email')}}' id="form5Example1" class="form-control" />
      @error('email')
      <div class="alert alert-danger m-3">
        {{ $message }}
    </div>
      @enderror
    </div>
    <div  class="form-outline mb-4">
        <label class="form-label" for="form5Example1">Password</label>
      <input type="password" name="password" value='{{old('password')}}' id="form5Example1" class="form-control" />
      @error('password')
      <div class="alert alert-danger m-3">
        {{ $message }}
    </div>
      @enderror
    </div>
    <!-- Email input -->
    <div class="form-outline mb-4">
        <label class="form-label" for="regionSelect">Metiers</label>
        <select id="regionSelect" name="metier_id" class="form-control">
            <option value="">choisir metier</option>
            @foreach($metiers as $metier)
            @if(old('metier_id') == $metier->id)
            <option  selected value="{{ $metier->id }}">{{ $metier->metier }}</option>
            @else
            <option value="{{ $metier->id }}">{{ $metier->metier }}</option>
            @endif
            @endforeach
        </select>
        @error('metier_id')
      <div class="alert alert-danger m-3">
        {{ $message }}
    </div>
      @enderror
    </div>
    <div class="form-outline mb-4">
        <label class="form-label" for="regionSelect">Etablissements</label>
        <select id="regionSelect" name="etablissement_id" class="form-control">
            <option value="">choisir etablissement</option>
            @foreach($etablissements as $etablissement)
            @if(old('etablissement_id') == $etablissement->id)
            <option selected value="{{ $etablissement->id }}">{{ $etablissement->etablissement }}</option>
            @else
            <option value="{{ $etablissement->id }}">{{ $etablissement->etablissement }}</option>
            @endif
            @endforeach
        </select>
        @error('etablissement_id')
      <div class="alert alert-danger m-3">
        {{ $message }}
    </div>
      @enderror
    </div>

    <!-- Submit button -->
    <button  type="submit" class="btn btn-primary btn-block mb-4">Submit</button>
  </form>
@endsection
