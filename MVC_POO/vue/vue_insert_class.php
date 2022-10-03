<h3>Ajout de la nouvelle classe</h3>
<form action="" method="post">
    <table>
        <tr>
            <td>Nom de la classe :</td>
            <td><input type="text" name="nom" value = "<?= ($laClasse != null)?$laClasse['nom']:'' ?>">
            </td>
        </tr>
        <tr>
            <td>Salle de cours :</td>
            <td><input type="text" name="salle" value = "<?= ($laClasse != null)?$laClasse['salle']:'' ?>">
        </td>
        </tr>
        <tr>
            <td>Diplome préparé :</td>
            <td><input type="text" name="diplome" value = "<?= ($laClasse != null)?$laClasse['diplome']:'' ?>">
        </td>
        </tr>
            <td><input type="reset" name="Annuler" value="Annuler"></td>
            <td><input type="submit" name="Valider" value="Valider"></td>
        </tr>
    </table>
</form>