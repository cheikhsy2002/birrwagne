<?php
    require_once '../../Model/db.php';
    require_once '../Model/admin.php';
    if (isset($_POST['aj'])) {
        extract($_POST);
        addCont($login,$password);
        header("location:http://localhost/Etat_Civil/?page=listO");
    }
    
    if(isset($_GET['ok'])){
        deleteCont($id)($_GET['ok']);
        header("location:http://localhost/Etat_Civil/?page=listO");
    }
?>