@extends('layouts.app')
@section('content')
<form style="width: 22rem;" method="POST" action="{{route('etablissements.update',$etablissement->id)}}" class="mt-5">
    <!-- Name input -->
    @csrf
    @method('PUT')
    <div class="form-outline mb-4">
        <label class="form-label" for="form5Example1">Etablissement</label>
      <input type="text" name="etablissement" value='{{$etablissement->etablissement}}' id="form5Example1" class="form-control" />
      @error('etablissement')
      <div class="alert alert-danger m-3">
        {{ $message }}
    </div>
      @enderror
    </div>
    <div  class="form-outline mb-4">
        <label class="form-label" for="form5Example1">Code</label>
      <input type="text" name="code" value='{{$etablissement->code}}' id="form5Example1" class="form-control" />
      @error('code')
      <div class="alert alert-danger m-3">
        {{ $message }}
    </div>
      @enderror
    </div>

    <div  class="form-outline mb-4">
        <label class="form-label" for="form5Example1">Adresse</label>
      <input type="text" name="adresse" value='{{$etablissement->adresse}}' id="form5Example1" class="form-control" />
      @error('adresse')
      <div class="alert alert-danger m-3">
        {{ $message }}
    </div>
      @enderror
    </div>

    <div  class="form-outline mb-4">
        <label class="form-label" for="form5Example1">Telephone</label>
      <input type="text" name="tel" value='{{$etablissement->tel}}' id="form5Example1" class="form-control" />
      @error('tel')
      <div class="alert alert-danger m-3">
        {{ $message }}
    </div>
      @enderror
    </div>

    <div  class="form-outline mb-4">
        <label class="form-label" for="form5Example1">Fax</label>
      <input type="text" name="fax" value='{{$etablissement->fax}}' id="form5Example1" class="form-control" />
      @error('fax')
      <div class="alert alert-danger m-3">
        {{ $message }}
    </div>
      @enderror
    </div>
    <!-- Email input -->
    <div class="form-outline mb-4">
        <label class="form-label" for="regionSelect">Metiers</label>
        <select id="regionSelect" name="ville_id" class="form-control">
            <option value="">choisir ville</option>
            @foreach($villes as $ville)
            @if($etablissement->ville_id == $ville->id)
            <option  selected value="{{ $ville->id }}">{{ $ville->ville }}</option>
            @else
            <option value="{{ $ville->id }}">{{ $ville->ville }}</option>
            @endif
            @endforeach
        </select>
        @error('ville_id')
      <div class="alert alert-danger m-3">
        {{ $message }}
    </div>
      @enderror
    </div>


    <!-- Submit button -->
    <button  type="submit" class="btn btn-primary btn-block mb-4">Submit</button>
  </form>
@endsection
