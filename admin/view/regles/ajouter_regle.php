<?php include_once(HEADER); ?>
<p>Voici la page pour l'ajout d'une règle</p>
    <form method='post' action=''>
        <label for='titre_regles'>Titre :</label>
        <input type='text' name='titre_regles' id='titre_regles' value=''/>
        <label for='nom_regles'>Nom de la regle :</label>
        <input type='text' name='nom_regles' id='nom_regles' value=''/>
        <label for='description_regles'>Contenu de la règle :</label>
        <textarea rows='10' cols='50' value='' name='description_regles' id='description_regles' placeholder=""></textarea>
        <input type='submit' value='Envoyer'/>
    </form>
<?php include_once(FOOTER); ?>