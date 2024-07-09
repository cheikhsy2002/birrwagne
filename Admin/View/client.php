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
   <form methode="GET" action="?page=client" style="margin-top: 10px; margin-left: 500px;">
    <input type="hidden" name="page" value="client">
    <input type="text" name="key" style="border-radius:5px;" >
    <button type="submit" class="btn btn-info">search</button>
   </form>
   <div class="container col-md-9 col-md-offset-2 spacer">
         <div class="panel panel-info">
            <div class="panel-heading">Liste Client</div> 
            <div class="panel-body"> 
               <table class="table table-condensed table-hover">
                  <tr>
                     <th>#</th>
                     <th>prénom et nom</th>
                     <th>email</th>
                     <th>mot de passe</th>
                     <th>tétéphone</th>
                     <th>adresse</th>
                     <th>supprimer</th>
                  </tr>
                  <?php
                  require_once 'Model/db.php';
                  require_once 'Model/client.php';
                  $liste = listCli();
                  if (isset($_GET['key'])){
                     $liste = recherchecli($_GET['key']);
             }
                     while($tab = mysqli_fetch_row($liste)){
                        echo "<tr>
                                 <td>$tab[0]</td>
                                 <td>$tab[1]</td>
                                 <td>$tab[2]</td>
                                 <td>$tab[3]</td>
                                 <td>$tab[4]</td>
                                 <td>$tab[5]</td>
                                 <td><a onclick='return confirmation();' class='btn btn-danger' href='Model/client.php?ok=$tab[0]'>Supprimer</a></td>
                              </tr>";
                     }
                  ?>
               </table>
            </div>       
         </div>
      </div>
   </body>
</html>