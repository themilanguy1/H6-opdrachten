<?php
$cookie_name = "totaal";
if(!isset($_COOKIE[$cookie_name])) {
    $cookie_value = 0;
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
}
else {
    setcookie($cookie_name, $cookie_value + 1, time() + (86400 * 30), "/");
}

session_start();


if(isset ($_SESSION["bekeken"])) {
    $_SESSION["bekeken"] = $_SESSION["bekeken"] + 1;
    echo "pagina bezocht: ".$_SESSION["bekeken"]. " keer";
} else {
    $_SESSION["bekeken"] = 0;
}


if(isset($_COOKIE[$cookie_name])) {
    $_COOKIE[$cookie_name]=$_COOKIE[$cookie_name] + 1;
    echo "<br> je hebt deze pagina totaal ". $_COOKIE[$cookie_name]. " keer bezocht.";
}

?>