<h2>Gestion des etudiants</h2>
<?php
    echo "<br>";
    require_once ("vue/vue_insert_student.php");
    echo "<br>";
    $Students=$unControleur->selectAllStudents();

    if(isset($_POST['Valider'])){
        $unControleur->insertStudent($_POST);
    }

    echo "<br>";
    require_once ("vue/vue_student.php");
?>