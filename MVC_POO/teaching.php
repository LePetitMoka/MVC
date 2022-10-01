<h2>Gestion des enseignements</h2>

<?php
    echo "<br>";
    require_once ("vue/vue_insert_teaching.php");
    echo "<br>";
    $Teachings=$unControleur->selectAllTeachings();
    echo "<br>";
    require_once ("vue/vue_teaching.php");
?>