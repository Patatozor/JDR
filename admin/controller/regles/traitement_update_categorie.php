<?php
if(isset($_GET['id'])&&is_numeric($_GET['id'])&&isset($_POST)&&$_POST['nom_categorie_de_regles']!=''&&$_POST['description_categorie_de_regles']!='') {
include_once('model/regles/update_categorie.php');
    if(!preg_match('#\<script#',$_POST['nom_categorie_de_regles'])&&!preg_match('#\<script#',$_POST['description_categorie_de_regles'])){
        if(update_categorie_regles_by_id($_GET['id'],$_POST['nom_categorie_de_regles'],$_POST['description_categorie_de_regles'])){
            $location = '?module=regles&action=liste_categories';
        }else{
            $location = '?module=regles&action=update_categorie&id='.$_GET['id'];
        }
    }else{
        $location = '?module=regles&action=update_categorie&id='.$_GET['id'];
    }
}else{
    $location = '?module=regles&action=index.php';
}
header('location:'.$location);