<?php
include_once('model/regles/ajout_categorie.php');
$location = 'location:?module=regles&action=ajout_categorie';
if(isset($_POST['nom_categorie_de_regles'])){
    if(test_titre($_POST['nom_categorie_de_regles']&&$_POST['nom_categorie_de_regles']!='')){
        $titre_categorie = $_POST['nom_categorie_de_regles'];
    }
    if(isset($_POST['description_categorie_de_regles'])!=''){
        $description_categorie_de_regles = $_POST['description_categorie_de_regles'];
    }
    if(isset($titre_categorie)&&isset($description_categorie_de_regles)){
        insert_categorie($titre_categorie,$description_categorie_de_regles);
    }
}
header($location);
