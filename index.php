<?php
if (!isset($_SESSION['i']) || $_SESSION['i']==''){
    $_SESSION['i'] = '0';
} //generic increment holder
include_once"load_content.php";

//exampel 1
$link_text = 'swap 1'; //displayed text
$div_target = 'myDiv'; //What div content are you replacing
$loader = 'swap_to.php'; //what's being loaded
$pass_var = '1'; //values being passed
div_swap($link_text, $div_target, $loader, $pass_var);

//exampel 2
$link_text = 'swap 2'; //displayed text
$div_target = 'myDiv'; //What div content are you replacing
$loader = 'swap_to.php'; //what's being loaded
$pass_var = '2'; //values being passed
div_swap($link_text, $div_target, $loader, $pass_var);

//exampel 3
$link_text = 'swap 3'; //displayed text
$div_target = 'myDiv'; //What div content are you replacing
$loader = 'swap_to.php'; //what's being loaded
$pass_var = '3'; //values being passed
div_swap($link_text, $div_target, $loader, $pass_var);

//target div
echo "<div id='myDiv'><h1>Default Data</h1></div>";
