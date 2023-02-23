<!doctype html>
<html lang="en">
<head>
    <link href="formular.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Formulař</title>


</head>

<body>
<div class="main">
    <?php

    if ($_GET["jmeno"] == null) {
        $_GET["jmeno"] = " **zapomněl jste ho vložit** ";
    }

    if ($_GET["prijmeni"] == null) {
        $_GET["prijmeni"] = " **zapomněl jste ho vložit** ";
    }

    if ($_GET["mesto"] == null) {
        $_GET["mesto"] = "nezadali jste";
    }

    if ($_GET["favPredmet"] == null) {

        $_GET["favPredmet"] = "nezadali jste";
    }

    if ($_GET["jazyk"] == null) {
        $_GET["jazyk"] = "nezadali jste";
    }

    ?>

    Tve jmeno je <?php echo $_GET["jmeno"]; ?>
    <br>
    Tve přijmeni je <?php echo $_GET["prijmeni"]; ?>
    <br>
    Bydliš v <?php echo $_GET["mesto"]; ?>
    <br>
    Oblibeny předmet: <?php echo $_GET["favPredmet"]; ?>
    <br>
    A muviš: <?php echo $_GET["jazyk"]; ?> jazyky

</div>

</body>

</html>
