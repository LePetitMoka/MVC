<h2>Liste des professeurs</h2>
<table border = '1' bordercolor='red'>
    <tr>
        <td>Id Professeur<td/>
        <td>Nom Prof<td/>
        <td>Prenom<td/>
        <td>Diplome<td/>
        <td>Email<td/>
    <tr/>
<?php
    foreach ($lesProfesseurs as $unProfesseur){
        echo "<tr>";
        echo "<td>".$unProfesseur['idprofesseur']."<td/>";
        echo "<td>".$unProfesseur['nom']."<td/>";
        echo "<td>".$unProfesseur['prenom']."<td/>";
        echo "<td>".$unProfesseur['diplome']."<td/>";
        echo "<td>".$unProfesseur['email']."<td/>";
        echo "<tr/>";
    }
?>
</table>