<?php
    require_once 'db.php';
    function listCom(){
        $sql = "SELECT * FROM commande";
        return executeSQL($sql);
    }
    function deleteCom($id){
        $sql = "DELETE FROM commande WHERE id=$id;";
        return executeSQL($sql);
    }
    function delete(){
        $sql = "DELETE FROM commande;";
        return executeSQL($sql);
    }
    if(isset($_GET['ok'])){
        deleteCom($_GET['ok']);
        header("location:http://localhost/Birrwagne/Admin/?page=commande");
    }
    if (isset($_GET['val'])) {
        if ($_GET['val'] == true) {
            delete();
            header("location:http://localhost/Birrwagne/Admin/?page=commande");
        }
       
    }
    
?>