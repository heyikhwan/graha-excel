<div class="row">
  <div class="col-12">
    @isset($d)
      @method('PUT')
    @endisset

    @csrf
  </div>
  <div class="col-md-12">
    @include('stisla.includes.forms.inputs.input', ['required' => true, 'name' => 'title', 'label' => 'Title'])
  </div>
  <div class="col-md-12">
    @include('stisla.includes.forms.inputs.input', ['required' => true, 'name' => 'link', 'label' => 'Link'])
  </div>
  <div class="col-md-12">
    @include('stisla.includes.forms.inputs.input-image', [
        'required' => true,
        'name' => 'image',
        'label' => 'Image',
    ])
  </div>
  <div class="col-md-12">
    @include('stisla.includes.forms.inputs.input-image', [
        'required' => true,
        'name' => 'mobile_image',
        'label' => 'Mboile Image',
    ])
  </div>
  <div class="col-md-12">
    @include('stisla.includes.forms.editors.summernote', [
        'required' => true,
        'name' => 'content',
        'label' => 'Content',
        'id' => 'summernote',
    ])
  </div>
</div>

<script>
  var route_prefix = "/file-managers";
  $('.lfm').filemanager('file', {prefix: route_prefix});

  var lfm = function(options, cb) {
    var route_prefix = (options && options.prefix) ? options.prefix : '/file-managers';
    window.open(route_prefix + '?type=' + options.type || 'file', 'FileManager', 'width=900,height=600');
    window.SetUrl = cb;
  };

  // Initialize summernote with LFM button in the popover button group
  // Please note that you can add this button to any other button group you'd like
  $('.summernote').summernote({
    height: 300,
    toolbar: [['style', ['style']], ['font', ['bold', 'underline', 'clear']], ['fontname', ['fontname']], ['color', ['color']], ['para', ['ul', 'ol', 'paragraph']], ['view', ['fullscreen', 'codeview']]],
    popover: {
      link: [['link', ['linkDialogShow', 'unlink']]],
      air: [['color', ['color']], ['font', ['bold', 'underline', 'clear']], ['para', ['ul', 'paragraph']], ['view', ['fullscreen', 'codeview']]]
    }
  })
</script>