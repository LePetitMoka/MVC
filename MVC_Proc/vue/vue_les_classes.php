<h2>Liste des classes</h2>
<table border = '1' bordercolor='blue'>
    <tr>
        <td>Id Classe<td/>
        <td>Nom Classe<td/>
        <td>Salle d'etude<td/>
        <td>Diplome preparé<td/>
    <tr/>
<?php
    foreach ($lesClasses as $uneClasse){
        echo "<tr>";
        echo "<td>".$uneClasse['idclasse']."<td/>";
        echo "<td>".$uneClasse['nom']."<td/>";
        echo "<td>".$uneClasse['salle']."<td/>";
        echo "<td>".$uneClasse['diplome']."<td/>";
        echo "<tr/>";
    }
?>
</table>