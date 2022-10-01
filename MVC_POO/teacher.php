<h2>Gestion des professeurs</h2>

<?php
    echo "<br>";
    require_once ("vue/vue_insert_teacher.php");
    echo "<br>";
    $Teachers=$unControleur->selectAllTeachers();
    echo "<br>";
    require_once ("vue/vue_teacher.php");
?>