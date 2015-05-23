<?php include_once(HEADER); ?>
<p>Voici la page pour l'ajout d'une règle</p>
<form method='post' action='?module=regles&action=traitement_ajout_regle'>
    <label for='categorie_de_regles_idcategorie_de_regles'>Categories :</label>
    <select name='categorie_de_regles_idcategorie_de_regles' id='categorie_de_regles_idcategorie_de_regles'>
        <option selected> </option>
        <?php foreach($categories as $categorie){ ?>
            <option value='<?php echo $categorie['idcategorie_de_regles'] ?>'><?php echo $categorie['nom_categorie_de_regles'] ?></option>
        <?php } ?>
    </select>
    <label for='titre_regles'>Titre :</label>
    <input type='text' name='titre_regles' id='titre_regles' value=''/>
    <label for='nom_regles'>Nom de la regle :</label>
    <input type='text' name='nom_regles' id='nom_regles' value=''/>
    <label for='description_regles'>Contenu de la règle :</label>
    <textarea rows='10' cols='50' name='description_regles' id='description_regles' placeholder=""></textarea>
    <input type='submit' value='Envoyer'/>
</form>
<?php include_once(FOOTER); ?>