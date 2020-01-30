$(function() {
  $(document)
    .ajaxStart(function () {
      $('#prog').show();
    })
    .ajaxStop(function () {
      $('#prog').hide();
    })
    .ajaxError(function (e, xhr, opts, err) {
      $('#result').html('<strong>エラー発生：' + err + '</strong>');
    });

  var onsearch = function(e) {
    var page_num = !$(this).text() ? 1 : $(this).text();
    var page_size = 20;
【ここに入力】
    .done(function(data) {
      $('#result').empty();
      $('#pager').empty();

【ここに入力】

      var pager = $('#pager');
【ここに入力】

      if (page_cnt > 1) {
        for (var i = 1; i <= page_cnt; i++) {
          if (i > 10) { break; }
          pager.append(
            $('<a></a>')
              .addClass('pager_link')
              .attr('href', '#')
              .text(i)
          );
        }
      }
    });
    e.preventDefault();
  };

  $('#search').click(onsearch);
  $('#pager').on('click', '.pager_link', onsearch);
});