@extends('layouts.app')
@section('content')
<form style="width: 22rem;" method="POST" action="{{route('regions.store')}}" class="mt-5">
    <!-- Name input -->
    @csrf
    <div class="form-outline mb-4">
        <label class="form-label" for="form5Example1">Region</label>
      <input type="text" name="region" id="form5Example1" class="form-control" />
      @error('region')
      <div class="alert alert-danger m-3">
        {{ $message }}
    </div>
      @enderror
    </div>

    <!-- Email input -->


    <!-- Submit button -->
    <button  type="submit" class="btn btn-primary btn-block mb-4">Submit</button>
  </form>
@endsection
