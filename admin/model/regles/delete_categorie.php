<?php
function delete_categorie_regles_by_id($id){
    global $pdo;
    try{
        $query = $pdo->prepare("
            DELETE FROM categorie_de_regles
            WHERE idcategorie_de_regles = :id
        ");
        $query->bindValue(':id',$id,PDO::PARAM_INT);
        $query->execute();
        return true;
    }catch ( Exception $e){
        return false;
    }

}