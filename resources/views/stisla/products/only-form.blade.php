<div class="row">
  <div class="col-12">
    @isset($d)
      @method('PUT')
    @endisset

    @csrf
  </div>
  <div class="col-md-12">
    @include('stisla.includes.forms.inputs.input-image', [
        'required' => true,
        'name' => 'image',
        'label' => 'Image',
    ])
  </div>
  <div class="col-md-12">
    @include('stisla.includes.forms.inputs.input', ['required' => true, 'name' => 'title', 'label' => 'Title'])
  </div>
  <div class="col-md-12">
    @include('stisla.includes.forms.selects.select2', [
        'id' => 'select2',
        'name' => 'category',
        'options' => $categoryOptions,
        'label' => 'Category',
    ])
  </div>
  <div class="col-md-12">
    <div class="form-group">
      <label>Sub Category</label>
      <select class="form-control select2" name="sub_cat">
        @foreach ($subCategoryOptions as $value => $text)
          <option value="{{ $value }}">{{ $text }}</option>
        @endforeach
      </select>
    </div>
  </div>
  <div class="col-md-12">
    @include('stisla.includes.forms.editors.summernote', [
        'required' => false,
        'name' => 'description',
        'label' => 'Description',
        'id' => 'summernote',
    ])
  </div>
  <div class="col-md-12">
    @isset($d)
      @php
        $selectedColors = json_decode($d['color']);
      @endphp
    @endisset
    <div class="form-group">
      <label for="color">Color</label>
      <select class="form-control select2" name="color[]" multiple>
        @foreach ($colorOptions as $value => $text)
          <option value="{{ $value }}" @isset($d) {{ in_array($value, $selectedColors ?? []) ? 'selected' : '' }} @endisset>{{ $text }}</option>
        @endforeach
      </select>
    </div>
  </div>
  <div class="col-md-12">
    @isset($d)
      @php
        $selectedSizes = json_decode($d['size']);
      @endphp
    @endisset
    <div class="form-group">
      <label for="size">Size</label>
      <select class="form-control select2" name="size[]" multiple>
        @foreach ($sizeOptions as $value => $text)
          <option value="{{ $value }}" @isset($d) {{ in_array($value, $selectedSizes ?? []) ? 'selected' : '' }} @endisset>{{ $text }}</option>
        @endforeach
      </select>
    </div>
  </div>
  <div class="col-md-12">
    @include('stisla.includes.forms.inputs.input-image', [
        'required' => false,
        'name' => 'dimention',
        'label' => 'Dimention',
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
        'simple' => false,
        'id' => 'summernote_simple',
    ])
  </div>
  <div class="col-md-12">
    @include('stisla.includes.forms.inputs.input', ['required' => false, 'name' => 'url_title', 'label' => 'Url Title'])
  </div>
  <div class="col-md-12">
    @include('stisla.includes.forms.inputs.input-number', ['required' => false, 'name' => 'ordering', 'label' => 'Ordering'])
  </div>
  <div class="col-md-12">
    @include('stisla.includes.forms.inputs.input-number', ['required' => false, 'name' => 'sidebar_ordering', 'label' => 'Sidebar Ordering'])
  </div>
  <div class="col-md-12">
    @include('stisla.includes.forms.inputs.input-image', [
        'required' => false,
        'name' => 'slideshows',
        'label' => 'Slideshows',
    ])
  </div>
  <div class="col-md-12">
    @include('stisla.includes.forms.inputs.input-image', [
        'required' => false,
        'name' => 'katalog_link',
        'label' => 'Katalog Link',
    ])
  </div>
  <div class="col-md-12">
    @include('stisla.includes.forms.inputs.input', ['required' => false, 'name' => 'katalog_label', 'label' => 'Katalog Label'])
  </div>
  <div class="col-md-12">
    @include('stisla.includes.forms.inputs.input-image', [
        'required' => false,
        'name' => 'Aksesoris',
        'label' => 'Aksesoris',
    ])
  </div>
  <div class="col-md-12">
    @include('stisla.includes.forms.inputs.input-image', [
        'required' => false,
        'name' => 'cara_pasang',
        'label' => 'Cara Pasang',
    ])
  </div>
  <div class="col-md-12">
    @include('stisla.includes.forms.inputs.input', ['required' => false, 'name' => 'below_banner_tagline', 'label' => 'Below Banner Tagline'])
  </div>
  <div class="col-md-12">
    @include('stisla.includes.forms.inputs.input', ['required' => false, 'name' => 'below_banner_title', 'label' => 'Below Banner Title'])
  </div>
  <div class="col-md-12">
    @include('stisla.includes.forms.editors.summernote', [
        'required' => false,
        'name' => 'below_banner_desc',
        'label' => 'Below Banner Desc',
        'id' => 'summernote',
    ])
  </div>
  <div class="col-md-12">
    @include('stisla.includes.forms.inputs.input-image', [
        'required' => false,
        'name' => 'right_banner',
        'label' => 'Right Banner',
    ])
  </div>
  <div class="col-md-12">
    @include('stisla.includes.forms.inputs.input-image', [
        'required' => false,
        'name' => 'banner_bawah',
        'label' => 'Banner Bawah',
    ])
  </div>
  <div class="col-md-12">
    @include('stisla.includes.forms.inputs.input', ['required' => false, 'name' => 'banner_bawah_link', 'label' => 'Banner Bawah Link'])
  </div>
  <div class="col-md-12">
    @include('stisla.includes.forms.inputs.input-image', [
        'required' => false,
        'name' => 'keunggulan_produk_1',
        'label' => 'Keunggulan Produk 1',
    ])
  </div>
  <div class="col-md-12">
    @include('stisla.includes.forms.inputs.input', ['required' => false, 'name' => 'keunggulan_text_1', 'label' => 'Keunggulan Text 1'])
  </div>
  <div class="col-md-12">
    @include('stisla.includes.forms.inputs.input-image', [
        'required' => false,
        'name' => 'keunggulan_link_1',
        'label' => 'Keunggulan File 1',
    ])
  </div>
  <div class="col-md-12">
    @include('stisla.includes.forms.inputs.input-image', [
        'required' => false,
        'name' => 'keunggulan_produk_2',
        'label' => 'Keunggulan Produk 2',
    ])
  </div>
  <div class="col-md-12">
    @include('stisla.includes.forms.inputs.input', ['required' => false, 'name' => 'keunggulan_text_2', 'label' => 'Keunggulan Text 2'])
  </div>
  <div class="col-md-12">
    @include('stisla.includes.forms.inputs.input-image', [
        'required' => false,
        'name' => 'keunggulan_link_2',
        'label' => 'Keunggulan File 2',
    ])
  </div>
  <div class="col-md-12">
    @include('stisla.includes.forms.inputs.input-image', [
        'required' => false,
        'name' => 'keunggulan_produk_3',
        'label' => 'Keunggulan Produk 3',
    ])
  </div>
  <div class="col-md-12">
    @include('stisla.includes.forms.inputs.input', ['required' => false, 'name' => 'keunggulan_text_3', 'label' => 'Keunggulan Text 3'])
  </div>
  <div class="col-md-12">
    @include('stisla.includes.forms.inputs.input-image', [
        'required' => false,
        'name' => 'keunggulan_link_3',
        'label' => 'Keunggulan File 3',
    ])
  </div>
  <div class="col-md-12">
    @include('stisla.includes.forms.inputs.input-image', [
        'required' => false,
        'name' => 'keunggulan_produk_4',
        'label' => 'Keunggulan Produk 4',
    ])
  </div>
  <div class="col-md-12">
    @include('stisla.includes.forms.inputs.input', ['required' => false, 'name' => 'keunggulan_text_4', 'label' => 'Keunggulan Text 4'])
  </div>
  <div class="col-md-12">
    @include('stisla.includes.forms.inputs.input-image', [
        'required' => false,
        'name' => 'keunggulan_link_4',
        'label' => 'Keunggulan File 4',
    ])
  </div>
</div>

<script>
  var route_prefix = "/file-managers";
  $('.lfm').filemanager('file', {prefix: route_prefix});

  // Define function to open filemanager window
  var lfm = function(options, cb) {
    var route_prefix = (options && options.prefix) ? options.prefix : '/file-managers';
    window.open(route_prefix + '?type=' + options.type || 'file', 'FileManager', 'width=900,height=600');
    window.SetUrl = cb;
  };

  // Define LFM summernote button
  var LFMButton = function(context) {
    var ui = $.summernote.ui;
    var button = ui.button({
      contents: '<i class="note-icon-picture"></i> ',
      tooltip: 'Insert image with filemanager',
      click: function() {

        lfm({type: 'image', prefix: '/file-managers'}, function(lfmItems, path) {
          lfmItems.forEach(function (lfmItem) {
            context.invoke('insertImage', lfmItem.url);
          });
        });

      }
    });
    return button.render();
  };

  // Initialize summernote with LFM button in the popover button group
  // Please note that you can add this button to any other button group you'd like
  $('.summernote').summernote({
    height: 300,
    toolbar: [['style', ['style']], ['font', ['bold', 'underline', 'clear']], ['fontname', ['fontname']], ['color', ['color']], ['para', ['ul', 'ol', 'paragraph']], ['table', ['table']], ['insert', ['link', 'video']], ['popovers', ['lfm']], ['view', ['fullscreen', 'codeview', 'help']]],
    popover: {
      link: [['link', ['linkDialogShow', 'unlink']]],
      table: [['add', ['addRowDown', 'addRowUp', 'addColLeft', 'addColRight']], ['delete', ['deleteRow', 'deleteCol', 'deleteTable']]],
      air: [['color', ['color']], ['font', ['bold', 'underline', 'clear']], ['para', ['ul', 'paragraph']], ['table', ['table']], ['insert', ['link', 'picture']], ['view', ['fullscreen', 'codeview']]]
    },
    buttons: {
      lfm: LFMButton
    }
  })
</script>