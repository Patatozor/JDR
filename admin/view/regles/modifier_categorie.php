<?php include_once(HEADER); ?>
    <p>Voici la page pour l'ajout d'une catégorie de règle</p>
    <form method='post' action='?module=regles&action=traitement_update_categorie&id=<?php echo $categorie['idcategorie_de_regles']; ?>'>
        <label for='nom_categorie_de_regles'>Nom de la catégorie :</label>
        <input type='text' name='nom_categorie_de_regles' id='nom_categorie_de_regles' value='<?php echo $categorie['nom_categorie_de_regles']; ?>'/>
        <label for='description_categorie_de_regles'>Description de la catégorie :</label>
        <textarea rows='10' cols='50' name='description_categorie_de_regles' id='description_categorie_de_regles' placeholder=""><?php echo $categorie['description_categorie_de_regles']; ?></textarea>
        <input type='submit' value='Envoyer'/>
    </form>
<?php include_once(FOOTER); ?>