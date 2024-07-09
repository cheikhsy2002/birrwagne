<?php
    require_once 'Model/db.php';
    //session_start();
    //$id = $_SESSION['id'];

//if(!isset($user_id)){
  // header('location:login.php');
//};


if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['nom'];
   $product_price = $_POST['prix'];
   $product_image = $_POST['image'];
   $product_quantity = $_POST['quantite'];

   $sql = ("SELECT * FROM `cart` WHERE produit = '$product_name' ") or die('query failed');
   $result=mysqli_query(getConnexion(),$sql);

   if(mysqli_num_rows($result) > 0){
    echo "<script lang='JavaScript'>alert('produit deja ajouter')</script>";
   }else{
      $sql=("INSERT INTO `cart`(produit, prix, image, quantité) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity')") or die('query failed');
      return executeSQL($sql);
      echo "<script lang='JavaScript'>alert('produit ajouter avec succès')</script>";
        header('location:index.php?page=poulet');
   }
   

};

  
if(isset($_GET['delete_all'])){
   mysqli_query($conn, "DELETE FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
   header('location:index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poulet</title>
    <link rel="stylesheet" href="Style/bootstrap-5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="Style/Style.css">
    <link rel="stylesheet" href="Style/produit.css">
</head>
<body>
<div class="products">
<div class="box-container">

<?php
    $sql=("SELECT * FROM produit WHERE description LIKE '%poulet%';");
    $result=mysqli_query(getConnexion(),$sql);
    if(mysqli_num_rows($result) > 0){
      while($fetch_product = mysqli_fetch_assoc($result)){
?>
   <form method="post" class="box" action="View/produit.php" style="text-align: center;" >
      <img style="margin-top: 10%;" src="./images/<?php echo $fetch_product['image'];?>" alt="" height="100">
      <div class="nom"><?php echo $fetch_product['nom']; ?></div>
      <div class="prix"><?php echo $fetch_product['prix']; ?> CFA</div>
      <input type="number" min="1" name="quantite" value="1">
      <input type="hidden" name="image" value="<?php echo $fetch_product['image']; ?>">
      <input type="hidden" name="nom" value="<?php echo $fetch_product['nom']; ?>">
      <input type="hidden" name="prix" value="<?php echo $fetch_product['prix']; ?>">
      <br>
      
      <button type="submit" class="btn btn-info" name="add_to_cart">add to cart</button>
   </form>
   
<?php
   };
};
?>

</div>
</div>
</body>
</html>