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
        public function insertClasse($tab){
            //appliquer des controles sur les données

            //inserer dans la BDD
            $this->unModele->insertClasse($tab);
        }
        public function deleteClasse($idclasse){
            //on controle la presence de l'ID
            $this->unModele->deleteClasse($idclasse);
        }
        public function updateClasse($tab){
            //on controle la presence de l'ID
            $this->unModele->updateClasse($tab);
        }
        public function selectWhereClass($idclasse){
            //on controle la presence de l'ID
            $this->unModele->selectWhereClasse($idclasse);
        }
        public function selectAllTeachers(){
            $Teachers = $this->unModele->selectAllTeachers();
            // on fait traiter les données

            return $Teachers;
        }
        public function insertTeacher($tab){
            //appliquer des controles sur les données
            
            //inserer dans la BDD
            $this->unModele->insertTeacher($tab);
        }
        public function selectAllStudents(){
            $Students = $this->unModele->selectAllStudents();
            // on fait traiter les données

            return $Students;
        }
        public function insertStudent($tab){
            //appliquer des controles sur les données
            
            //inserer dans la BDD
            $this->unModele->insertStudent($tab);
        }
        public function selectAllTeachings(){
            $Teachings = $this->unModele->selectAllTeachings();
            // on fait traiter les données

            return $Teachings;
        }
        public function insertTeaching($tab){
            //appliquer des controles sur les données
            
            //inserer dans la BDD
            $this->unModele->insertTeaching($tab);
        }
    }
?>