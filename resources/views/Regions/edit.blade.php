@extends('layouts.app')
@section('content')
<form style="width: 22rem;" method="POST" action="{{route('regions.update', $region->id)}}" class="mt-5">
    @csrf
    @method('PUT')
    <div class="form-outline mb-4">
        <label class="form-label" for="form5Example1">Region</label>
      <input type="text" name="region" value="{{$region->region}}" id="form5Example1" class="form-control" />
      @error('region')
      <div class="alert alert-danger m-3">
        {{ $message }}
    </div>
      @enderror
    </div>

    <button  type="submit" class="btn btn-primary btn-block mb-4">Submit</button>
  </form>
@endsection
