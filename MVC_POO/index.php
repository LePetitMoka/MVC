<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion scolarité</title>
</head>
<body>
    <center>
        <h1>Gestion de la scolarite d'IRIS</h1>
        <a href="index.php?page=0">
            <img src="images/home.png" height="100" alt="">
        </a>
        <a href="index.php?page=1">
            <img src="images/class.png" height="100" alt="">
        </a>
        <a href="index.php?page=2">
            <img src="images/student.png" height="100" alt="">
        </a>
        <a href="index.php?page=3">
            <img src="images/teacher.png" height="100" alt="">
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
    </center>
</body>
</html>