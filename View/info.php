<?php
    require_once 'Model/db.php';
    function updatecli($id,$prenom,$email, $password,$telephone,$adresse){
        $sql = "UPDATE user SET prenom ='$prenom', email = '$email', password='$password', telephone ='$telephone', adresse = '$adresse' WHERE id = $id";
        return executeSQL($sql);
    }
    if (isset($_POST['email'])) {
        $id = $_POST['id'];
        $prenom=$_POST['prenom'];
        $email = $_POST['email'];
        $password= md5($_POST['password']);
        $telephone = $_POST['telephone'];
        $adresse = $_POST['adresse'];
        updatecli($id,$prenom,$email, $password,$telephone,$adresse);
        header("location:http://localhost/Birrwagne/?mo=true");
        
    }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Inscription</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="pg/style/style.css">
	<link rel="stylesheet" href="pg/style/bootstrap-5.0.0-beta2-dist/css/bootstrap.min.css">
</head>
<body>
	<div class="box">
		<h1>Inscription</h1>
		<form  method="POST" action="">
        <div class="inBox">
            <input type="text" value="<?= $_SESSION['id']?>" readonly required="required" name="id">
			</div>
			<div class="inBox">
				<input type="text" value="<?= $_SESSION['prenom']?>" name="prenom" required="" placeholder="Prénom et nom">
			</div>
			<div class="inBox">
				<input type="text" value="<?= $_SESSION['email']?>" name="email" required="" placeholder="email">
			</div>
			<div class="inBox">
				<input type="password" value="<?= $_SESSION['password']?>" name="password" required="" placeholder="password">
			</div>
            <div class="inBox">
				<input type="text" value="<?= $_SESSION['telephone']?>" name="telephone" required="" placeholder="Téléphone" value="+221">
			</div>
			<div class="inBox">
				<input type="text" value="<?= $_SESSION['adresse']?>" name="adresse" required="" placeholder="adresse">
			</div>
			<input type="submit" name="" value="Send">
		</form>
	</div>
</body>
</html>
<style>
    body{
	margin: 0;
	padding: 0;
	background: url(img/R.jpg);
	background-size: cover;/* empecher la repetition de l image*/
}
a{
	color: blue;
	right: 50px;
}
.box{
	position: absolute;
	top: 50%;
	left: 50%;
	height: auto;
	transform: translate(-50%, -50%);
	width: 400px;
	padding: 40px;
	font-family: 'Times New Roman', Times, serif;
	background:rgb(0, 0, 0,.7);
	box-sizing: border-box;/* permet d ajuster la taille du box*/
	box-shadow: 0 15px 25px rgba(0,0,0,.6); /* permet de donner une ombre*/
	border-radius: 10px;/* arrondir les angle*/
}
.box h1{
	text-align: center;
	color: white;
	padding: 0;
	font-weight: bold;/*permet de mettre en gras*/
}
.box .inBox{
	position: relative;	
}
.box label{
	color: white;
}
.box select{
	background: transparent;
	color: white;
}
.box .inBox input{
	width: 100%;
	padding: 10px 0;
	font-size: 16px;
	color: white;
	border-bottom: 30px;
	border: none;
	border-bottom: 1px solid white;
	outline: none;
	background: transparent;
}
.box input[type="submit"]{
	background: transparent;
	border: none;
	margin-top: 20px;
	color: white;
	background: green;
	padding: 10px 20px;
	cursor: pointer;
	border-radius: 6px;
	font-size: 16px;
	font-weight: bold;
}
</style>