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
   <?php
   if (isset($_GET['md'])) {
      if ($_GET['md'] == true) {
          echo "<div class = 'alert alert-success'>Modification effectuer </div>";
      }
  }
   ?>
   <form methode="GET" action="?page=listC" style="margin-top: 10px; margin-left: 500px;">
    <input type="hidden" name="page" value="listC">
    <input type="text" name="key" style="border-radius:5px;" >
    <button type="submit" class="btn btn-info">search</button>
   </form>
   <div class="container col-md-9 col-md-offset-2 spacer">
         <div class="panel panel-info">
            <div class="panel-heading">Liste produit</div> 
            <div class="panel-body"> 
               <table class="table table-condensed table-hover">
                  <tr>
                     <th>#</th>
                     <th>nom</th>
                     <th>prix</th>
                     <th>images</th>
                     <th>description</th>
                     <th>Action 1</th>
                     <th>Action 2</th>
                  </tr>
                  <?php
                  require_once '../Model/db.php';
                  require_once 'Model/produit.php';
                  $liste = listpro();
                     while($tab = mysqli_fetch_row($liste)){
                        echo "<tr>
                                 <td>$tab[0]</td>
                                 <td>$tab[1]</td>
                                 <td>$tab[2]</td>
                                 <td><img src='../images/$tab[3]' width=30 </td>
                                 <td>$tab[4]</td>
                                 <td><a href='?page=modif&ok=$tab[0]' class='btn btn-primary'>Modifier</a></td>
                                 <td></td>
                                </tr>";
                     }
                  ?>
               </table>
            </div>       
         </div>
      </div>
   </body>
</html>