<?php
function insert_regle($nom_regles,$titre_regles,$description_regles){
    global $pdo;
    try{
        $query = $pdo->prepare("
        INSERT INTO regles
        (nom_regles,titre_regles,description_regles)
        VALUES
        (:nom,:titre,:description)
        ");
        $query->bindValue(':nom',$nom_regles,PDO::PARAM_STR);
        $query->bindValue(':titre',$titre_regles,PDO::PARAM_STR);
        $query->bindValue(':description',$description_regles,PDO::PARAM_STR);
        $query->execute();
        return true;
    }
    catch(Exception $e){
        return false;
    }
}