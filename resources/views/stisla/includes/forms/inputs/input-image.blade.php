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
    <input id="{{ $name ?? $id }}" class="form-control" type="text" name="{{ $name ?? $id }}" readonly @if ($required) required @endif @if(isset($d) && !empty($d[$name]) && $d[$name] != '[]') value="{{ get_uploaded_file_name($d[$name ?? $id]) }}" @endif>
  </div>
  <div id="{{ 'holder' . ($name ?? $id) }}" style="margin-top:15px;max-height:100px;">
      @php
        if (isset($d) && !empty($d[$name]) && $d[$name] != '[]') {
            echo "<img src='". get_uploaded_file_name($d[$name ?? $id]) ."' style='height: 5rem;' />";
        }
      @endphp
  </div>

  @error($name ?? $id)
    <div id="{{ $name ?? $id }}-error-feedback" class="invalid-feedback" for="{{ $name ?? $id }}">
      {{ $message }}
    </div>
  @enderror
</div>