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
    $.getJSON(
      'http://gdata.youtube.com/feeds/api/videos?alt=json&callback=?',
      {
        'q' : $('#keywd').val(),
        'start-index' : (page_num - 1)  * page_size + 1,
        'max-results' : page_size
      }
    )
    .done(function(data) {
      $('#result').empty();
      $('#pager').empty();

【ここに入力】
      $('.zoombox').zoombox();

      var pager = $('#pager');
      var page_cnt = Math.ceil(
        data.feed.openSearch$totalResults.$t / page_size);

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