$(function() {
  var onsearch = function(e) {
【ここに入力】
    $.get(
      '../lesson30/video.php',
      {
        keywd: $('#keywd').val(),
        page: page_num
      }
    )
    .done(function(data) {
      $('#result').empty();
【ここに入力】

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

【ここに入力】
    });
【ここに入力】
  };

  $('#search').click(onsearch);
【ここに入力】
});