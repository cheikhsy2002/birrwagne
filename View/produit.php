<?php
   require_once '../Model/db.php';
session_start();
$id = $_SESSION['id'];
   function remove($remove_id){
      $sql=("DELETE FROM `cart` WHERE id = '$remove_id'") or die('query failed');
      return executeSQL($sql);
   }
   function ajout($id,$product_name,$product_price,$product_image,$product_quantity){
      $sql=("INSERT INTO `cart`(user_id,produit, prix, image, quantité) VALUES($id,'$product_name', '$product_price', '$product_image', '$product_quantity')") or die('query failed');
       return executeSQL($sql);
   }
   function update($update_quantity,$update_id){
      $sql = ("UPDATE `cart` SET quantité = '$update_quantity' WHERE id = '$update_id'") or die('query failed');
      return executeSQL($sql);
   }
   function delete($id){
      $sql=("DELETE FROM `cart` WHERE user_id = '$id'") or die('query failed');
      return executeSQL($sql);
   }
   if(isset($_POST['update_cart'])){
      $update_quantity = $_POST['quantité'];
      $update_id = $_POST['id'];
      update($update_quantity,$update_id);
      header('location:http://localhost/Birrwagne/?page=cart');
      echo "<script lang='JavaScript'>alert('quantité modifier')</script>";
   }
   if(isset($_GET['delete'])){
      delete($_GET['delete']);
      header("location:http://localhost/Birrwagne/?page=cart");
      
   }
   if(isset($_GET['remove'])){
      remove($_GET['remove']);
      header("location:http://localhost/Birrwagne/?page=cart");
      
   }
   if(isset($_POST['add_to_cart'])){
      if(!isset($_SESSION['id'])) {
         header('location:http://localhost/Birrwagne/?page=login');
     }else{
   $product_name = $_POST['nom'];
    $product_price = $_POST['prix'];
    $product_image = $_POST['image'];
    $product_quantity = $_POST['quantite'];
 
    $sql = ("SELECT * FROM `cart` WHERE produit = '$product_name' ") or die('query failed');
    $result=mysqli_query(getConnexion(),$sql);
 
    if(mysqli_num_rows($result) > 0){
     echo "<script lang='JavaScript'>alert('produit deja ajouter')</script>";
     header("location:http://localhost/Birrwagne/?nn=true");
    }else{
      ajout($id,$product_name,$product_price,$product_image,$product_quantity);
      header("location:http://localhost/Birrwagne/?aj=true");
      echo "<script lang='JavaScript'>alert('produit ajouter avec succès')</script>";
    }
     }
    
    
 
 }
?>