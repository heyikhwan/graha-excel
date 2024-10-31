@php
  $props = [];
  $id = $id ?? Str::random(5);
  array_push($props, 'id="' . $id . '"');
  array_push($props, 'name="' . ($name ?? $id) . '"');
  array_push($props, isset($accept) ? 'accept="' . $accept . '"' : '');
  array_push($props, $required ?? false ? 'required' : '');
@endphp

<div class="form-group">
  <label for="{{ $id ?? $name }}" class="{{ $errors->has($name ?? $id) ? 'is-invalid' : '' }}">{{ $label ?? $id }}
    @if ($required ?? false)
      <span class="text-danger">*</span>
    @endif
  </label>
  <div class="input-group">
    <span class="input-group-btn">
      <a data-input="{{ $name ?? $id }}" data-preview="{{ 'holder' . ($name ?? $id) }}" class="btn btn-primary lfm" target="popup" style="color: white; padding: .5rem .8rem!important;">
        <i class="fa fa-image"></i> Choose
      </a>
    </span>
    @isset($d)
    @php
      $findImage = DB::table('uploads')->where('id', $d[$name ?? $id])->first();
    @endphp
    @endisset
    <input id="{{ $name ?? $id }}" class="form-control" type="text" name="{{ $name ?? $id }}" readonly @if ($required) required @endif @if(isset($d) && !empty($d[$name])) value="{{ asset('storage/files/1/' . rawurlencode(substr($findImage->path, strrpos($findImage->path, '/') + 1))) }}" @endif>
  </div>
  <div id="{{ 'holder' . ($name ?? $id) }}" style="margin-top:15px;max-height:100px;">
      @php
        if (isset($d) && !empty($d[$name])) {
            echo "<img src=". asset('storage/files/1/' . rawurlencode(substr($findImage->path, strrpos($findImage->path, '/') + 1))) ." style='height: 5rem;' />";
        }
      @endphp
  </div>

  @error($name ?? $id)
    <div id="{{ $name ?? $id }}-error-feedback" class="invalid-feedback" for="{{ $name ?? $id }}">
      {{ $message }}
    </div>
  @enderror
</div>