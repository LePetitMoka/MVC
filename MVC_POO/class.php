<h2>Gestion des classes</h2>

<?php
    require_once ("vue/vue_insert_class.php");
    $lesClasses=$unControleur->selectAllClasses();
    require_once ("vue/vue_class.php");
?>