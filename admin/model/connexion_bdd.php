<?php
try{
    $dns = 'mysql:host='.BDD_HOST.';dbname='.BDD_NAME;
    $utilisateur = BDD_LOGIN;
    $motDePasse = BDD_MDP;

    //Options de user
    $options = array(
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

    global $pdo;
    $pdo = new PDO( $dns, $utilisateur, $motDePasse, $options );
}
catch ( Exception $e )
{
    return false;
}
