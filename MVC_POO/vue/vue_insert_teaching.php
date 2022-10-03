<h3>Ajout du nouvel enseignement</h3>
<form action="" method="post">
    <table>
        <tr>
            <td>Matière:</td>
            <td><input type="text" name="matiere"></td>
        </tr>
        <tr>
            <td>Nombre d'heures:</td>
            <td><input type="text" name="nbheures"></td>
        </tr>
        <tr>
            <td>Coefficient:</td>
            <td><input type="text" name="coeff"></td>
        </tr>
        <tr>
            <td>Année:</td>
            <td><input type="text" name="annee"></td>
        </tr>
        <tr>
            <td>Classe:</td>
            <td>
                <select name="idclasse">
                    <?php
                        foreach ($lesClasses as $uneClasse){
                            echo "<option value='".$uneClasse['idclasse']."'>".$uneClasse['nom']."</option>";
                        }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Professeur:</td>
            <td>
                <select name="idprofesseur">
                    <?php
                        foreach ($Teachers as $Teacher){
                            echo "<option value='".$Teacher['idprofesseur']."'>".$Teacher['nom']."</option>";
                        }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td><input type="reset" name="Annuler" value="Annuler"></td>
            <td><input type="submit" name="Valider" value="Valider"></td>
        </tr>
    </table>
</form>