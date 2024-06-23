@extends('layouts.app')
@section('content')
<form style="width: 22rem;" method="POST" enctype="multipart/form-data" action="{{route('formateurs.update',$formateur->id)}}" class="mt-5">
    <!-- Name input -->
    @csrf
    @method('PUT')
    <div class="form-outline mb-4">
        <label class="form-label" for="form5Example1">Matricule</label>
      <input type="text" name="matricule" value='{{$formateur->matricule}}' id="form5Example1" class="form-control" />
      @error('matricule')
      <div class="alert alert-danger m-3">
        {{ $message }}
    </div>
      @enderror
    </div>
    <div  class="form-outline mb-4">
        <label class="form-label" for="form5Example1">Nom</label>
      <input type="text" name="nom" value='{{$formateur->nom}}' id="form5Example1" class="form-control" />
      @error('nom')
      <div class="alert alert-danger m-3">
        {{ $message }}
    </div>
      @enderror
    </div>
    <div  class="form-outline mb-4">
        <label class="form-label" for="form5Example1">Photo</label>
      <input type="file" name="photo" value='{{$formateur->photo}}' id="form5Example1" class="form-control" />
      @error('photo')
      <div class="alert alert-danger m-3">
        {{ $message }}
    </div>
      @enderror
    </div>
    <div  class="form-outline mb-4">
        <label class="form-label" for="form5Example1">Pernom</label>
      <input type="text" name="prenom" value='{{$formateur->prenom}}' id="form5Example1" class="form-control" />
      @error('prenom')
      <div class="alert alert-danger m-3">
        {{ $message }}
    </div>
      @enderror
    </div>
    <div  class="form-outline mb-4">
        <label class="form-label" for="form5Example1">Grade</label>
      <input type="text" name="grade" value='{{$formateur->grade}}' id="form5Example1" class="form-control" />
      @error('grade')
      <div class="alert alert-danger m-3">
        {{ $message }}
    </div>
      @enderror
    </div>
    <div  class="form-outline mb-4">
        <label class="form-label" for="form5Example1">Date naissance</label>
      <input type="date" name="date_naissance" value='{{$formateur->date_naissance}}' id="form5Example1" class="form-control" />
      @error('date_naissance')
      <div class="alert alert-danger m-3">
        {{ $message }}
    </div>
      @enderror
    </div>
    <div  class="form-outline mb-4">
        <label class="form-label" for="form5Example1">Date recrutement</label>
      <input type="date" name="date_recrutement" value='{{$formateur->date_recrutement}}' id="form5Example1" class="form-control" />
      @error('date_recrutement')
      <div class="alert alert-danger m-3">
        {{ $message }}
    </div>
      @enderror
    </div>
    <div  class="form-outline mb-4">
        <label class="form-label" for="form5Example1">Post</label>
      <input type="text" name="poste" value='{{$formateur->poste}}' id="form5Example1" class="form-control" />
      @error('poste')
      <div class="alert alert-danger m-3">
        {{ $message }}
    </div>
      @enderror
    </div>
    <div  class="form-outline mb-4">
        <label class="form-label" for="form5Example1">Telephone</label>
      <input type="text" name="tel" value='{{$formateur->tel}}' id="form5Example1" class="form-control" />
      @error('tel')
      <div class="alert alert-danger m-3">
        {{ $message }}
    </div>
      @enderror
    </div>
    <div  class="form-outline mb-4">
        <label class="form-label" for="form5Example1">Email</label>
      <input type="email" name="email" value='{{$formateur->email}}' id="form5Example1" class="form-control" />
      @error('email')
      <div class="alert alert-danger m-3">
        {{ $message }}
    </div>
      @enderror
    </div>
    <div  class="form-outline mb-4">
        <label class="form-label" for="form5Example1">Password</label>
      <input type="password" name="password" value='{{$formateur->password}}' id="form5Example1" class="form-control" />
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
            @if($formateur->metier_id == $metier->id)
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
            @if($formateur->etablissement_id == $etablissement->id)
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
