$(function() {
  $('#dialog').dialog({
    width: 600,
    height: 450,
    autoOpen: false,
    modal: true,
    show: 'bounce',
    hide: 'explode',
    buttons: {
      'ダウンロード': function() {
        location.href = 'http://jqueryui.com/download';
      },
      '閉じる': function() { $(this).dialog('close'); }
    }
  });

  $('#opener').click(function() {
    $('#dialog').dialog('open');
  });
});