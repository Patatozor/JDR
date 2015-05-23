<?php include_once(HEADER); ?>
    <p>Voici la page pour l'ajout d'une catégorie de règle</p>
    <form method='post' action='?module=regles&action=traitement_ajout_categorie'>
        <label for='nom_categorie_de_regles'>Nom de la catégorie :</label>
        <input type='text' name='nom_categorie_de_regles' id='nom_categorie_de_regles' value=''/>
        <label for='desciption_categorie_de_regles'>Description de la catégorie :</label>
        <textarea rows='10' cols='50' name='desciption_categorie_de_regles' id='desciption_categorie_de_regles' placeholder=""></textarea>
        <input type='submit' value='Envoyer'/>
    </form>
<?php include_once(FOOTER); ?>