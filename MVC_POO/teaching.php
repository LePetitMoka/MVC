<h2>Gestion des enseignements</h2>

<?php
    require_once ("vue/vue_insert_teaching.php");
    $Teachings=$unControleur->selectAllTeachings();
    require_once ("vue/vue_teaching.php");
?>