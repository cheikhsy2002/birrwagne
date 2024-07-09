<!DOCTYPE html>
<html lang="en">
   <head>
      <title>LISTE</title>
      <meta charset="UTF-8">
      <link href="Style/style.css" rel="stylesheet">
      <link href="Style/bootstrap-cerulean.min.css" rel="stylesheet">
      <script src="Script/script.js"></script>
   </head>
   <body>
   <div class="container col-md-9 col-md-offset-2 spacer">
         <div class="panel panel-info">
            <div class="panel-heading" style="text-align: center;"><h2>Liste Commande</h2></div> 
            <div class="panel-body"> 
               <table class="table table-condensed table-hover">
                  <tr>
                     <th>#</th>
                     <th>client</th>
                     <th>images</th>
                     <th>produit</th>
                     <th>prix</th>
                     <th>qquantité</th>
                     <th>supprimer</th>
                  </tr>
                  <?php
                  require_once 'Model/db.php';
                  require_once 'Model/commande.php';
                  $liste = listCom();
                     while($tab = mysqli_fetch_row($liste)){
                        echo "<tr>
                                 <td>$tab[0]</td>
                                 <td>$tab[1]</td>
                                 <td><img src='../images/$tab[2]' width=30 </td>
                                 <td>$tab[3]</td>
                                 <td>$tab[4]</td>
                                <td>$tab[5]</td>
                                 <td><a onclick='return confirmation();' class='btn btn-danger' href='Model/commande.php?ok=$tab[0]'>Supprimer</a></td>
                              </tr>";
                     }
                  ?>
               </table>
               <a href="Model/commande.php?val=true" class="btn btn-danger">Tout Supprimer</a>
            </div>       
         </div>
      </div>
   </body>
</html>