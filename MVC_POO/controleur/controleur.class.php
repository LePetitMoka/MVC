<?php
    require_once ("modele/modele.class.php");

    class Controleur
    {
        private $unModele ; //instance de la classe Modele

        public function __construct ($serveur, $bdd, $user, $mdp){
            $this->unModele = new Modele($serveur, $bdd, $user, $mdp);
        }

        public function selectAllClasses(){
            $lesClasses = $this->unModele->selectAllClasses();
            // on fait traiter les données

            return $lesClasses;
        }
        public function selectAllTeachers(){
            $Teachers = $this->unModele->selectAllTeachers();
            // on fait traiter les données

            return $Teachers;
        }
    }
?>