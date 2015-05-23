<?php
function insert_categorie($titre_categorie,$description_categorie_de_regles){
    global $pdo;
    try{
        $query = $pdo->prepare("
        INSERT INTO categorie_de_regles
        (nom_categorie_de_regles,description_categorie_de_regles)
        VALUES
        (:titre,:description)
        ");
        $query->bindValue(':titre',$titre_categorie,PDO::PARAM_STR);
        $query->bindValue(':desciption',$description_categorie_de_regles,PDO::PARAM_STR);
        $query->execute();
        return true;
    }
    catch(Exception $e){
        return false;
    }
}