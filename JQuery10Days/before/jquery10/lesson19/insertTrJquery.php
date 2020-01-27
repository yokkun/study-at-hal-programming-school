    <!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script type="text/javascript" src="jquery-2.0.3.min.js"></script>
    </head>
    <body>
        <script type="text/javascript">
            $(function() {
                $('#book').on('click', '.insert', function() {
                            $(this).parent().parent()
                                    .after($('<tr></tr>')
                                        .append($('<td></td>').text($('#title').val()))
                                        .append($('<td></td>').text($('#author').val()))
                                        .append($('<td></td>').text($('#unit_price').val()))
                                        .append($('<td></td>').text($('#quantity').val()))
                                        .append($('<td></td>').text(parseInt($('#unit_price').val() * parseInt($('#quantity').val()))))
                                        .append($('<td></td>').append($('<input>').attr('type', 'button').addClass('insert').val('追加')))
                                        .append($('<td></td>').append($('<input>').attr('type', 'button').addClass('delete').val('削除')))
                                    );
                    $('#author').val('');
                    $('#price').val('');
                    $('#title').val('').focus();
                    $('#unit_price').val('')
                    $('#quantity').val('')
                });
                $('#book').on('click', '.delete', function() {
                           $(this).parent().parent().remove(); 
                        });
            });
            
        </script>
        <form name="f">
            <label for="title">タイトル：</label>
            <input type="text" id="title" name="title" size="20" /><br>
            <label for="author">著者：</label>
            <input type="text" id="author" name="name" size="20" /><br>
            <label for="price">単価：</label>
            <input type="number" id="unit_price" name="unit_price" size="20" /><br>
            <label for="price">数量：</label>
            <input type="number" id="quantity" name="quantity" size="20" /><br>
            

            <br>
            <table border="1">
                <tbody id="book">
                    <tr><th>タイトル</th><th>著者</th><th>単価</th><th>数量</th><th>小計</th>
                    <th><input type="button" class="insert" value="追加"  /></th>
                    <th>　　</th>
                    </tr>
                </tbody>
            </table>

        </form>
    </body>
</html>

