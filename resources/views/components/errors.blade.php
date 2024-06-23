@props(['errors'])

{{-- @error($errors)
    @if (is_array($errors) && count($errors) > 0)
        <div class="alert alert-danger">
            @foreach ($errors as $error)
                {{ $message }}<br>
            @endforeach
        </div>
    @elseif(!empty($errors))
        <div class="alert alert-danger">
            {{ $message }}
        </div>
    @endif
@enderror --}}
{{-- @error('region')
      <div class="alert alert-danger m-3">
        {{ $message }}
    </div>
      @enderror --}}
