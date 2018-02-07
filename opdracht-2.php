<?php
if(!isset($_COOKIE['cookie'])) {
    $cookie_value = 1;
    setcookie('cookie', $cookie_value, time() + (86400 * 30), "/");
}
else {
    $cookie_value = ++$_COOKIE['cookie'];
    setcookie('cookie', $cookie_value, time() + (86400 * 30), "/");
}

session_start();

if(isset ($_SESSION["bekeken"])) {
    $_SESSION["bekeken"] = $_SESSION["bekeken"] + 1;
    echo "pagina bezocht in deze sessie: ".$_SESSION["bekeken"]. " keer bekeken";
} else {
    $_SESSION["bekeken"] = 0;
}


if(isset($_COOKIE['cookie'])) {
    $_COOKIE['cookie']=$_COOKIE['cookie'] + 1;
    echo "<br> je hebt deze pagina totaal ". $_COOKIE['cookie']. " keer bezocht.";
}

?>