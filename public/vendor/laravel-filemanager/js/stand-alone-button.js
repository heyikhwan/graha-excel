(function( $ ){

  $.fn.filemanager = function(type, options) {
    type = type || 'file';

    this.on('click', function(e) {
      e.preventDefault();

      // Set route prefix
      var route_prefix = (options && options.prefix) ? options.prefix : '/filemanager';

      // Target elements for input and preview
      var target_input = $('#' + $(this).data('input'));
      var target_preview = $('#' + $(this).data('preview'));

      // Open file manager in a new window
      window.open(route_prefix + '?type=' + type, 'FileManager', 'width=900,height=600');

      // Set the callback function for the file manager
      window.SetUrl = function (items) {
        var file_path = items.map(function (item) {
          return item.url;
        }).join(',');

        // Set the input's value to the selected file URL
        target_input.val(file_path).trigger('change');

        // Clear the previous preview
        target_preview.html('');

        // Append new preview image(s)
        items.forEach(function (item) {
          target_preview.append(
            $('<img>').css('height', '5rem').attr('src', item.thumb_url)
          );
        });

        // Trigger the preview change event
        target_preview.trigger('change');
      };
    });
  }

})(jQuery);
