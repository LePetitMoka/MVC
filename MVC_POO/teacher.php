<h2>Gestion des professeurs</h2>

<?php
    echo "<br>";
    require_once ("vue/vue_insert_teacher.php");
    echo "<br>";
    $Teachers=$unControleur->selectAllTeachers();

    if(isset($_POST['Valider'])){
        $unControleur->insertTeacher($_POST);
    }

    echo "<br>";
    require_once ("vue/vue_teacher.php");
?>