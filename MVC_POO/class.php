<h2>Gestion des classes</h2>

<?php
    echo "<br>";
    require_once ("vue/vue_insert_class.php");
    echo "<br>";
    $lesClasses=$unControleur->selectAllClasses();
    echo "<br>";
    require_once ("vue/vue_class.php");
?>