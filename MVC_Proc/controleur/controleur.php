<?php
    require_once("modele/modele.php");
    function selectLesClasses()
    {
        //on recupere les classes de la BDD
        $lesClasses = selectAllClasses();
        // je realise ici des traitements

        //apres je retourne les classes
        return $lesClasses;
    }
    function selectLesProfesseurs()
    {
        //on recupere les classes de la BDD
        $lesProfesseurs = selectAllProfesseurs();
        // je realise ici des traitements

        //apres je retourne les professeurs
        return $lesProfesseurs;
    }
?>