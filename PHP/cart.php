<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BirrWagne</title>
    <link rel="stylesheet" href="Style/bootstrap-5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="Style/produit.css">
</head>
<body>
   <?php
   if (isset($_GET['ok'])) {
      if ($_GET['ok'] == true) {
          echo "<div class = 'alert alert-success'>Commande enregistrer </div>";
      }
  }
   ?>
<div class="shopping-cart">

<h1 class="heading" style="margin-top: 5%;">shopping cart</h1>

<table class="table table-condensed table-novel table-hover">
   <thead>
      <th>image</th>
      <th>name</th>
      <th> &nbsp; &nbsp; price</th>
      <th>&nbsp;&nbsp;&nbsp;quantity</th>
      <th>total price</th>
      <th>action</th>
   </thead>
   <tbody>
   <?php
   require_once 'Model/db.php';
   if (!isset($_SESSION['email'])) {
      $sql = ("SELECT * FROM cart WHERE user_id = '-1'") or die('query failed');
      $result=mysqli_query(getConnexion(),$sql);
   }else {
      $id = $_SESSION['id'];
      $sql = ("SELECT * FROM cart WHERE user_id = '$id'") or die('query failed');
      $result=mysqli_query(getConnexion(),$sql);
   }
   

      $grand_total = 0;
      if(mysqli_num_rows($result) > 0){
         while($fetch_cart = mysqli_fetch_assoc($result)){
   ?>
      <tr>
         <td><img src="./images/<?php echo $fetch_cart['image']; ?>" width="50" alt=""></td>
         <td><?php echo $fetch_cart['produit']; ?></td>
         <td><?php echo $fetch_cart['prix']; ?> Fcfa</td>
         <td>
            <form action="View/produit.php" method="post">
               <input type="hidden" name="id" value="<?php echo $fetch_cart['id']; ?>">
               <input type="number" min="1" name="quantité" value="<?php echo $fetch_cart['quantité']; ?>">
               <input type="submit" name="update_cart" value="update" class="option-btn">
              
            </form>
         </td>
         <td><?php echo $sub_total = ($fetch_cart['prix'] * $fetch_cart['quantité']); ?> Fcfa</td>
         <td><a href="View/produit.php?remove=<?php echo $fetch_cart['id']; ?>" class="delete-btn" onclick="return confirm('remove item from cart?');">remove</a></td>
      </tr>
   <?php
      $grand_total += $sub_total;
         }
      }else{
         echo '<tr><td style="padding:20px; text-transform:capitalize;" colspan="6">no item added</td></tr>';
      }
   ?>
   <tr class="table-bottom">
      <td colspan="4">grand total :</td>
      <td><?php echo $grand_total; ?> Fcfa</td>
   </tr>
</tbody>
</table>

<div class="cart-btn">  
   <a href="PHP/commande.php" class="btn <?php echo ($grand_total > 1)?'':'disabled'; ?>">valider la commande</a>
</div>  
</div>

</div>
</body>
</html>