<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<?php
if (empty($pass_var)) {
    $pass_var = '';
}

function div_swap($link_text, $div_target, $loader, $pass_var)
{
//    global $link_text, $div_target, $loader, $pass_var;
    $_SESSION['i']++;
    $i = $_SESSION['i']; //generic increment holder


    echo "<a href='#' onclick='return false' onmousedown='javascript:swapContent$i($pass_var)'>$link_text</a>

    <script language='javascript' type='text/javascript'>
function swapContent$i(cv) {
        $('#$div_target').html('Loading...').show();
        var url = '$loader';
        $.post(url, {contentVar: cv} ,function(data) {
        $('#$div_target').html(data).show();
        });
    }
    </script>
";

}
