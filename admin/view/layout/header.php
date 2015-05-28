<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="utf-8" />
            <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css" />
            <link rel="stylesheet" href="../assets/css/base.css" />
            <title><?php echo $title; ?></title>
        </head>
        <body>
            <header>
                <h2>Projet JDR</h2>
                <ul class="topnav">
                    <li>
                        <a href="?module=accueil&action=home">Home</a>
                        <ul class="dropdown">
                        </ul>

                    </li>
                    <li>
                        <a href="?module=regles&action=liste_regles">Règles</a>
                        <ul class="dropdown">
                            <li><a href="?module=regles&action=liste_regles">Liste des règles</a></li>
                            <li><a href="?module=regles&action=ajout_categorie">Ajouter une règle</a></li>
                            <li><a href="#">Liste des catégories</a></li>
                            <li><a href="#">Ajouter une catégorie</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Personnages</a>
                        <ul class="dropdown">
                            <li><a href="#">Liste des personnages</a></li>
                            <li><a href="#">Créer un personnage</a></li>
                            <li><a href="#">Liste des groupes</a></li>
                            <li><a href="#">Créer un groupe</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Classes</a>
                        <ul class="dropdown">
                            <li><a href="#">Liste des classes</a></li>
                            <li><a href="#">Créer une classe</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Races</a>
                        <ul class="dropdown">
                            <li><a href="#">Liste des races</a></li>
                            <li><a href="#">Créer une race</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Regions</a>
                        <ul class="dropdown">
                            <li><a href="#">Liste des pays</a></li>
                            <li><a href="#">Créer un pays</a></li>
                            <li><a href="#">Liste des régions</a></li>
                            <li><a href="#">Créer une région</a></li>
                            <li><a href="#">Liste des villes</a></li>
                            <li><a href="#">Créer une ville</a></li>
                            <li><a href="#">Liste des lieux communs</a></li>
                            <li><a href="#">Créer un lieu commun</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Competences</a>
                        <ul class="dropdown">
                        </ul>
                    </li>
                    <li>
                        <a href="#">Traits</a>
                        <ul class="dropdown">
                        </ul>
                    </li>
                </ul>
            </header>
            <div id="page">
