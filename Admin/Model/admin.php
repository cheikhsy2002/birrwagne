<?php
    function addCont($login,$password){
        $sql = "INSERT INTO `adm` (`id`,`login`, password) VALUES (NULL,'$login', '$password');";
        return executeSQL($sql);
    }
    function listCont(){
        $sql = "SELECT * FROM adm";
        return executeSQL($sql);
    }
    function deleteCont($id){
        $sql = "DELETE FROM adm WHERE id=$id;";
        return executeSQL($sql);
    }
    function updateCont($id,$login, $password){
        $sql = "UPDATE adm SET login ='$login', password='$password' WHERE id = $id";
        return executeSQL($sql);
    }
    
?>