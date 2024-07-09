<?php
require_once 'Model/db.php';
require_once 'Model/produit.php';
if (isset($_POST['mo'])) {
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $prix=$_POST['prix'];
    //$image = $_POST['image'];
    $description = $_POST['description'];
    //$image=$_FILES['image']['name'];
    //$chemin = $_FILES['image']['tmp_name'];
   // move_uploaded_file($chemin,"../../images/$image");
    updatepro($id,$nom, $prix,$description);
    header("location:http://localhost/Birrwagne/Admin/?page=produit&md=true");
}


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ajout Proff</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../../Style/bootstrap-5.1.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.1/css/all.css">
    </head>
    <body>
        <div class="container col-md-6 border" style="border-radius: 10px;">
            <div class="panel panel-info border">
                <div class="panel panel-heading"><h2 style="background: white; color: black; text-align: center;">modification produit </h2></div>
                <div class="panel-body" style="background: white;">
                    <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                            <img src="../images/<?php echo $link[3];?>" style="margin-left: 40%;" width="75px" alt="">
                            <br><label class="control-label">image</label>
                        </div>
						<div class="row">
                        <div class="form-group col-md-6">
								<label class="control-label">identifiant</label>
								<input type="int" value="<?php echo $link[0];?>" style="color: white; background: black;" readonly class="form-control" required="required" name="id">
							</div>
							<div class="form-group col-md-6">
								<label class="control-label">produit</label>
								<input type="text" value="<?php echo $link[1];?>" style="color: white; background: black;" class="form-control" required="required" name="nom">
							</div>
						</div>
						<div class="row">
                            <div class="form-group col-md-6">
								<label class="control-label">Prix</label>
								<input type="int" value="<?php echo $link[2];?>" style="color: white; background: black;" class="form-control" required="required" name="prix">
							</div>
							<div class="form-group col-md-6">
								<label class="control-label">description</label>
								<input type="text" value="<?php echo $link[4];?>" style="color: white; background: black;" class="form-control" required="required" name="description">
							</div>
						</div>
                        <div>&nbsp;</div>
                        <button class="btn btn-danger" type="reset" name="an">ANNULER</button>
                        <button class="btn btn-success" type="submit" name="mo">AJOUTER</button>
                    </form>
                </div>
            </div>
        </div>
		<div>&nbsp;</div>
		<div>&nbsp;</div>
		<div>&nbsp;</div>
		<div>&nbsp;</div>
		<div>&nbsp;</div>
		<div>&nbsp;</div>
		<div>&nbsp;</div>
		<div>&nbsp;</div>
		<div>&nbsp;</div>
		<div>&nbsp;</div>
		<div>&nbsp;</div>
		<div>&nbsp;</div>
		<div>&nbsp;</div>
		<div>&nbsp;</div>
		<div>&nbsp;</div>
		<div>&nbsp;</div>
    </body>
</html>
<style>
    
</style>