@extends('layouts.app')
@section('content')
<form style="width: 22rem;" method="POST" action="{{route('permutations.update',$permutation->id)}}" class="mt-5">
    <!-- Name input -->
    @csrf
    @method('PUT')
    <div  class="form-outline mb-4">
        <label class="form-label" for="form5Example1">Date</label>
      <input type="date" name="date" value='{{$permutation->date}}' id="form5Example1" class="form-control" />
      @error('date')
      <div class="alert alert-danger m-3">
        {{ $message }}
    </div>
      @enderror
    </div>
    <div  class="form-outline mb-4">
        <label class="form-label" for="form5Example1">Valide</label><br>
        <label class="form-label" for="form5Example1">Oui</label>
      <input type="radio" name="valide" value='1' @if($permutation->valide == 1) checked @endif id="form5Example1" style="width:15px;height: 18px;" class="p-4 mr-3" />
      <label class="form-label" for="form5Example1">Non</label>
      <input type="radio" name="valide" value='0' id="form5Example1" @if($permutation->valide == 0) checked @endif style="width:15px;height: 18px;"class="p-4" />
      @error('valide')
      <div class="alert alert-danger m-3">
        {{ $message }}
    </div>
      @enderror
    </div>

    <!-- Email input -->
    <div class="form-outline mb-4">
        <label class="form-label" for="regionSelect">Villes</label>
        <select id="regionSelect" name="ville_id" class="form-control">
            <option value="">choisir ville</option>
            @foreach($villes as $ville)
            @if($permutation->ville_id == $ville->id)
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
    <div class="form-outline mb-4">
        <label class="form-label" for="regionSelect">Formateurs</label>
        <select id="regionSelect" name="formateur_id" class="form-control">
            <option value="">choisir formateur</option>
            @foreach($formateurs as $formateur)
            @if($permutation->formateur_id== $formateur->id)
            <option selected value="{{ $formateur->id }}">{{ $formateur->nomx }}</option>
            @else
            <option value="{{ $formateur->id }}">{{ $formateur->nom }}</option>
            @endif
            @endforeach
        </select>
        @error('formateur_id')
      <div class="alert alert-danger m-3">
        {{ $message }}
    </div>
      @enderror
    </div>

    <!-- Submit button -->
    <button  type="submit" class="btn btn-primary btn-block mb-4">Submit</button>
  </form>
@endsection
