<html>
<head>
    <title>H6 opdrachten</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <style>
    .doos {
        margin: 1em;
    }
    .titel {
        border-bottom: grey 4px solid;
        border-radius: 4px;
        padding: 0.5em;
    }
    </style>
</head>
<body>

<a href="https://www.ictacademie.info/milangupta/downloads/DEVEL 10 toetsvragen H6.docx"><button class="btn btn-primary">Download 10 vragen H6</button></a>
<a href="https://www.ictacademie.info/milangupta/downloads/H6-opdrachten.zip"><button class="btn btn-primary">Download PHP code van H6</button></a>

<h2 class="text-center" style="margin-bottom: 2em;">Hoofdstuk 6</h2>

<div class="container-flex">
    <div class="row">
        <div class="col-lg-5 doos">
            <h3 class="titel">opdracht 1</h3>
            <?php
            session_start();

            if(isset ($_SESSION["bekeken"])) {
                $_SESSION["bekeken"] = $_SESSION["bekeken"] + 1;
                echo "pagina bezocht: ".$_SESSION["bekeken"]. " keer";
            } else {
                $_SESSION["bekeken"] = 0;
            }
            ?>
        </div>

        <div class="col-lg-5 doos"> 
            <h3 class="titel">opdracht 2</h3>

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
        </div>

        <div class="col-lg-5 doos"> 
            <h3 class="titel">opdracht 3</h3>

            <?php
            Tekstvak: 
            Echo rand(1000,9999) 
            . " " 
            . range('A','Z'){mt_rand(0,25)} 
            . range('A','Z'){mt_rand(0,25)};
            ?>
        </div>

        <div class="col-lg-5 doos"> 
            <h3 class="titel">opdracht 4</h3>

            <?php
            $input = 10;
            $omtrek = 2 * 3.14159 * $input;
            $oppervlakte = 3.14159 * ($input * $input);

            echo "input was: $input <br>";
            echo "omtrek van een cirkel met een radius van $input is: $omtrek <br>";
            echo "oppervlakte van een cirkel met een radius van $input is: $oppervlakte <br>";

            ?>
        </div>

        <div class="col-lg-5 doos"> 
            <h3 class="titel">opdracht 5</h3>

            <?php
            $a=5.5;
            $s=50;

            $v=(sqrt(2*$a*$s))*3.6;
            echo "snelheid van een auto met een remspoor van $s is: $v";
            ?>
        </div>

        <div class="col-lg-5 doos"> 
            <h3 class="titel">opdracht 6</h3>

            <?php
            $euro=76.13;
            $dollar=$euro*1.22604;
            echo "&euro;$euro is $" .number_format("$dollar",2);
            ?> 
        </div>

        <div class="col-lg-5 doos">
            <h3 class="titel">opdracht 7</h3>

            <?php
            for($x=1;$x<=30;$x++) {
                $input1=$x;
                $machtgetal=$input1*$input1*$input1;
                echo "$input1 x $input1 x $input1 = $machtgetal<br>";
            }
            ?>
        </div>
    </div>
</div>
</body>
</html>