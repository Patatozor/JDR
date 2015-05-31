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
function get_categorie_by_id($id)
{
    global $pdo;
    try {
        $query = $pdo->prepare("
        SELECT *
        FROM categorie_de_regles
        WHERE idcategorie_de_regles = :id
        ");
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->execute();
        $categorie = $query->fetchAll();
        return $categorie;
    } catch (Exception $e) {
        return false;
    }
}