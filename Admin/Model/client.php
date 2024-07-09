<?php
    require_once 'db.php';
    function addCli($prenom, $email,$telephone){
        $sql = "INSERT INTO `user` (`id`,`Prenom`, email,telephone) VALUES (NULL,'$prenom', '$email', '$telephone');";
        return executeSQL($sql);
    }
    function listCli(){
        $sql = "SELECT * FROM user";
        return executeSQL($sql);
    }
    function deleteCli($id){
        $sql = "DELETE FROM user WHERE id=$id;";
        return executeSQL($sql);
    }
    function recherchecli($key){
        $sql = "SELECT * FROM user WHERE id LIKE '%$key%' ";
        return executeSQL($sql);
    }
    if(isset($_GET['ok'])){
        deleteCli($_GET['ok']);
        header("location:http://localhost/Birrwagne/Admin/?page=client");
    }
    
?>