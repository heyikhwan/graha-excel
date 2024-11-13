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
      <select class="form-control select2" name="color[]" multiple id="colorSelect">
        @foreach ($colorOptions as $value => $text)
          <option value="{{ $value }}" @isset($d) {{ in_array($value, $selectedColors ?? []) ? 'selected' : '' }} @endisset>{{ $text }}</option>
        @endforeach
      </select>
    </div>
    <div id="imageInputs">
      @isset($d)
        @if($d->image_color)
          @foreach ($d->image_color as $key => $img_color)
            <div class="form-group" data-color="{{ $img_color->color_id }}">
              <label for="image_color_{{ $img_color->color_id }}">Upload Image for {{ $img_color->color->name }}</label>
              <div class="input-group">
                <span class="input-group-btn">
                  <a data-input="image_color_{{ $img_color->color_id }}" data-preview="holder_{{ $img_color->color_id }}" class="btn btn-primary lfm" target="popup" style="color: white; padding: .5rem .8rem!important;">
                    <i class="fa fa-image"></i> Choose
                  </a>
                </span>
                <input id="image_color_{{ $img_color->color_id }}" class="form-control" type="text" name="image_color[{{ $key }}][{{ $img_color->color_id }}]" value="{{ get_uploaded_file_name($img_color->image) }}" readonly>
              </div>
              <div id="holder_{{ $img_color->color_id }}" style="margin-top:15px;max-height:100px;">
                @php
                    echo "<img src='". get_uploaded_file_name($img_color->image) ."' style='height: 5rem;' />";
                @endphp
              </div>
            </div>
          @endforeach
        @endif
      @endisset
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
      <select class="form-control select2" name="size[]" multiple id="sizeSelect">
        @foreach ($sizeOptions as $value => $text)
          <option value="{{ $value }}" @isset($d) {{ in_array($value, $selectedSizes ?? []) ? 'selected' : '' }} @endisset>{{ $text }}</option>
        @endforeach
      </select>
    </div>
    <div id="imageSizeInputs">
      @isset($d)
        @if($d->image_size)
          @foreach ($d->image_size as $key => $img_size)
            <div class="form-group" data-size="{{ $img_size->size_id }}">
              <label for="image_size_{{ $img_size->size_id }}">Upload Image for {{ $img_size->size->size }}</label>
              <div class="input-group">
                <span class="input-group-btn">
                  <a data-input="image_size_{{ $img_size->size_id }}" data-preview="holder_size_{{ $img_size->size_id }}" class="btn btn-primary lfm" target="popup" style="color: white; padding: .5rem .8rem!important;">
                    <i class="fa fa-image"></i> Choose
                  </a>
                </span>
                <input id="image_size_{{ $img_size->size_id }}" class="form-control" type="text" name="image_size[{{ $key }}][{{ $img_size->size_id }}]" value="{{ get_uploaded_file_name($img_size->image) }}" readonly>
              </div>
              <div id="holder_size_{{ $img_size->size_id }}" style="margin-top:15px;max-height:100px;">
                @php
                    echo "<img src='". get_uploaded_file_name($img_size->image) ."' style='height: 5rem;' />";
                @endphp
              </div>
            </div>
          @endforeach
        @endif
      @endisset
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
    @include('stisla.includes.forms.inputs.input', ['required' => false, 'name' => 'page_title', 'label' => 'Page Title', 'value' => isset($d) ? $d['page_title'] : ''])
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
    @include('stisla.includes.forms.inputs.input', ['required' => false, 'name' => 'url_title', 'label' => 'Url Title', 'value' => isset($d) ? $d['url_title'] : ''])
  </div>
  <div class="col-md-12">
    @include('stisla.includes.forms.inputs.input-number', ['required' => false, 'name' => 'ordering', 'label' => 'Ordering', 'value' => isset($d) ? $d['ordering'] : ''])
  </div>
  <div class="col-md-12">
    @include('stisla.includes.forms.inputs.input-number', ['required' => false, 'name' => 'sidebar_ordering', 'label' => 'Sidebar Ordering', 'value' => isset($d) ? $d['sidebar_ordering'] : ''])
  </div>
  <div class="col-md-12">
    @isset($d)
      @php
        $selectedSlideshow = json_decode($d['slideshows']);
      @endphp
    @endisset
    <div class="form-group slideshows-container">
      <label for="slideshows" class="{{ $errors->has('slideshows') ? 'is-invalid' : '' }}">Slideshows
      </label>
      <div class="input-group">
        <span class="input-group-btn">
          <a data-input="slideshows" data-preview="holder-slideshows" class="btn btn-primary lfm-multiple" data-multiple="true" style="color: white; padding: .5rem .8rem!important;">
            <i class="fa fa-image"></i> Choose
          </a>
        </span>
        <!-- Menggunakan array di input -->
        <input id="slideshows" class="form-control" type="hidden" name="slideshows[]">
      </div>
      <div id="holder-slideshows" style="margin-top:15px;max-height:100px; display: flex; gap: 10px;">
        @isset($d)
          @if($d->slideshows)
            @foreach ($selectedSlideshow as $index => $slideshow)
              @php
                  echo "<img src='". get_uploaded_file_name($slideshow) ."' style='height: 5rem;' />";
              @endphp
            @endforeach
          @endif
        @endisset
      </div>
      @isset($d)
        @if($d->slideshows)
          @foreach ($selectedSlideshow as $index => $slideshow)
            <input type="hidden" name="slideshows[]" value="{{ get_uploaded_file_name($slideshow) }}">
          @endforeach
        @endif
      @endisset
    </div>
  </div>
  <div class="col-md-12">
    @include('stisla.includes.forms.inputs.input-image', [
        'required' => false,
        'name' => 'katalog_link',
        'label' => 'Katalog Link',
    ])
  </div>
  <div class="col-md-12">
    @include('stisla.includes.forms.inputs.input', ['required' => false, 'name' => 'katalog_label', 'label' => 'Katalog Label', 'value' => isset($d) ? $d['katalog_label'] : ''])
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
    @include('stisla.includes.forms.inputs.input', ['required' => false, 'name' => 'below_banner_tagline', 'label' => 'Below Banner Tagline', 'value' => isset($d) ? $d['below_banner_tagline'] : ''])
  </div>
  <div class="col-md-12">
    @include('stisla.includes.forms.inputs.input', ['required' => false, 'name' => 'below_banner_title', 'label' => 'Below Banner Title', 'value' => isset($d) ? $d['below_banner_title'] : ''])
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
    @include('stisla.includes.forms.inputs.input', ['required' => false, 'name' => 'banner_bawah_link', 'label' => 'Banner Bawah Link', 'value' => isset($d) ? $d['banner_bawah_link'] : ''])
  </div>
  <div class="col-md-12">
    @include('stisla.includes.forms.inputs.input-image', [
        'required' => false,
        'name' => 'keunggulan_produk_1',
        'label' => 'Keunggulan Produk 1',
    ])
  </div>
  <div class="col-md-12">
    @include('stisla.includes.forms.inputs.input', ['required' => false, 'name' => 'keunggulan_text_1', 'label' => 'Keunggulan Text 1', 'value' => isset($d) ? $d['keunggulan_text_1'] : ''])
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
    @include('stisla.includes.forms.inputs.input', ['required' => false, 'name' => 'keunggulan_text_2', 'label' => 'Keunggulan Text 2', 'value' => isset($d) ? $d['keunggulan_text_2'] : ''])
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
    @include('stisla.includes.forms.inputs.input', ['required' => false, 'name' => 'keunggulan_text_3', 'label' => 'Keunggulan Text 3', 'value' => isset($d) ? $d['keunggulan_text_3'] : ''])
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
    @include('stisla.includes.forms.inputs.input', ['required' => false, 'name' => 'keunggulan_text_4', 'label' => 'Keunggulan Text 4', 'value' => isset($d) ? $d['keunggulan_text_4'] : ''])
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

  // Mengaktifkan Laravel FileManager dengan multiple selection
  $('.lfm-multiple').filemanager('file', {prefix: route_prefix, multiple: true});

  // Menangani hasil gambar yang dipilih
  $('.lfm-multiple').on('click', function () {
    let route_prefix = '/file-managers';
    window.open(route_prefix + '?type=file&multiple=true', 'FileManager', 'width=900,height=600');
    
    window.SetUrl = function (items) {
      // Kosongkan tampilan pratinjau dan input hidden
      $('#holder-slideshows').empty();
      $('input[name="slideshows[]"]').remove();

      items.forEach(function (item) {
        // Tambahkan setiap URL gambar ke input hidden
        $('<input>').attr({
          type: 'hidden',
          name: 'slideshows[]',
          value: item.url
        }).appendTo('.slideshows-container');

        // Tampilkan pratinjau gambar
        $('#holder-slideshows').append('<img src="' + item.url + '" style="height: 5rem;" />');
      });
    };
  });

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

  $(document).ready(function () {
    // Simpan data gambar yang sudah diunggah
    var uploadedImages = {};

    $('#colorSelect').on('change', function () {
      const selectedColors = $(this).val(); // Dapatkan warna yang dipilih
      const imageInputsContainer = $('#imageInputs');

      // Simpan data gambar yang sudah diunggah
      imageInputsContainer.children().each(function () {
        const color = $(this).data('color');
        const imageUrl = $(this).find('input').val();
        if (imageUrl) {
          uploadedImages[color] = imageUrl;
        }
      });

      // Hapus input gambar yang tidak sesuai pilihan
      imageInputsContainer.children().each(function () {
        const color = $(this).data('color');
        if (!selectedColors.includes(color)) {
          $(this).remove(); // Hapus input jika warna tidak dipilih
        }
      });

      // Tambah input gambar untuk setiap warna yang dipilih
      $.each(selectedColors, function (index, colorValue) {
        // Ambil teks warna dari opsi select
        const colorText = $('#colorSelect option[value="' + colorValue + '"]').text();

        // Cek apakah input gambar untuk warna ini sudah ada
        if (imageInputsContainer.find(`[data-color="${colorValue}"]`).length === 0) {
          const colorInputDiv = $(`
            <div class="form-group" data-color="${colorValue}">
              <label for="image_color_${colorValue}">Upload Image for ${colorText}</label>
              <div class="input-group">
                <span class="input-group-btn">
                  <a data-input="image_color_${colorValue}" data-preview="holder_${colorValue}" class="btn btn-primary lfm" target="popup" style="color: white; padding: .5rem .8rem!important;">
                    <i class="fa fa-image"></i> Choose
                  </a>
                </span>
                <input id="image_color_${colorValue}" class="form-control" type="text" name="image_color[${index}][${colorValue}]" readonly>
              </div>
              <div id="holder_${colorValue}" style="margin-top:15px;max-height:100px;">
              </div>
            </div>
          `);
          imageInputsContainer.append(colorInputDiv); // Tambahkan elemen ke container

          // Jalankan filemanager untuk elemen yang baru ditambahkan
          var route_prefix = "/file-managers";
          colorInputDiv.find('.lfm').filemanager('file', {prefix: route_prefix});

          // Kembalikan gambar yang sudah diunggah sebelumnya
          if (uploadedImages[colorValue]) {
            $(`#image_color_${colorValue}`).val(uploadedImages[colorValue]);
            $(`#holder_${colorValue}`).html(`<img src="${uploadedImages[colorValue]}" style="max-height:100px;">`);
          }
        }
      });
    });
  });

  $(document).ready(function () {
    // Simpan data gambar yang sudah diunggah
    var uploadedImages = {};

    $('#sizeSelect').on('change', function () {
      const selectedSizes = $(this).val(); // Dapatkan warna yang dipilih
      const imageInputsContainer = $('#imageSizeInputs');

      // Simpan data gambar yang sudah diunggah
      imageInputsContainer.children().each(function () {
        const size = $(this).data('size');
        const imageUrl = $(this).find('input').val();
        if (imageUrl) {
          uploadedImages[size] = imageUrl;
        }
      });

      // Hapus input gambar yang tidak sesuai pilihan
      imageInputsContainer.children().each(function () {
        const size = $(this).data('size');
        if (!selectedSizes.includes(size)) {
          $(this).remove(); // Hapus input jika warna tidak dipilih
        }
      });

      // Tambah input gambar untuk setiap warna yang dipilih
      $.each(selectedSizes, function (index, sizeValue) {
        // Ambil teks warna dari opsi select
        const sizeText = $('#sizeSelect option[value="' + sizeValue + '"]').text();

        // Cek apakah input gambar untuk warna ini sudah ada
        if (imageInputsContainer.find(`[data-size="${sizeValue}"]`).length === 0) {
          const sizeInputDiv = $(`
            <div class="form-group" data-size="${sizeValue}">
              <label for="image_size_${sizeValue}">Upload Image for ${sizeText}</label>
              <div class="input-group">
                <span class="input-group-btn">
                  <a data-input="image_size_${sizeValue}" data-preview="holder_size_${sizeValue}" class="btn btn-primary lfm" target="popup" style="color: white; padding: .5rem .8rem!important;">
                    <i class="fa fa-image"></i> Choose
                  </a>
                </span>
                <input id="image_size_${sizeValue}" class="form-control" type="text" name="image_size[${index}][${sizeValue}]" readonly>
              </div>
              <div id="holder_size_${sizeValue}" style="margin-top:15px;max-height:100px;">
              </div>
            </div>
          `);
          imageInputsContainer.append(sizeInputDiv); // Tambahkan elemen ke container

          // Jalankan filemanager untuk elemen yang baru ditambahkan
          var route_prefix = "/file-managers";
          sizeInputDiv.find('.lfm').filemanager('file', {prefix: route_prefix});

          // Kembalikan gambar yang sudah diunggah sebelumnya
          if (uploadedImages[sizeValue]) {
            $(`#image_size_${sizeValue}`).val(uploadedImages[sizeValue]);
            $(`#holder_size_${sizeValue}`).html(`<img src="${uploadedImages[sizeValue]}" style="max-height:100px;">`);
          }
        }
      });
    });
  });
</script>