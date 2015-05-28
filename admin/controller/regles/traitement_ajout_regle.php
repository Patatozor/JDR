<?php
include_once('model/regles/ajout_regle.php');
$location = 'location:?module=regles&action=ajout_regles';
if(isset($_POST['nom_regles'])){
    if(test_titre($_POST['nom_regles']&&$_POST['titre_regles']!='')){
        $nom_regles = $_POST['nom_regles'];
    }
    if(isset($_POST['description_regles'])!=''){
        $description_regles = $_POST['description_regles'];
    }
    if(isset($_POST['titre_regles'])!=''){
        $titre_regles = $_POST['titre_regles'];
    }
    if(isset($titre_regles)&&isset($description_regles)&&isset($nom_regles)){
        insert_regle($nom_regles,$titre_regles,$description_regles);
    }
}
header($location);
