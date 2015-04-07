<?php
if (isset($_POST['contentVar']) && $_POST['contentVar']!=''){
    $v=$_POST['contentVar'];
}

switch ($v) {
    case 0:
        echo "i equals 0";
        break;
    case 1:
        echo "i equals 1";
        break;
    case 2:
        echo "i equals 2";
        break;
    default:
        echo "<h1>error</h1>";
}
