<h2>Liste des professeurs</h2>
<div class="table-responsive">
    <table class="table table-hover table-bordered text-center" border = '1' bordercolor='blue'>
        <tr class="table-dark">
            <td>ID Professeur</td>
            <td>Nom</td>
            <td>Prenom</td>
            <td>Diplome</td>
            <td>email</td>
            <td>Operations</td>
        </tr>
    <?php
        foreach ($Teachers as $Teacher){
            echo "<tr>";
            echo "<td>".$Teacher['idprofesseur']."</td>";
            echo "<td>".$Teacher['nom']."</td>";
            echo "<td>".$Teacher['prenom']."</td>";
            echo "<td>".$Teacher['diplome']."</td>";
            echo "<td>".$Teacher['email']."</td>";

            echo "<td> 
            <a href='index.php?page=3&action=sup&idprofesseur=".$Teacher['idprofesseur']."'> <img src='images/supp.png' height = '30' width = '30'> </a>
            <a href='index.php?page=3&action=edit&idprofesseur=".$Teacher['idprofesseur']."'> <img src='images/edit.png' height = '30' width = '30'> </a>";

            echo "</td>";

            echo "</tr>";
        }
    ?>
    </table>
</div>