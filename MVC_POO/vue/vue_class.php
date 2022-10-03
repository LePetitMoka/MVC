<h2>Liste des classes</h2>
<div class="table-responsive">
    <table class="table table-hover table-bordered text-center" border="1" bordercolor='blue'>
        <tr class="table-dark">
            <td>Id Classe</td>
            <td>Nom Classe</td>
            <td>Salle d'etude</td>
            <td>Diplome preparé</td>
            <td>Operations</td>
        </tr>
    <?php
        foreach ($lesClasses as $uneClasse){
            echo "<tr>";
            echo "<td>".$uneClasse['idclasse']."</td>";
            echo "<td>".$uneClasse['nom']."</td>";
            echo "<td>".$uneClasse['salle']."</td>";
            echo "<td>".$uneClasse['diplome']."</td>";

            echo "<td> 
            <a href='index.php?page=1&action=sup&idclasse=".$uneClasse['idclasse']."'> <img src='images/supp.png' height = '30' width = '30'> </a>
            <a href='index.php?page=1&action=edit&idclasse=".$uneClasse['idclasse']."'> <img src='images/edit.png' height = '30' width = '30'> </a>";

            echo "</td>";

            echo "</tr>";
        }
    ?>
    </table>
</div>