<?php
session_start();

$_SESSION["bekeken"] = $_SESSION["bekeken"] + 1;

if(isset ($_SESSION["bekeken"])) {
    echo "pagina bezocht: ".$_SESSION["bekeken"]. " keer";
}
else {
    echo "sessie nog niet geset";
}



?>