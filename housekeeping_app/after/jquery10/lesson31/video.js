$(function() {
  var onsearch = function(e) {
    $.get(
      '../lesson30/video.php',
      {
        keywd: $('#keywd').val(),
        page: 1 
      }
    )
    .done(function(data) {
      $('#result').empty();

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
    });
  };
  $('#search').click(onsearch);
});
