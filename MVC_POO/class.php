<h2>Gestion des classes</h2>

<?php
    if(isset($_POST['Valider'])){
        $unControleur->insertClasse($_POST);
    }
    $laClasse = null;
    if(isset($_GET['action']) && isset ($_GET['idclasse'])){
        $action = $_GET['action'];
        $idclasse = $_GET['idclasse'];
        switch($action){
            case 'sup': $unControleur->deleteClasse($idclasse);break;
            case 'edit': $laClasse = $unControleur->selectWhereClasse($idclasse);break;
        }
    }
    echo "<br>";
    require_once ("vue/vue_insert_class.php");
    echo "<br>";
    if(isset($_POST['Modifier'])){
        $unControleur->updateClasse($_POST);
    }
    $lesClasses=$unControleur->selectAllClasses();
    echo "<br>";
    require_once ("vue/vue_class.php");
?>