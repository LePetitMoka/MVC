<h2>Gestion des etudiants</h2>
<?php
    require_once ("vue/vue_insert_student.php");
    $Students=$unControleur->selectAllStudents();
    require_once ("vue/vue_student.php");
?>