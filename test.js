(function ($) {
  Drupal.behaviors.momentsthatmatter = {
    attach: function (context, settings) {

      $('#edit-field-check-here input').change(function () {
        $('#edit-field-file-report-number').slideToggle();
      })
    }
  }
})(jQuery);
