<?php
include_once('model/regles/ajout_categorie.php');
$locationerror = 'location:?module=regles&action=ajout_categorie';
if(isset($_POST['nom_categorie_de_regles'])){
    if(test_titre($_POST['nom_categorie_de_regles']&&$_POST['nom_categorie_de_regles']!='')){
        $titre_categorie = $_POST['nom_categorie_de_regles'];
    }else{
        header($locationerror);
        exit;
    }
    echo 'toto';
}