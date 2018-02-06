<?php
session_start();

if(isset ($_SESSION["bekeken"])) {
    $_SESSION["bekeken"] = $_SESSION["bekeken"] + 1;
    echo "pagina bezocht: ".$_SESSION["bekeken"]. " keer";
} else {
    $_SESSION["bekeken"] = 0;
}

?>