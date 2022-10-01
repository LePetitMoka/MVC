<h2>Liste des etudiants</h2>
<table border = '1' bordercolor='blue'>
    <tr>
        <td>Id Etudiant<td/>
        <td>Nom<td/>
        <td>Prenom<td/>
        <td>Diplome preparé<td/>
    <tr/>
<?php
    foreach ($Students as $Student){
        echo "<tr>";
        echo "<td>".$Student['idclasse']."<td/>";
        echo "<td>".$Student['nom']."<td/>";
        echo "<td>".$Student['prenom']."<td/>";
        echo "<td>".$Student['adresse']."<td/>";
        echo "<td>".$Student['email']."<td/>";
        echo "<td>".$Student['idclasse']."<td/>";
        echo "<tr/>";
    }
?>
</table>