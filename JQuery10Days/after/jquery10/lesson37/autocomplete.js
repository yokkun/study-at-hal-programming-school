$(function() {
  $('#keyword').autocomplete({
    source: 'autocomplete.php',
    delay: 500,
    minLength: 1,
    select: function(e, ui) {
      if (ui.item) { $('#result').text(ui.item.details); }
    }
  });
});