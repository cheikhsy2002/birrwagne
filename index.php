<?php session_start();

    if (isset($_GET['page'])){
        if (!isset($_SESSION['email'])) {
            require_once 'menu.php';
        }else {
            
            require_once 'menu2.php';
        }
        
        switch($_GET['page']){
            case 'poulet':
                require_once 'View/poulet.php';
                require_once 'PHP/footer.php';
                break;
            case 'cart':
                require_once 'PHP/cart.php';
                require_once 'PHP/footer.php';
                break;
            case 'nokoss':
                require_once 'View/nokoss.php';
                require_once 'PHP/footer.php';
                break;
            case 'legumes':
                require_once 'View/legumes.php';
                require_once 'PHP/footer.php';
                break;
            case 'guedj':
                require_once 'View/guedj.php';
                require_once 'PHP/footer.php';
                break;
            case 'yett':
                require_once 'View/yett.php';
                require_once 'PHP/footer.php';
                break;
            case 'jus':
                require_once 'View/jus.php';
                require_once 'PHP/footer.php';
                break;
            case 'login':
                require_once 'login.php';
                break;
            case 'inscription':
                require_once 'inscription.php';
                break;
            case 'info':
                require_once 'View/info.php';
                break;
        }
    }else {
        if (!isset($_SESSION['email'])) {
            require_once 'menu.php';
            require_once 'présentation.php';
        require_once 'PHP/footer.php'; 
        }else {
            if (isset($_GET['mo'])){
                if ($_GET['mo']==true) {
                    echo "<div class = 'alert alert-success'>information modifier </div>";
                }
            }
            if (isset($_GET['aj'])){
                if ($_GET['aj']==true) {
                    echo "<div class = 'alert alert-success'>produit ajouter</div>";
                }
            }
            if (isset($_GET['nn'])){
                if ($_GET['nn']==true) {
                    echo "<div class = 'alert alert-danger'>produit déja ajouter</div>";
                }
            }
            require_once 'menu2.php';
            require_once 'présentation.php';
        require_once 'PHP/footer.php'; 
        }
          
    }
    
    
?>