<?php
    function addpro($nom, $prix,$image,$description){
        $sql = "INSERT INTO `produit` (`id`,`nom`, `login`, prix, `image`,description) VALUES (NULL,'$nom', '$prix','$image','$description');";
        return executeSQL($sql);
    }
    function listpro(){
        $sql = "SELECT * FROM produit";
        return executeSQL($sql);
    }
    function deletepro($id){
        $sql = "DELETE FROM produit WHERE id=$id;";
        return executeSQL($sql);
    }
    function getContpro($id){
        $sql = "SELECT * FROM produit WHERE id=$id";
        return executeSQL($sql);
    }
    function updatepro($id,$nom, $prix,$description){
        $sql = "UPDATE produit SET nom='$nom',prix = '$prix',description = '$description' WHERE id = $id";
        return executeSQL($sql);
    }
    function recherchepro($key){
        $sql = "SELECT * FROM produit WHERE nom LIKE '%$key%'";
        return executeSQL($sql);
    }
    
?>