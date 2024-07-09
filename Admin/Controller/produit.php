<?php    
session_start();
    require_once '../../Model/db.php';
    require_once '../Model/produit.php';
    if (isset($_POST['aj'])) {
        $nom=$_POST['nom'];
        $prix = $_POST['prix'];
        $image=$_FILES['image']['name'];
        $chemin = $_FILES['avatar']['tmp_name'];
        move_uploaded_file($chemin,"../../images/$image");
        addpro($nom, $prix,$image);
        header("location:http://localhost/Etat_Civil/?page=listU");
    }
    if (isset($_POST['mo'])) {
        $id = $_POST['id'];
        $nom=$_POST['nom'];
        $prix = $_POST['prix'];
        $image=$_FILES['image']['name'];
        $chemin = $_FILES['avatar']['tmp_name'];
        move_uploaded_file($chemin,"../../images/$image");
        updatepro($id,$nom, $prix,$image);
        header("location:http://localhost/Etat_Civil/");
        
    }
    if(isset($_GET['ok'])){
        if($_SESSION['fonction']=='admin') {
            deleteCont($_GET['ok']);
            header("location:http://localhost/Etat_Civil/?page=listU");
        }else {
            //header("location:http://localhost/pg/?page=listcompte");
            echo "<script lang='JavaScript'>alert('non autorisé')</script>";
            
            
        }    
    }
?>