<html>
<head>
<title>H6 opdrachten</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<a href="https://www.ictacademie.info/milangupta/downloads/DEVEL 10 toetsvragen H6.docx">
<button class="btn btn-primary">Download 10 vragen H6</button>
</a>

<h2 class="text-center">Hoofdstuk 6</h2>

<h3>opdracht 1</h3>
<?php
session_start();

if(isset ($_SESSION["bekeken"])) {
    $_SESSION["bekeken"] = $_SESSION["bekeken"] + 1;
    echo "pagina bezocht: ".$_SESSION["bekeken"]. " keer";
} else {
    $_SESSION["bekeken"] = 0;
}

?>

<br>
<br>

<h3>opdracht 2</h3>
<?php
if(!isset($_COOKIE['cookie'])) {
    $cookie_value = 1;
    setcookie('cookie', $cookie_value, time() + (86400 * 30), "/");
}
else {
    $cookie_value = ++$_COOKIE['cookie'];
    setcookie('cookie', $cookie_value, time() + (86400 * 30), "/");
}


if(isset ($_SESSION["bekeken2"])) {
    $_SESSION["bekeken2"] = $_SESSION["bekeken2"] + 1;
    echo "pagina bezocht in deze sessie: ".$_SESSION["bekeken2"]. " keer bekeken";
} else {
    $_SESSION["bekeken2"] = 0;
}


if(isset($_COOKIE['cookie'])) {
    $_COOKIE['cookie']=$_COOKIE['cookie'] + 1;
    echo "<br> je hebt deze pagina totaal ". $_COOKIE['cookie']. " keer bezocht.";
}

?>
<br>
<br>
<h3>opdracht 3</h3>
<?php
Tekstvak: 
Echo rand(1000,9999) . " " 
. range('A','Z'){mt_rand(0,25)} 
. range('A','Z'){mt_rand(0,25)};




?>
