<h2>Gestion des etudiants</h2>
<?php
    echo "<br>";
    require_once ("vue/vue_insert_student.php");
    echo "<br>";
    $Students=$unControleur->selectAllStudents();
    echo "<br>";
    require_once ("vue/vue_student.php");
?>