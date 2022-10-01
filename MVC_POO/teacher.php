<h2>Gestion des professeurs</h2>

<?php
    require_once ("vue/vue_insert_teacher.php");
    $Teachers=$unControleur->selectAllTeachers();
    require_once ("vue/vue_teacher.php");
?>