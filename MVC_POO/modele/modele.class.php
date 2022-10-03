<?php
    class Modele
    {
        private $unPDO;

        public function __construct ($serveur, $bdd, $user, $mdp){
            $this->unPDO = null;
            try{
                $this->unPDO = new PDO("mysql:host=".$serveur.";dbname=".$bdd,$user,$mdp); // mdp : root sur mac
            }
            catch(PDOException $exp){
                echo "Impossible de se connecter au serveur";
                echo $exp->getMessage();
            }

        }
        public function selectAllClasses(){
            if ($this->unPDO != null){
                $requete = "select * from classe;";

                //preparation de la requete avant execution

                $select = $this->unPDO-> prepare($requete);

                //execution de la requete

                $select -> execute();

                //extraction des donnees

                $lesClasses = $select->fetchAll();
                return $lesClasses;
            } else {
                return null;
            }
        }
        public function insertClasse($tab){
            if ($this->unPDO != null){
                $requete = "insert into classe values (null, :nom, :salle, :diplome); ";
                $donnees = array(":nom"=>$tab['nom'],
                                ":salle"=>$tab['salle'],
                                ":diplome"=>$tab['diplome']);
                $insert = $this->unPDO->prepare($requete);
                $insert->execute($donnees);
            }
        }
        public function deleteClasse($idclasse){
            if ($this->unPDO != null){
                $requete = "delete from classe where idclasse = :idclasse; ";
                $donnees = array(":idclasse"=>$idclasse);
                $insert = $this->unPDO->prepare($requete);
                $insert->execute($donnees);
            }
        }
        public function updateClasse($tab){
            if ($this->unPDO != null){
                $requete = "update class set nom = :nom, salle = :salle, diplome = :diplome where idclasse = :idclasse; ";
                $donnees = array(":nom"=>$tab['nom'],
                ":salle"=>$tab['salle'],
                ":diplome"=>$tab['diplome'],
                ":idclasse"=>$tab['idclasse']);
                $insert = $this->unPDO->prepare($requete);
                $insert->execute($donnees);
            }
        }

        public function selectWhereClasse($idclasse){
            if ($this->unPDO != null){
                $requete = "select * from classe where idclasse = :idclasse; ";
                $donnees = array(":idclasse"=>$idclasse);
                $insert = $this->unPDO->prepare($requete);
                $insert->execute($donnees);
                $uneClasse = $select->fetch(); //une seule classe
                return $uneClasse;
            }
        }

        public function selectAllTeachers(){
            if ($this->unPDO != null){
                $requete = "select * from professeur;";

                //preparation de la requete avant execution

                $select = $this->unPDO-> prepare($requete);

                //execution de la requete

                $select -> execute();

                //extraction des donnees

                $Teachers = $select->fetchAll();
                return $Teachers;
            } else {
                return null;
            }
        }
        public function insertTeacher($tab){
            if ($this->unPDO != null){
                $requete = "insert into professeur values (null, :nom, :prenom, :diplome, :email); ";
                $donnees = array(":nom"=>$tab['nom'],
                                ":prenom"=>$tab['prenom'],
                                ":diplome"=>$tab['diplome'],
                                ":email"=>$tab['email']);
                $insert = $this->unPDO->prepare($requete);
                $insert->execute($donnees);
            }
        }
        public function selectAllStudents(){
            if ($this->unPDO != null){
                $requete = "select * from etudiant;";

                //preparation de la requete avant execution

                $select = $this->unPDO-> prepare($requete);

                //execution de la requete

                $select -> execute();

                //extraction des donnees

                $Students = $select->fetchAll();
                return $Students;
            } else {
                return null;
            }
        }
        public function insertStudent($tab){
            if ($this->unPDO != null){
                $requete = "insert into etudiant values (null, :nom, :prenom, :adresse, :email, :idclasse); ";
                $donnees = array(":nom"=>$tab['nom'],
                                ":prenom"=>$tab['prenom'],
                                ":adresse"=>$tab['adresse'],
                                ":email"=>$tab['email'],
                                ":idclasse"=>$tab['idclasse']);
                $insert = $this->unPDO->prepare($requete);
                $insert->execute($donnees);
            }
        }
        public function selectAllTeachings(){
            if ($this->unPDO != null){
                $requete = "select * from enseignement;";

                //preparation de la requete avant execution

                $select = $this->unPDO-> prepare($requete);

                //execution de la requete

                $select -> execute();

                //extraction des donnees

                $Teachings = $select->fetchAll();
                return $Teachings;
            } else {
                return null;
            }
        }
        public function insertTeaching($tab){
            if ($this->unPDO != null){
                $requete = "insert into enseignement values (null, :matiere, :nbheures, :coeff, :annee, :idclasse, :idprof); ";
                $donnees = array(":matiere"=>$tab['matiere'],
                                ":nbheures"=>$tab['nbheures'],
                                ":coeff"=>$tab['coeff'],
                                ":annee"=>$tab['annee'],
                                ":idprof"=>$tab['idprofesseur'],
                                ":idclasse"=>$tab['idclasse']);
                $insert = $this->unPDO->prepare($requete);
                $insert->execute($donnees);
            }
        }
    }
?> 