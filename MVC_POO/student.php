<h2>Gestion des etudiants</h2>
<?php
    $lesClasses=$unControleur->selectAllClasses();
    echo "<br>";
    require_once ("vue/vue_insert_student.php");
    echo "<br>";
    $Students=$unControleur->selectAllStudents();

    echo "<br>";
    if(isset($_POST['Valider'])){
        $unControleur->insertStudent($_POST);
    }

    echo "<br>";
    require_once ("vue/vue_student.php");
?>