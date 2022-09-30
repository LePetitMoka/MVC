<h2>Liste des professeurs</h2>
<table border = '1' bordercolor='blue'>
    <tr>
        <td>IdProfesseur<td/>
        <td>Nom Prof<td/>
        <td>Prenom Prof<td/>
        <td>Diplome<td/>
        <td>email</td>
    <tr/>
<?php
    foreach ($Teachers as $Teacher){
        echo "<tr>";
        echo "<td>".$Teacher['idprofesseur']."<td/>";
        echo "<td>".$Teacher['nom']."<td/>";
        echo "<td>".$Teacher['prenom']."<td/>";
        echo "<td>".$Teacher['diplome']."<td/>";
        echo "<td>".$Teacher['email']."<td/>";
        echo "<tr/>";
    }
?>
</table>