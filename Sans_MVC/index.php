<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IRIS Scolarité</title>
</head>
<body>
    <center>
            <h1>IRIS SCOLARITE</h1>
            <h2>Liste des classes</h2>
            <?php
                //connexion à la BDD:
                //-- instanciation de la classe PDO : PHP Data Object
                try{
                    $unPDO = new PDO("mysql:host=localhost;dbname=mon_iris_2023","root","root"); // mdp : root sur mac
                }
                catch(PDOException $exp){
                    echo "Impossible de se connecter au serveur";
                    echo $exp->getMessage();
                }

                //Requete
                
                $requete = "select * from classe;";

                //preparation de la requete avant execution

                $select = $unPDO-> prepare($requete);

                //execution de la requete

                $select -> execute();

                
                //extraction des donnees

                $lesClasses = $select->fetchAll();

                //afficher les classes (moche)

                #var_dump($lesClasses);

                //propre

                echo "<table border = '1' bordercolor='blue'>
                    <tr>
                    <td>Id Classe<td/>
                    <td>Nom Classe<td/>
                    <td>Salle d'etude<td/>
                    <td>Diplome preparé<td/>
                    <tr/>";

                foreach ($lesClasses as $uneClasse){
                    echo "<tr>";
                    echo "<td>".$uneClasse['idclasse']."<td/>";
                    echo "<td>".$uneClasse['nom']."<td/>";
                    echo "<td>".$uneClasse['salle']."<td/>";
                    echo "<td>".$uneClasse['diplome']."<td/>";
                    echo "<tr/>";
                }
                echo "</table>";
            ?>
    </center>
</body>
</html>