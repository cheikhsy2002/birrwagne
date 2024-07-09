<?php
require_once '../Model/db.php';
session_start();
    

    if (isset($_POST['login'])){
		$login=$_POST['login'];
		$pass=$_POST['password'];
        //$password=md5($_POST['password']);
		$sql=("SELECT * FROM `adm` WHERE login = '$login' AND password = '$pass';");
		$result=mysqli_query(getConnexion(),$sql);
        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_assoc($result);
			$_SESSION['login'] = $row['login'];
			$_SESSION['password'] = $row['password'];
			$_SESSION['id'] = $row['id'];
            //echo  "<script lang='JavaScript'>alert('c'est bien')</script>";
            header("location:http://localhost/Birrwagne/Admin/");
        }else{
			echo "<script lang='JavaScript'>alert('information invalide')</script>";
        }
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<div class="box">
		<h1>LOGIN</h1>
		<form  method="POST" action="">
			<div class="inBox">
				<input type="text" name="login" required="" placeholder="nom d'utilisateur">
			</div>
			<div class="inBox">
				<input type="password" name="password" required="" placeholder="mot de passe">
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