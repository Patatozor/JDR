<?php
function get_categories(){
    global $pdo;
    try{
        $query = $pdo->query("
        SELECT *
        FROM categorie_de_regles
        ");
        $list = $query->fetchAll();
        return $list;
    }
    catch(Exception $e){
        return false;
    }
}