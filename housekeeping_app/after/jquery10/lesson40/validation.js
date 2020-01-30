$(function() {
  $.fn.extend({
    validate: function() {
      var msgs;
      var setError = function(elem, msg) {
        msgs.push('<li>' + msg + '</li>');
        $(elem)
          .addClass('error_field')
          .after('<span class="error_mark">*</span>');
      };

      this.submit(function(e) {
        msgs = [];
        $('.error_mark', this).remove();
        $('.valid', this)
          .removeClass('error_field')
          .filter('.required')
          .each(function() {
            if ($(this).val() === '') {
              setError(this,
                $(this).prev('label').text() + 'は必須入力です。');
            }
          })
          .end()
          .filter('.length')
          .each(function() {
            if ($(this).val().length > $(this).data('length')) {
              setError(this,
                $(this).prev('label').text() + 'は' +
                $(this).data('length') + '文字以内で入力してください。');
            }
          })
          .end()
          .filter('.range')
          .each(function() {
            var v = parseFloat($(this).val());
            if (v < $(this).data('min') || v > $(this).data('max')) {
              setError(this,
                $(this).prev('label').text() + 'は' +
                $(this).data('min') + '～' + $(this).data('max') +
                'の範囲で入力してください。');
            }
          })
          .end()
          .filter('.inarray')
          .each(function() {
            var opts = $(this).data('option').split(' ');
            if ($.inArray($(this).val(), opts) === -1) {
              setError(this,
                $(this).prev('label').text() + 'は' +
                opts.toString() + 'のいずれかで入力してください。');
            }
          })
          .end()
          .filter('.regexp')
          .each(function() {
            var reg = new RegExp($(this).data('pattern'), 'gi');
            if (!reg.test($(this).val())) {
              setError(this,
                $(this).prev('label').text() + 'の形式が間違っています。');
            }
          });

        if (msgs.length === 0) {
          $('#error_summary').css('display', 'none');
        } else {
          $('#error_summary')
            .css('display', 'block')
            .html(msgs.join(''));
          e.preventDefault();
        }
      });
      return this;
    }
  });
})(jQuery);