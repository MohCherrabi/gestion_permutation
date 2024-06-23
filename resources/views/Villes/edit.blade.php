@extends('layouts.app')
@section('content')
<form style="width: 22rem;" method="POST" action="{{route('villes.update',$ville->id)}}" class="mt-5">
    <!-- Name input -->
    @csrf
    @method('PUT')
    <div data-mdb-input-init class="form-outline mb-4">
        <label class="form-label" for="form5Example1">Ville</label>
      <input type="text" value="{{$ville->ville}}" name="ville" id="form5Example1" class="form-control" />
      @error('ville')
      <div class="alert alert-danger m-3">
        {{ $message }}
    </div>
      @enderror
    </div>

    <!-- Email input -->
    <div class="form-outline mb-4">
        <label class="form-label" for="regionSelect">Regions</label>
        <select id="regionSelect" name="region_id" class="form-control">
            <option value="">choisir region</option>
            @foreach($regions as $region)
            @if($ville->region_id == $region->id)
            <option selected value="{{ $region->id }}">{{ $region->region }}</option>
            @else
            <option value="{{ $region->id }}">{{ $region->region }}</option>
            @endif
            @endforeach
        </select>
        @error('region_id')
      <div class="alert alert-danger m-3">
        {{ $message }}
    </div>
      @enderror
    </div>

    <!-- Submit button -->
    <button  type="submit" class="btn btn-primary btn-block mb-4">Submit</button>
  </form>
@endsection
