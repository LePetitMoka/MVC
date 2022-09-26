<?php
    function connexion(){
        $unPDO = null;
        try{
            $unPDO = new PDO("mysql:host=localhost;dbname=mon_iris_2023","root","root"); // mdp : root sur mac
        }
        catch(PDOException $exp){
            echo "Impossible de se connecter au serveur";
            echo $exp->getMessage();
        }
        return $unPDO;
    }

    function selectAllClasses(){
        //Requete
        $unPDO = connexion();
        if ($unPDO != null){
            $requete = "select * from classe;";

            //preparation de la requete avant execution

            $select = $unPDO-> prepare($requete);

            //execution de la requete

            $select -> execute();

            //extraction des donnees

            $lesClasses = $select->fetchAll();
            return $lesClasses;
        } else {
            return null;
        }
    }
    function selectAllProfesseurs(){
        //Requete
        $unPDO = connexion();
        if ($unPDO != null){
            $requete = "select * from professeur;";

            //preparation de la requete avant execution

            $select = $unPDO-> prepare($requete);

            //execution de la requete

            $select -> execute();

            //extraction des donnees

            $lesProfesseurs = $select->fetchAll();
            return $lesProfesseurs;
        } else {
            return null;
        }
    }
?>