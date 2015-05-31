<?php include_once("view/layout/header.php"); ?>
<table class="table">
    <tr>
        <th>ID Catégorie</th>
        <th>Nom de la catégorie</th>
        <th>Editer</th>
        <th>Supprimer</th>
    </tr>
    <?php foreach($categories as $categorie): ?>
        <tr>
            <td><?php echo $categorie['idcategorie_de_regles'] ?></td>
            <td><?php echo $categorie['nom_categorie_de_regles'] ?></td>
            <td><a href="?module=regles&action=update_categorie&id=<?php echo $categorie['idcategorie_de_regles'] ?>">Editer</a></td>
            <td><a class="supprimer" href="?module=regles&action=liste_categories&id=<?php echo $categorie['idcategorie_de_regles'] ?>">Supprimer</a></td>
        </tr>

    <?php endforeach; ?>
</table>

<?php include_once("view/layout/footer.php"); ?>