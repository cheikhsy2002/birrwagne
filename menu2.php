<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <link rel="canonical" href="headers/">
    <link rel="stylesheet" href="Style/bootstrap-5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="Style/headers.css">
    <link rel="stylesheet" href="Style/Style.css">
    <title>BirrWagne</title>
</head>
<body>
<header id="header" style=" width: 100%;">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="index.php" class="navbar-brand">
            <h3 class="px-5">
                <i class="fas fa-shopping-basket"></i> BiirWagne
            </h3>
        </a>
        <button class="navbar-toggler"
            type="button"
                data-toggle="collapse"
                data-target = "#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup"
                aria-expanded="false"
                aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <a href="?page=info" class="btn btn-primary" ><?php echo $_SESSION['prenom']?></a>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup"  style="float: right;">
            <div class="mr-auto"></div>
            <div class="navbar-nav" style="float: right">
                <a href="?page=cart" class="nav-item nav-link active">
                    <h5 class="px-5 cart">
                        <i class="fas fa-shopping-cart" ></i> Cart
                        <?php
                            require_once 'Model/db.php';
                            $id = $_SESSION['id'];
                        $sql = ("SELECT COUNT(*) FROM `cart` WHERE user_id = '$id'") or die('query failed');
                        $result=mysqli_query(getConnexion(),$sql);
                        if (mysqli_num_rows($result)> 0){
                            $fetch_product = mysqli_fetch_assoc($result);
                            echo $fetch_product['COUNT(*)'];
                        }
                        ?>
                    </h5>
                </a>
            </div>
        </div>
        <div class="col-md-3 text-end">
        <a type="button" href="PHP/logout.php" class="btn btn-outline-primary me-2">Logout</a>
      </div>
    </nav>
</header>

  </div>
<script src="Style/bootstrap-5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="Style/bootstrap-5.1.3/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>