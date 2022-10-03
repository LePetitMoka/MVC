<?php
    require_once("controleur/controleur.class.php");
    require_once("controleur/config_bdd.php");
    //instanciation du controleur
    $unControleur = new Controleur($serveur, $bdd, $user, $mdp);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Gestion scolarité</title>
</head>
<body>
    <div class="container-fluid">
        <center>
            <h1>Gestion de la scolarite d'IRIS</h1>
            <a href="index.php?page=0">
                <img src="images/home.png" height="100">
            </a>
            <a href="index.php?page=1">
                <img src="images/class.png" height="100">
            </a>
            <a href="index.php?page=2">
                <img src="images/student.png" height="100">
            </a>
            <a href="index.php?page=3">
                <img src="images/teacher.png" height="100">
            </a>
            <a href="index.php?page=4">
                <img src="images/books.png" height="100" alt="">
            </a>
            <?php
                if (isset($_GET['page'])){
                    $page = $_GET['page'];
                }else{
                    $page = 0;
                }
                switch ($page){
                    case 0 : require_once("home.php");break;
                    case 1 : require_once("class.php");break;
                    case 2 : require_once("student.php");break;
                    case 3 : require_once("teacher.php");break;
                    case 4 : require_once("teaching.php");break;
                }
            ?>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
        </center>
    </div>
</body>
</html>