<?php
include_once('model/regles/afficher_categories.php');
$title='Ajouter une règle';
$categories = get_categories();
include_once('view/regles/ajouter_regle.php');