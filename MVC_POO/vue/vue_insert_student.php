<h3>Ajout du nouvel etudiant</h3>
<form action="" method="post">
    <table>
        <tr>
            <td>Nom etudiant:</td>
            <td><input type="text" name="nom"></td>
        </tr>
        <tr>
            <td>Prenom:</td>
            <td><input type="text" name="prenom"></td>
        </tr>
        <tr>
            <td>Diplome:</td>
            <td><input type="text" name="adresse"></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="text" name="email"></td>
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
            <td><input type="reset" name="Annuler" value="Annuler"></td>
            <td><input type="submit" name="Valider" value="Valider"></td>
        </tr>
    </table>
</form>