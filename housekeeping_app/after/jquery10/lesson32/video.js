$(function() {
  var onsearch = function(e) {
    var page_num = !$(this).text() ? 1 : $(this).text();
    var page_size = 20;
    $.get(
      '../lesson30/video.php',
      {
        keywd: $('#keywd').val(),
        page: page_num
      }
    )
    .done(function(data) {
      $('#result').empty();
      $('#pager').empty();

      $('entry', data).each(function() {
        $('#result').append(
          $('<a></a>')
            .attr('href', $('link[type="text/html"]', this).attr('href'))
            .append(
               $('<img>')
                .addClass('thumb')
                .attr({
                  src: $('media\\:thumbnail, thumbnail', this).attr('url'),
                  title: $('title', this).text()
                })
            )
        );
      });

      var pager = $('#pager');
      var page_cnt = Math.ceil(
        $('openSearch\\:totalResults, totalResults', data).text() / page_size);

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