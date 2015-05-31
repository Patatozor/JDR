<?php
if(isset($_GET['id'])&&is_numeric((int) $_GET['id'])){
    include_once('model/regles/afficher_categories.php');
    if($categorie = get_categorie_by_id($_GET['id'])){
        if(count($categorie)!=1){
            echo 'Il y a eu une erreur.';
        }else{
            $categorie = $categorie['0'];
            $title = 'Modifier categorie: '.$categorie['nom_categorie_de_regles'];
            include_once('view/regles/modifier_categorie.php');
        }
    }
}else{
    header('location:index.php');
}