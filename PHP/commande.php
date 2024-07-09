<?php
require_once '../Model/db.php';
session_start();
$id = $_SESSION['id'];

$sql = "INSERT INTO commande (user_id,image,produit,prix,quantité) SELECT user_id,image,produit,prix,quantité FROM cart";
executeSQL($sql);

$sql = "DELETE FROM cart where user_id = '$id';";
executeSQL($sql);
header("location:http://localhost/Birrwagne/?page=cart&ok=true");

?>