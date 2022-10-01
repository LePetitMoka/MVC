<h2>Liste des matieres</h2>
<div class="table-responsive">
    <table class="table table-hover table-bordered text-center" border = '1' bordercolor='blue'>
        <tr class="table-dark">
            <td>Id Enseignement</td>
            <td>Matière</td>
            <td>Nb heures</td>
            <td>Coefficient</td>
            <td>Annee</td>
            <td>ID Classe</td>
            <td>ID Professeur</td>
        </tr>
    <?php
        foreach ($Teachings as $Teaching){
            echo "<tr>";
            echo "<td>".$Teaching['idenseignement']."</td>";
            echo "<td>".$Teaching['matiere']."</td>";
            echo "<td>".$Teaching['nbheures']."</td>";
            echo "<td>".$Teaching['coeff']."</td>";
            echo "<td>".$Teaching['annee']."</td>";
            echo "<td>".$Teaching['idclasse']."</td>";
            echo "<td>".$Teaching['idprofesseur']."</td>";
            echo "</tr>";
        }
    ?>
    </table>
</div>