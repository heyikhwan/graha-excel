<div class="row">
  <div class="col-12">
    @isset($d)
      @method('PUT')
    @endisset

    @csrf
  </div>
  <div class="col-md-12">
    @include('stisla.includes.forms.selects.select2', [
        'id' => 'select2',
        'name' => 'parent',
        'options' => $selectOptions,
        'label' => 'Parent Category',
        'required' => true,
    ])
  </div>
  <div class="col-md-12">
    @include('stisla.includes.forms.inputs.input', ['required' => true, 'name' => 'name', 'label' => 'Name'])
  </div>
  <div class="col-md-12">
    <div class="form-group">
      <label for="image" class="{{ $errors->has('image') ? 'text-danger' : '' }}">Image<span class="text-danger">*</span>
      </label>
      <div class="input-group">
        <span class="input-group-btn">
          <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary" target="popup" style="color: white; padding: .5rem .8rem!important;">
            <i class="fa fa-image"></i> Choose
          </a>
        </span>
        @isset($d)
        @php
          $findImage = DB::table('uploads')->where('id', $d['image'])->first();
        @endphp
        @endisset
        <input id="thumbnail" class="form-control" type="text" name="image" readonly required @isset($d) value="{{ asset('storage/files/1/' . rawurlencode(substr($findImage->path, strrpos($findImage->path, '/') + 1))) }}" @endisset>
      </div>
      <div id="holder" style="margin-top:15px;max-height:100px;">
          @php
            if (isset($d) && !empty($d['image'])) {
                echo "<img src=". asset('storage/files/1/' . rawurlencode(substr($findImage->path, strrpos($findImage->path, '/') + 1))) ." style='height: 5rem;' />";
            }
          @endphp
      </div>
    </div>
  </div>
  <div class="col-md-12">
    @include('stisla.includes.forms.inputs.input', ['required' => true, 'name' => 'page_title', 'label' => 'Page Title'])
  </div>
  <div class="col-md-12">
    @include('stisla.includes.forms.editors.summernote', [
        'required' => true,
        'name' => 'meta_description',
        'label' => 'Meta Description',
        'simple' => true,
        'id' => 'summernote_simple',
    ])
  </div>
  <div class="col-md-12">
    @include('stisla.includes.forms.inputs.input', ['required' => true, 'name' => 'url_title', 'label' => 'Url Title'])
  </div>
  <div class="col-md-12">
    @include('stisla.includes.forms.inputs.input-number', ['required' => true, 'name' => 'ordering', 'label' => 'Ordering'])
  </div>
</div>

<script>
  var route_prefix = "/file-managers";
  $('#lfm').filemanager('file', {prefix: route_prefix});
</script>