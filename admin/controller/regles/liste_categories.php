<?php
include_once('model/regles/delete_categorie.php');
include_once('model/regles/afficher_categories.php');
$title='Liste des catégories';
if(isset($_GET['id'])&&is_numeric($_GET['id'])){
    delete_categorie_regles_by_id($_GET['id']);
}
$categories = get_categories();
$load[] .= '../assets/js/confirm_delete.js';
include_once('view/regles/liste_categories.php');