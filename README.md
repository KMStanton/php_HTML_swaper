# php_HTML_swaper
With this you can easily create code to swap HTML within a div.

Instructions: Place at top of main inex page:<br>
if (!isset($_SESSION['i']) || $_SESSION['i']==''){<br>
$_SESSION['i'] = '0';<br>
}

Call function by:<br>
including file<br>
div_swap($link_text, $div_target, $loader, $pass_var)

Variable Descriptions:<br>
$link_text //displayed text<br>
$div_target  //What div content are you replacing<br>
$loader  //what's being loaded<br>
$pass_var  //values being passed<br>
