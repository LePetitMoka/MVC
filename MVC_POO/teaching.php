<h2>Gestion des enseignements</h2>

<?php
    $lesClasses=$unControleur->selectAllClasses();
    $Teachers=$unControleur->selectAllTeachers();
    echo "<br>";
    require_once ("vue/vue_insert_teaching.php");
    echo "<br>";
    $Teachings=$unControleur->selectAllTeachings();

    if(isset($_POST['Valider'])){
        $unControleur->insertTeaching($_POST);
    }

    echo "<br>";
    require_once ("vue/vue_teaching.php");
?>