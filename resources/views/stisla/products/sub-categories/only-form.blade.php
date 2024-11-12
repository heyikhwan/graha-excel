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
    @include('stisla.includes.forms.inputs.input-image', [
        'required' => false,
        'name' => 'image',
        'label' => 'Image',
    ])
  </div>
  <div class="col-md-12">
    @include('stisla.includes.forms.inputs.input', ['required' => false, 'name' => 'page_title', 'label' => 'Page Title'])
  </div>
  <div class="col-md-12">
    @include('stisla.includes.forms.editors.summernote', [
        'required' => false,
        'name' => 'meta_description',
        'label' => 'Meta Description',
        'simple' => true,
        'id' => 'summernote_simple',
    ])
  </div>
  <div class="col-md-12">
    @include('stisla.includes.forms.inputs.input', ['required' => false, 'name' => 'url_title', 'label' => 'Url Title'])
  </div>
  <div class="col-md-12">
    @include('stisla.includes.forms.inputs.input-number', ['required' => false, 'name' => 'ordering', 'label' => 'Ordering'])
  </div>
</div>

<script>
  var route_prefix = "/file-managers";
  $('.lfm').filemanager('file', {prefix: route_prefix});
</script>