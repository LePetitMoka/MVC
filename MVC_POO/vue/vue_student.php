<h2>Liste des etudiants</h2>
<div class="table-responsive">
    <table class="table table-hover table-bordered text-center" border = '1' bordercolor='blue'>
        <tr class="table-dark">
            <td>ID Etudiant</td>
            <td>Nom</td>
            <td>Prenom</td>
            <td>Diplome preparé</td>
            <td>email</td>
            <td>ID Classe</td>
            <td>Operations</td>
        </tr>
    <?php
        foreach ($Students as $Student){
            echo "<tr>";
            echo "<td>".$Student['idetudiant']."</td>";
            echo "<td>".$Student['nom']."</td>";
            echo "<td>".$Student['prenom']."</td>";
            echo "<td>".$Student['adresse']."</td>";
            echo "<td>".$Student['email']."</td>";
            echo "<td>".$Student['idclasse']."</td>";

            echo "<td> 
            <a href='index.php?page=2&action=sup&idetudiant=".$Student['idetudiant']."'> <img src='images/supp.png' height = '30' width = '30'> </a>
            <a href='index.php?page=2&action=edit&idetudiant=".$Student['idetudiant']."'> <img src='images/edit.png' height = '30' width = '30'> </a>";

            echo "</td>";

            echo "</tr>";
        }
    ?>
    </table>
</div>