<?php
    require_once("controleur/controleur.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IRIS Scolarité</title>
</head>
<body>
    <center>
            <h1>IRIS SCOLARITE</h1>
            <?php
                //recuperation des classes
                $lesClasses = selectLesClasses();
                //afficher les classes
                require_once("vue/vue_les_classes.php");
            ?>
    </center>
</body>
</html>