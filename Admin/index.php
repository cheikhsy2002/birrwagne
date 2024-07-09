<?php 
session_start();
    if(!isset($_SESSION['login'])) {
        header('location:login.php');
    }else{
        if (isset($_GET['page'])){
            require_once 'newmenu.php';
            switch($_GET['page']){
                case 'produit':
                    require_once 'View/produit.php';
                    break;
                case 'client':
                    require_once 'View/client.php';
                    break;
                case 'commande':
                    require_once 'View/commande.php';
                    break;
                case 'admin':
                    require_once 'View/admin.php';
                    break;
                case 'modif':
                    require_once 'Model/db.php';
                    require_once 'Model/produit.php';
                    $tab = getContpro($_GET['ok']);
                    $link = mysqli_fetch_row($tab);
                    require_once 'View/modif.php';
                    break;
            }
        }else{
            require_once 'newmenu.php';
        }
    }


?>