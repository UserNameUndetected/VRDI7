<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>1,5L water daags</title>
</head>

<body>
<?php
if (isset($_POST['submit_form'])) {
    $naam = $_POST['naam'];
    $kleur = $_POST['clr'];

    function naamKleur()
    {
        $naam = $_POST['naam'];
        $kleur = $_POST['clr'];

        echo "<div style=font-weight:bold>Uw naam is:</div>$naam<br>";
        echo "<div style=font-weight:bold>Uw favoriete kleur is:</div> <div style=color:$kleur>$kleur</div>";
    }
}
?>
<link rel="stylesheet" href="styleSession.css" type="text/css">
<div class="body-content">
    <div class="module">
        <div class="titleHeading">
            <h1 class="head headerTitle head-primary">Thieme VRDI</h1>
        </div>

        <form class="form" method="post" enctype="multipart/form-data" autocomplete="off">
            Uw naam:<br>
            <input type="text" name="naam" required />
            Wat is uw favoriete kleur (in het Engels):<br>
            <input type="text" name="clr"/>
            <?php
                if(isset($_POST['submit_form'])) {
                    naamKleur();
                }
            ?>
            <input  type="submit" value="Versturen" name="submit_form" class="btn btn-block btn-primary" />
        </form>
    </div>
</div>

</body>
</html>