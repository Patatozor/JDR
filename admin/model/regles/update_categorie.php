<?php
function update_categorie_regles_by_id($id,$nom,$description){
    global $pdo;
    try{
        $query = $pdo->prepare("
            UPDATE categorie_de_regles
            SET nom_categorie_de_regles = :nom,
            description_categorie_de_regles = :description
            WHERE idcategorie_de_regles = :id
        ");
        $query->bindValue(':id',$id,PDO::PARAM_INT);
        $query->bindValue(':nom',$nom,PDO::PARAM_STR);
        $query->bindValue(':description',$description,PDO::PARAM_STR);
        $query->execute();
        return true;
    }catch ( Exception $e){
        return false;
    }

}