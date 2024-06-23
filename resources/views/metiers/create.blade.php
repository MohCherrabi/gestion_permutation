@extends('layouts.app')
@section('content')
<form style="width: 22rem;" method="POST" action="{{route('metiers.store')}}" class="mt-5">
    <!-- Name input -->
    @csrf
    <div class="form-outline mb-4">
        <label class="form-label" for="form5Example1">Metier</label>
      <input type="text" name="metier" id="form5Example1" class="form-control" />
      @error('metier')
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
