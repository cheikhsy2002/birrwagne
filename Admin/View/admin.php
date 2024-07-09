<?php
    require_once 'Model/db.php';
    require_once 'Model/admin.php';
    if (isset($_POST['login'])) {
        $id = $_POST['id'];
        $login=$_POST['login'];
        $password= $_POST['password'];
        updateCont($id,$login, $password,);
        header("location:http://localhost/Birrwagne/admin/");
        
    }


?>
<!DOCTYPE html>
<html>
<head>
	<title>ajout compte</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../../Style/bootstrap-5.1.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.1/css/all.css">
</head>
<body>
<div class="box">
		<h1>LOGIN</h1>
		<form  method="POST" action="">
			<div class="inBox">
            <input type="text" value="<?= $_SESSION['id']?>" readonly required="required" name="id">
			</div>
            <div class="inBox">
            <input type="text" value="<?= $_SESSION['login']?>"  required="required" name="login">
			</div>
			<div class="inBox">
            <input type="password" value="<?= $_SESSION['password']?>"  required="required" name="password">
			</div>
			<input type="submit" name="" value="modifer">
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